@include('parts.head')
<body>
    @include('parts.header')
    <main>
        <div id="home">
            <div class="container">
                {{-- sezione pasta lunga --}}
                <section class="lunghe">
                    <h2>Le lunghe</h2>
                    <div class="container__cards">
                        {{-- cards --}}
                        @foreach ($lunghe as $pasta)
                        <div class="card">
                            <img src="{{ $pasta['src'] }}" alt="$pasta['titolo']">
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
                            <img src="{{ $pasta['src'] }}" alt="$pasta['titolo']">
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
                            <img src="{{ $pasta['src'] }}" alt="$pasta['titolo']">
                        </div>
                        @endforeach
                        {{-- /cards --}}
                    </div>
                </section>
                {{-- /sezione pasta cortissima --}}
            </div>
        </div>
    </main>
    @include('parts/footer')
</body>
</html>