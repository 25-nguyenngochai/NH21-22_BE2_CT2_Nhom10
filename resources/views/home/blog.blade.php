<!DOCTYPE html>
<html lang="en">

<head>
    <title>NH21-22_BE2_CT2_Nhom10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        @if (Auth::check())
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">Xin chào:
                                {{Auth::user()->name}}</span>
                        </div>
                        @else
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            @if (Auth::check())
            <a class="navbar-brand" href="{{ route('logout_index')}}">Logout</a>
            @else
            <a class="navbar-brand" href="{{ url('home.login')}}">Login</a>
            @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ url('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ url('/home.shop')}}" class="nav-link">Shop</a></li>
                    @if (Session::has('cart') && Session('cart')->totalQty != 0)
                    <li class="nav-item cta cta-colored"><a href="{{ url('/home.cart')}}" class="nav-link"><span
                                class="icon-shopping_cart"></span>@if (Session::has('cart'))
                            [{{Session('cart')->totalQty}}]
                            @else [0] @endif</a></li>
                    @else
                    <li class="nav-item cta cta-colored"><a href="#" class="nav-link"><span
                                class="icon-shopping_cart">[0]</span></a></li>
                    @endif
                    @if (Auth::check())
                    <li class="nav-item"><a href="{{url('home.order_history')}}?user_id={{Auth::user()->id}}"
                            class="nav-link">Order history
                        </a></li>
                    <li class="nav-item cta cta-colored"><a href="{{ url('/home.wishlist')}}" class="nav-link"><span
                                class="icon-favorite"></span>[0]</a></li>
                    @else
                    <li class="nav-item cta cta-colored"><a href="{{ url('home.login')}}" class="nav-link"><span
                                class="icon-favorite"></span>[0]</a></li>
                    @endif
                    <li class="nav-item"><a href="{{ url('/home.about')}}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ url('/home.blog')}}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{ url('/home.contact')}}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
                    <h1 class="mb-0 bread">Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="row">
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.html" class="block-20"
                                    style="background-image: url('images/image_1.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">July 20, 2019</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                            the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.html" class="block-20"
                                    style="background-image: url('images/image_2.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">July 20, 2019</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                            the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.html" class="block-20"
                                    style="background-image: url('images/image_3.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">July 20, 2019</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                            the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.html" class="block-20"
                                    style="background-image: url('images/image_4.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">July 20, 2019</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                            the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.html" class="block-20"
                                    style="background-image: url('images/image_5.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">July 20, 2019</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                            the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="blog-single.html" class="block-20"
                                    style="background-image: url('images/image_6.jpg');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    <div class="meta mb-3">
                                        <div><a href="#">July 20, 2019</a></div>
                                        <div><a href="#">Admin</a></div>
                                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                    </div>
                                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                            the blind texts</a></h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p><a href="blog-single.html" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon ion-ios-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            <li><a href="#">Vegetables <span>(12)</span></a></li>
                            <li><a href="#">Fruits <span>(22)</span></a></li>
                            <li><a href="#">Juice <span>(37)</span></a></li>
                            <li><a href="#">Dries <span>(42)</span></a></li>
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Recent Blog</h3>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                            <div class="text">
                                <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">fruits</a>
                            <a href="#" class="tag-cloud-link">tomatoe</a>
                            <a href="#" class="tag-cloud-link">mango</a>
                            <a href="#" class="tag-cloud-link">apple</a>
                            <a href="#" class="tag-cloud-link">carrots</a>
                            <a href="#" class="tag-cloud-link">orange</a>
                            <a href="#" class="tag-cloud-link">pepper</a>
                            <a href="#" class="tag-cloud-link">eggplant</a>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vegefoods</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Shop</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Journal</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>