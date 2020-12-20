<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Flowers;
use App\Cart;
use App\Transaction;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Flowerscategories;
class FlowerController extends Controller
{
    public function home(){
        $fcategories = Flowerscategories::all();
        return view('home',['fcategories'=>$fcategories]);
    }
    public function product($id){
        $flowers = Flowers::where('categories_id',$id)->paginate(8);
        $categories = Flowerscategories::where('id',$id)->get();
        return view('product',['flowers'=>$flowers,'categories'=>$categories]);
    }
    public function detail($id){
        // $flowers = Flowers::where('id',$id)->get();
        $flowers = DB::table('flowers')->where('id', $id)->get();
        
        return view('detail',['flowers'=>$flowers]);
    }
    public function update($id){
        $flowers = Flowers::where('id',$id)->get();
        $categories = Flowerscategories::all();
        return view('update',['flowers'=>$flowers,'categories'=>$categories]);
    }
    public function updatecategory($id){
        $categories = Flowerscategories::where('id',$id)->get();
        $fcategories = Flowerscategories::all();
        return view('updatecategory',['fcategories'=>$fcategories,'categories'=>$categories]);
    }
    public function edit(Request $request, $id){
        $this->validate($request, [
            'flowername' => 'required|unique:flowers|min:5',
            'categories_id' => 'required',
            'flowerprice' => 'required|numeric|min:50000',
            'flowerdescription' => 'required|min:20',
            'flowerphoto' => 'required',
        ]);
        $img = $request->file('flowerphoto');
        $source = '/public/images/' . $img->getClientOriginalName();
        Storage::put($source, file_get_contents($img->getRealPath()));
        $itemInput=$request->all();
        $flowers = Flowers::where('id',$id)->get()->first();
        $flowers->flowername = $itemInput['flowername'];
        $flowers->flowerprice = $itemInput['flowerprice'];
        $flowers->flowerdescription = $itemInput['flowerdescription'];
        $flowers->flowerphoto =$img->getClientOriginalName();
        $flowers->categories_id = $itemInput['categories_id'];
        $flowers->save();
        return redirect('/product/'.$flowers->categories_id);
    }
    public function editCategory(Request $request, $id){
        $this->validate($request, [
            'flowercategoryname' => 'required|unique:flowerscategories|min:5',
            'flowercategoryphoto' => 'required',
        ]);
        $img = $request->file('flowercategoryphoto');
        $source = '/public/images/' . $img->getClientOriginalName();
        Storage::put($source, file_get_contents($img->getRealPath()));

        $itemInput=$request->all();
        $categories = Flowerscategories::where('id',$id)->get()->first();
        $categories->flowercategoryname = $itemInput['flowercategoryname'];
        $categories->flowercategoryphoto = $img->getClientOriginalName();
        $categories->save();
        return redirect('/admin');

    }
    public function delete($id){
        Flowers::destroy($id);
        return back()->with('success', 'deleted!');
    }
    public function deletecategory($id){
        Flowerscategories::destroy($id);
        return back()->with('success', 'deleted!');
    }
    public function search(Request $request, $id) {
        $items = Flowerscategories::find($id);
        $search = $request->search;
        $filter = $request->filter;
        
        if($filter == "name") {
            $flowers = DB::table('flowers')
                        ->where('categories_id', $id)
                        ->where('name','like',"%".$search."%")
                        ->paginate(8);
        } else if($filter == "price") {
            $flowers = DB::table('flowers')
                        ->where('categories_id', $id)
                        ->whereBetween('price', [0, $search])
                        ->paginate(8);
        }
        
        $data = [
            'flowers' => $flowers,
            'items' => $items,
            'search' => $search
        ];
        return view('search', compact('data'));
    }

    public function add(){
        $categories = Flowerscategories::all();
        return view('add',['categories'=>$categories]);
    }
    public function addproduct(Request $request){
        $this->validate($request, [
            'flowername' => 'required|unique:flowers|min:5',
            'categories_id' => 'required',
            'flowerprice' => 'required|numeric|min:50000',
            'flowerdescription' => 'required|min:20',
            'flowerphoto' => 'required',
        ]);
        $img = $request->file('flowerphoto');
        $source = '/public/images/' . $img->getClientOriginalName();
        Storage::put($source, file_get_contents($img->getRealPath()));

        $itemInput=$request->all();
        $flowers = new Flowers();
        $flowers->flowername = $itemInput['flowername'];
        $flowers->flowerprice = $itemInput['flowerprice'];
        
        $flowers->categories_id = $itemInput['categories_id'];
        $flowers->flowerdescription = $itemInput['flowerdescription'];
        $flowers->flowerphoto = $img->getClientOriginalName();
        $flowers->save();
        return redirect('/');

    }
    public function mycart(){
        if(!Session::has('cart')){
            
        return view('mycart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        // dd($cart->flowers);
        return view('mycart',['flowers'=>$cart->flowers, 'tPrice'=>$cart->tPrice]);
    }
    public function addtocart(Request $request, $id){
        $this->validate($request, [
            'qty' => 'required|min:1',
        ]);
        $flower = Flowers::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($flower, $flower->id, $request['qty']);
        $request->session()->put('cart',$cart);
        
        // dd($request->session()->get('cart'));
        return back()->with('success','Flower Added to Cart!');
    }
    public function updateCart(Request $request, $id){
        
        $flower = Flowers::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        // $cart = Session::get('cart');
        if($request['qty']==0){
            $request->session()->forget('price');
            // dd($oldCart);
            return back()->with('success','Flower Added to Cart!');
        }else{
            
        $cart = new Cart($oldCart);
        
        $cart->update($flower, $flower->id, $request['qty']);
        $request->session()->put('cart',$cart);
        
        return back()->with('success','Flower Added to Cart!');
        }
    }

    public function change(){
        
        return view('change');
    }
    public function changePassword(Request $request){
        $this->validate($request, [
            'password' => 'required',
            'password_new' => 'required|min:8|confirmed',
            'password_confirm' => 'required|same:new_password',
        ]);
        if(!(Hash::check($request->get('password'), Auth::user()->password))){
            return back()->with('error','Password Does Not Match!');
        }
        if(strcmp($request->get('password'),$request->get('password_new'))==0){
            return back()->with('error','Password cannot be the same with new password!');
        }
        // $data = Auth::user();
        // $data->password = bcrypt($request->get('new-password'));
        // $data->save();
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password_new)]);
        return back()->with('message','Password Changed!');
    }
    public function checkout()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $transaction = new Transaction();
        $transaction->cart = serialize($cart);
        $transaction->user_id = Auth::user()->id;
        // dd($transaction);
        $transaction->save();
        Session::forget('cart');
        return back()->with('message','Transaction Success!');
    }
    public function transaction()
    {
        $transaction = Transaction::all();
        return view('transaction',['transaction'=>$transaction]);
    }
    public function transactionDetail($id)
    {
        $transaction = Transaction::find($id);
        $cart = unserialize($transaction->cart);
        $flower = $cart->flowers;
        // dd($cart->tPrice);
        return view('transactiondetail',['transaction'=>$transaction,'flower'=>$flower,'cart'=>$cart]);
    }
}
