@extends('layouts.app')

@section('content')

<div class="container">
    <form method="POST" action="/addproduct" enctype="multipart/form-data">
          
        @csrf <!-- {{ csrf_field() }} -->   
        <div class="form-group row">
            <label for="categories_id" class="col-sm-3 col-form-label">Category</label>
            <div class="col-sm-8">
                    <select id="categories_id" name="categories_id" class="form-control @error('categories_id') is-invalid @enderror" required>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ $category->flowercategoryname }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
          <label for="flowername" class="col-sm-3 col-form-label">Flower Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control @error('flowername') is-invalid @enderror" id="flowername" name="flowername" value="{{ old('flowername') }}" placeholder="Flower Name" required>
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
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="flowerprice" name="flowerprice" value="{{ old('flowerprice') }}" placeholder="Price" required>
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
            <textarea id="flowerdescription" type="text" name="flowerdescription" class="form-control @error('flowerdescription') is-invalid @enderror" name="flowerdescription" value="{{ old('flowerdescription') }}" placeholder="Description"rows="3" required></textarea>
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
                    {{ __('Add') }}
                </button>
            </div>
        </div>

      </form>
</div>
@endsection