<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>

<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="/">
                            <img src="assets/img/logofmc.png" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li><a href="/" onclick="setActive(event, 'home')">Home</a>
                            </li>
                            <li><a href="/aboutus" onclick="setActive(event, 'about')">About</a></li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Check Out</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                </ul>
                            </li> --}}
                            <li onclick="setActive(event, 'gallery')"><a
                                    href="{{ route('frontend.gallery') }}">Gallery</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="single-news.html">Single News</a></li>
                                </ul> --}}
                            </li>
                            <li onclick="setActive(event, 'contact')"><a
                                    href="{{ route('frontend.contact') }}">Contact</a></li>
                            <li onclick="setActive(event, 'services')"><a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="/services">Wedding and Debut</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="/agreements"><i class="fas fa-book"></i></a>
                                    {{-- <a class="mobile-hide" href="#"></a> --}}
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function setActive(event, link) {
        // Remove the active class from all links
        var navLinks = document.querySelectorAll('nav a');
        navLinks.forEach(function(elem) {
            elem.classList.remove('current-list-item');
        });

        // Add the active class to the clicked link
        event.target.classList.add('current-list-item');
    }
</script>
<!-- end header -->
