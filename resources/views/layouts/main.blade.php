@include('parts.head')
<body>
    @include('parts.header')
    <main>
        <div id="home">
            <div class="container">
                @yield('homeContent')
            </div>
        </div>
    </main>
    @include('parts/footer')
</body>
</html>