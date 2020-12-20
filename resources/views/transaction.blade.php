@extends('layouts.app')

@section('content')

<div class="container text-center">
    <h1 class="display-4 font-italic ">Your Transaction History</h1>
    @foreach ($transaction as $item)
        
    <a href="/transaction-detail/{{$item->id}}">Transaction at {{$item->created_at}}</a>

    @endforeach
</div>


@endsection