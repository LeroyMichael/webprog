@extends('layouts.app')

@section('content')
<main class="container">
    <div class="bg-light p-5 rounded">
      <h1>Navbar example</h1>
      <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
      <a class="btn btn-lg btn-primary" href="/docs/5.0/components/navbar/" role="button">View navbar docs »</a>
    </div>
  </main>
@if (Session::has('cart'))
    <div class="row">
        
      <div class=" mb-4 mb-md-0 col-xl-6 col-lg-8">
          <ul class="list-group">
            @foreach ($flowers as $item)
                <li class="list-group-item">
                    <span class="badge">
                        {{$item['qty']}}
                    </span>
                    <strong>
                        {{$item['flower']['flowername']}}
                    </strong>
                    <span class="label lable-success">
                        {{$item['price']}}
                    </span>
                </li>
            @endforeach
          </ul>
      </div>
    </div>
@else

@endif



@endsection