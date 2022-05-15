<header class="header header-7">
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{ route('client.index') }}" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logistic Management" width="120" height="25">
                </a>
            </div>

            <div class="header-right">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container {{ shortHandIfOptional(Request::segment(1), 'service', 'active', '') }}">
                            <a href="{{ route('client.service') }}" class="sf-with-ul">Online Service</a>
                        </li>
                        <li class="megamenu-container {{ shortHandIfOptional(Request::segment(1), 'product-service', 'active', '') }}">
                            <a href="{{ route('client.product-service') }}" class="sf-with-ul">Product And Service</a>
                        </li>
                        <li class="megamenu-container {{ shortHandIfOptional(Request::segment(1), 'about', 'active', '') }}">
                            <a href="{{ route('client.about') }}" class="sf-with-ul">About Us</a>
                        </li>
                        <li class="megamenu-container {{ shortHandIfOptional(Request::segment(1), 'contact', 'active', '') }}">
                            <a href="{{ route('client.contact') }}" class="sf-with-ul">Contact Us</a>
                        </li>
                    </ul>
                </nav>

                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                        </div>
                    </form>
                </div>

                @guest
                    <a href="{{ route('login') }}" class="ml-4 login-btn">
                        <span>Login</span>
                    </a>
                @else
                    @if (auth()->user()->hasRole('client'))
                        <a href="{{ route('client.account.index') }}" class="wishlist-link">
                            <i class="icon-user"></i> <span class="dashboard-text">Dashboard</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="ml-4 login-btn">
                            <span>Login</span>
                        </a>
                    @endif
                @endguest
            </div>
        </div>
    </div>
</header>
