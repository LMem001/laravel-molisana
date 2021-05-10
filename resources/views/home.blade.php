@extends('layouts.main')

{{-- head --}}
@section('pageTitle')
    Home-Page || La Molisana
@endsection
{{-- /head --}}

{{-- body --}}
@section('background')home__background--img @endsection

@section('content')
{{-- sezione pasta lunga --}}
<section class="lunghe">
    <h2>Le lunghe</h2>
    <div class="container__cards">
        {{-- cards --}}
        @foreach ($lunghe as $pasta)
        <div class="card">
            <a href="{{route('product', ['id' => $pasta['id']])}}"><img src="{{ $pasta['src'] }}" alt="$pasta['titolo']"></a>
        </div>
        @endforeach
        {{-- /cards --}}
    </div>
</section>
{{-- /sezione pasta lunga --}}
{{-- sezione pasta corta --}}
<section class="corte">
    <h2>Le corte</h2>
    <div class="container__cards">
        {{-- cards --}}
        @foreach ($corte as $pasta)
        <div class="card">
            <a href="{{route('product', ['id' => $pasta['id']])}}"><img src="{{ $pasta['src'] }}" alt="$pasta['titolo']"></a>
        </div>
        @endforeach
        {{-- /cards --}}
    </div>
</section>
{{-- /sezione pasta corta --}}
{{-- sezione pasta cortissima --}}
<section class="cortissime">
    <h2>Le cortissime</h2>
    <div class="container__cards">
        {{-- cards --}}
        @foreach ($cortissime as $pasta)
        <div class="card">
            <a href="{{route('product', ['id' => $pasta['id']])}}"><img src="{{ $pasta['src'] }}" alt="$pasta['titolo']"></a>
        </div>
        @endforeach
        {{-- /cards --}}
    </div>
</section>
{{-- /sezione pasta cortissima --}}
@endsection
{{-- /body --}}