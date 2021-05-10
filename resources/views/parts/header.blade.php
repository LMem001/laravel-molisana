<header>
    <div class="menu">
        <div class="menu__logo">
            <img src="{{ asset('images/marchio-sito-test.png') }}" alt="logo molisana">
        </div>
        <nav class="menu__nav">
            <ul>
                <li><a href="{{route('homepage')}}" class="{{Route :: getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}">Home</a></li>
                <li><a href="{{route('product', '0')}}" class="{{Route :: getCurrentRoute()->getName() == 'product' ? 'active' : ''}}">Prodotti</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </nav>
    </div>
</header>