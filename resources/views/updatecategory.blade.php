@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
        @foreach ($categories as $item)
        <div class=" mb-4 mb-md-0 col-xl-6 col-lg-8">
            
                
            <img class="card-img-top" src="{{ URL::to('/storage/images') }}/{{$item->flowercategoryphoto}}" alt="Card image cap">
            
        </div>

        <div class="col-md-6 mt-4">
        <form method="POST" action="/editcategory/{{$item->id}}" enctype="multipart/form-data">
            
            @csrf <!-- {{ csrf_field() }} -->   
            
            <div class="form-group row">
            <label for="flowercategoryname" class="col-sm-3 col-form-label">Flower Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control @error('flowercategoryname') is-invalid @enderror" id="flowercategoryname" name="flowercategoryname" value="{{ old('flowercategoryname') }}" placeholder="Flower Name" required>
                @error('flowercategoryname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            </div>

            <div class="form-group row">
            <label for="flowercategoryphoto" class="col-sm-3 col-form-label">Flower Image</label>
            <div class="col-sm-8">
                <input type="file" name="flowercategoryphoto" class="form-control-file @error('flowercategoryphoto') is-invalid @enderror" id="flowercategoryphoto" required/>
                @error('flowercategoryphoto')
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
        @endforeach
    </div>
</div>

@endsection