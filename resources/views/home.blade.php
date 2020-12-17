@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($fcategories as $category)
        
    @foreach ($flowers as $item)
        
    @endforeach
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$flowers->flowerphoto}}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-text">{{$category->flowercategoryname}}</h3>
        </div>
    </div>

    @endforeach
</div>
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
