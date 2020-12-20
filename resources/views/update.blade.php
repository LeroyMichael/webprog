@extends('layouts.app')

@section('content')
    

<div class="container">
    <div class="row">
        <div class="col">
            
        </div>
    </div>
    @foreach ($flowers as $item)

    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
        <img class="card-img-top" src="{{ URL::to('/storage/images') }}/{{$item->flowerphoto}}" alt="Card image cap">
      </div>
      <div class="col-md-6">
      <form method="POST" action="{{ url('/update/'.$item->id) }}" enctype="multipart/form-data">
          
        @csrf <!-- {{ csrf_field() }} -->   
        <div class="form-group row">
            <label for="categories_id" class="col-sm-3 col-form-label">Category</label>
            <div class="col-sm-8">
                <select id="categories_id" name="categories_id" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ $category->flowercategoryname }}</option>
                    @endforeach
                </select>
                @error('categories_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
          <label for="flowername" class="col-sm-3 col-form-label">Flower Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control @error('flowername') is-invalid @enderror" id="flowername" name="flowername" value="{{$item->flowername}}" placeholder="{{$item->flowername}}" required>
            @error('flowername')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="flowerprice" class="col-sm-3 col-form-label">Flower Price</label>
          <div class="col-sm-8">
            <input type="text" class="form-control @error('flowerprice') is-invalid @enderror" id="flowerprice" name="flowerprice" value="{{$item->flowerprice}}" placeholder="{{$item->flowerprice}}" required>
            @error('flowerprice')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="flowerdescription" class="col-sm-3 col-form-label">Description</label>
          <div class="col-sm-8">
            <textarea id="flowerdescription" type="text" name="flowerdescription" class="form-control @error('flowerdescription') is-invalid @enderror" name="flowerdescription" value="{{ old('flowerdescription') }}" placeholder=" {{$item->flowerdescription}}"rows="3" required>{{$item->flowerdescription}}</textarea>
            @error('flowerdescription')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="flowerphoto" class="col-sm-3 col-form-label">Flower Image</label>
          <div class="col-sm-8">
            <input type="file" name="flowerphoto" class="form-control-file @error('flowerphoto') is-invalid @enderror" id="flowerphoto" required/>
            @error('flowerphoto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                </button>
            </div>
        </div>

      </form>
    </div>
    </div>

</div>
  @endforeach
@endsection