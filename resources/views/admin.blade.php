@extends('layouts.app')

@section('content')



<div class="container">
    <h1 class="display-4 font-italic text-center">Manage Categories</h1>
    
    <div class="row">
        @foreach ($fcategories as $item)
        
        <div class="col-sm-6 col-xl-3 col-lg-4 col-md-5">
        <div class="card text-center mb-4 item" style="width: 15rem;">
          <a class="" href="/detail/{{$item->id}}">
            <img class="card-img-top" src="storage/images/{{$item->flowercategoryphoto }}" alt="Card image cap">
          </a>
          <div class="card-body">
            <p class="card-text">{{$item->flowercategoryname}}</p>
            <button type="button" onclick="window.location.href='/delete-category/{{$item->id}}';"  class="btn btn-outline-danger" >Delete Category</button>
            <button type="button" onclick="window.location.href='/update-category/{{$item->id}}';" class="btn btn-outline-primary" >Update Category</button>
        
          </div>
        </div>
        
      </div>
        @endforeach
    </div>
</div>



@endsection