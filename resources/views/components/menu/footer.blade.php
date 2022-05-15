<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        {{-- <h4 class="widget-title text-white">About Us</h4> --}}
                        <img src="{{ asset('images/logo.png') }}" class="footer-logo" alt="" width="105" height="25">
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                        <div class="widget-call">
                            <i class="icon-phone"></i>
                            Got Question? Call us 24/7
                            <a href="tel:0789815746">0789815746</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white">Useful Links</h4>

                        <ul class="widget-list">
                            <li><a href="{{ route('client.about') }}">About US</a></li>
                            <li><a href="{{ route('client.service') }}">Our Services</a></li>
                            <li><a href="{{ route('client.network') }}">Network</a></li>
                            <li><a href="{{ route('client.contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white">Services</h4>

                        <ul class="widget-list">
                            <li><a href="{{ route('client.service') }}">Online Services</a></li>
                            <li><a href="{{ route('client.product-service') }}">Products And Services</a></li>
                            <li><a href="{{ route('client.network') }}">Network</a></li>
                            <li><a href="{{ route('client.contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white">My Account</h4>

                        <ul class="widget-list">
                            @guest
                                <li><a href="{{ route('register') }}" >Sign In</a></li>
                            @else
                                <li><a href="{{ route('client.account.index') }}"> Dashboard</a></li>
                            @endguest
                                <li><a href="#">Track My Shipping</a></li>
                                <li><a href="#">Help</a></li>
                            @guest
                            @else
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Log out </a></li>
                            @endguest

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © {{ now()->year }} {{ env('APP_NAME') }}. All Rights Reserved.</p>
            <figure class="footer-payments">
                <img src="{{ asset('images/payments.png') }}" alt="" width="272" height="20">
            </figure><!-- End .footer-payments -->
        </div>
    </div>
</footer>
