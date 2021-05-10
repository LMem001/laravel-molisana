@extends('layouts.main')

@section('pageTitle')
    Product
@endsection

@section('background')background--col @endsection

@section('content')
<div class="product">
    <h1>{{ $pasta['titolo'] }}</h1>
    <img src="{{$pasta['src-h']}}">
    <img src="{{$pasta['src-p']}}" alt="$pasta['titolo']">
    <p>{!!$pasta["descrizione"]!!}</p>
</div>
@endsection