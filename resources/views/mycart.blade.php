@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('message'))
    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>
@endif
</div>
@if (Session::has('cart'))
<main class="container">
    
    <div class="row bg-light p-5 rounded">
    @foreach ($flowers as $item)
        
   
        <div class=" mb-4 mb-md-4  col-xl-4 col-md-4 col-sm-4 col-lg-4">
            <img class="card-img-top" src="/storage/images/{{$item['flower']['flowerphoto']}}" alt="Card image cap">
          </div>
          <div class=" mb-4 mb-md-0 col-xl-6 col-lg-8">
              <h1>{{$item['flower']['flowername']}}</h1>
            <p class="lead">Rp.{{number_format($item['price'])}}</p>
            
            <form action="/update-cart/{{$item['flower']['id']}}" method="post" enctype="multipart/form-data" >
                @csrf
            <div class="form-group mb-4">
                    <button type="button" class="btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                    >-</button>
                    <input class="col-xs-3" min="0" name="qty" value="{{$item['qty']}}" type="number">
                    <button type="button" class="btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    >+</button>
               
            </div>
            <button class="btn btn-lg btn-primary " type="submit"  role="button">Update</button>
        </form>
          </div>
    
    @endforeach
</div>
<div class="text-center m-4">

    <a type="button" href="/checkout" class="btn btn-danger ">Checkout</a>
</div>
</main>

@else

@endif




@endsection