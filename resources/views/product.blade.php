@extends('layouts.main')

{{-- head --}}
{{-- fontAwesome --}}
@section('fontAwesome')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection
{{-- /fontAwesome --}}

{{-- title --}}
@section('pageTitle')
    Product
@endsection
{{-- /title --}}
{{-- /head --}}

{{-- body --}}
@section('background')home__background--col @endsection

@section('content')
<a href="{{route('product', ['id' => $pasta['previous']])}}" class="btn__change previous_product"><i class="fas fa-chevron-left"></i></a>
<div class="product">
    <h1>{{ $pasta['titolo'] }}</h1>
    <img src="{{$pasta['src-h']}}">
    <img src="{{$pasta['src-p']}}" alt="$pasta['titolo']">
    <p>{!!$pasta["descrizione"]!!}</p>
</div>
<a href="{{route('product', ['id' => $pasta['next']])}}" class="btn__change next_product"><i class="fas fa-chevron-right"></i></a>
@endsection
{{-- body --}}