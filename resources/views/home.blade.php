@extends('layouts.app')

@section('content')

<div class="container">
        <h1 class="display-4 font-italic text-center">Welcome to Flowelto Shop</h1>
        <p class="lead my-3 text-center">The Best Flower Shop in Binus University</p>

    <div class="card-group justify-content-center" >
        @foreach ($fcategories as $category)
        <a class="m-3" href="/product/{{$category->id}}">
            <div class="card text-center m-3" style="width: 20rem;">
                <img class="card-img-top" src="storage/images/{{$category->flowercategoryphoto }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">{{$category->flowercategoryname}}</p>
                </div>
              </div>
        </a>
        @endforeach
        
    </div>
</div>

{{-- <div class="container-genre">
    @foreach ($fcategories as $category)
        <div class="card">
            <img src="{{$category->flowercategoryphoto}}" alt="">
            <div class="content">
                <h1>{{$category->flowercategoryname}}</h1>
            </div>
        </div>
    @endforeach
</div> --}}

{{-- <div class="container">
    <div class="card-group">
        @foreach ($fcategories as $category)
        
        <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src="{{$category->flowercategoryphoto}}" alt="Card image cap">
            <div class="card-body content">
              <h3 class="card-text title">{{$category->flowercategoryname}}</h3>
            </div>
        </div>
    
        @endforeach
    </div>
    
</div> --}}
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection
