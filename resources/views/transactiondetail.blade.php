@extends('layouts.app')

@section('content')

<div class="container text-center">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Flower Image</th>
            <th scope="col">Flower Name</th>
            <th scope="col">Subtotal</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>

        @foreach ($flower as $item)
        <tbody>
            <tr>
              <th><img class="card-img-top col-sm-4" src="/storage/images/{{$item['flower']['flowerphoto']}}" alt="Card image cap"></th>
              <td>{{$item['flower']['flowername']}}</td>
              <td>Rp.{{number_format($item['price'])}}</td>
              <td>{{$item['qty']}}</td>
            </tr>
          </tbody>
        @endforeach
        
      </table>
      <div class="text-right">
        Total Price: Rp.{{number_format($cart->tPrice)}}

      </div>
</div>

@endsection