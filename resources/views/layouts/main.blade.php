@include('parts.head')
<body>
    @include('parts.header')
    <main>
        <div id="home" class="@yield('background')">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </main>
    @include('parts/footer')
</body>
</html>