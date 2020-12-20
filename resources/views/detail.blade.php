@extends('layouts.app')

@section('content')
    

<div class="container">
  @if (session('success'))
      <div class="alert alert-success" role="alert">
          {{session('success')}}
      </div>
  @endif
    @foreach ($flowers as $item)
    <div class="row">
      <div class=" mb-4 mb-md-0 col-xl-6 col-lg-8">
        <img class="card-img-top" src="/storage/images/{{$item->flowerphoto}}" alt="Card image cap">
      </div>

      <div class="col-md-6 mt-4">
  
        <h5>{{ $item->flowername }}</h5>
       
        <p><span class="mr-1"><strong>Rp.{{number_format($item->flowerprice)}}</strong></span></p>
        <p class="pt-1">{{$item->flowerdescription}}</p>
        <hr>
        
        @if (Auth::user()->role != 'admin')
        <form action="/addtocart/{{$item->id}}" method="post"enctype="multipart/form-data" >
        @csrf
            <div class="table-responsive mb-2">
            <table class="table table-sm table-borderless">
                <tbody>
                <tr>
                    <td class="pl-0 pb-0 w-25">Quantity</td>
                </tr>
                <tr>
                    <td class="pl-0">
                    <div class="form-group mb-0">
                        <button type="button" class="btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                        >-</button>
                        <input class="col-xs-3 @error('qty') is-invalid @enderror" min="1" name="qty" value="1" type="number" required>
                        <button type="button" class="btn btn-primary" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        >+</button>
                        @error('qty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
            <button type="submit" class="btn btn-primary btn-md mr-1 mb-2">Add to Cart</button>
        </form>
        @endif
      </div>
    </div>
    @endforeach
  
</div>
@endsection