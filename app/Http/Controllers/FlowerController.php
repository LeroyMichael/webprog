<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function home(){
        // $type = DB::all();
        $flower = DB::table('flowers')->get();
        return view('home',['flowers'=>$flower]);
    }

}
