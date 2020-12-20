@extends('layouts.app')

@section('content')

<div class="container">
  @foreach ($categories as $item)
    <h1 class="display-4 font-italic text-center">Our 
      {{$item->flowercategoryname}}    
   </h1>
   @endforeach
   <form class="form-inline mb-4" type="get" action="{{url('/search/'.$item->id)}}">
    <div class="form-group">
      <select class="form-control" name="filter" id="category">
        <option>Name</option>
        <option>Price</option>
      </select>
    </div>
     <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
     <button class="btn btn-outline-light my-2" type="submit">Search</button>
   </form>
    <div class="row">
      @foreach ($flowers as $item)
      
      <div class="col-sm-6 col-xl-3 col-lg-4 col-md-5">
      <div class="card text-center mb-4 item" style="width: 15rem;">
        <a class="" href="/detail/{{$item->id}}">
          <img class="card-img-top" src="/storage/images/{{$item->flowerphoto}}" alt="Card image cap">
        </a>
        <div class="card-body">
          <p class="card-text">{{$item->flowername}}</p>
          <p class="card-text">Rp.{{number_format($item->flowerprice)}}</p>
          @if (Auth::user()->role == 'admin')
            <button type="button" onclick="window.location.href='/delete/{{$item->id}}';"  class="btn btn-outline-danger" >Delete</button>
            <button type="button" onclick="window.location.href='/update/{{$item->id}}';" class="btn btn-outline-primary" >Update</button>
          @endif
        </div>
      </div>
      
    </div>
      @endforeach
  </div>
        
    {{ $flowers->links() }}
    
</div>
@endsection