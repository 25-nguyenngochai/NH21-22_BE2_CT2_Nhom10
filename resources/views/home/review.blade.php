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

    <div class="hero-wrap hero-bread" style="background-image: url({{asset('images/bg_1.jpg')}});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>review</span>
                    </p>
                    <h1 class="mb-0 bread">review</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 4%;">
        <form action="{{route('save_review')}}" method="POST">
            @csrf
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Viết đánh giá của bạn về: {{$product->name}}</h2>
                <input type="hidden" value="{{$product->id}}" name="product_id">
                @foreach($bill_details as $value)
                <input type="hidden" value="{{$value->id}}" name="bill_detail_id">
                @endforeach
            </div>
            <div class="body">
                <div style="display: flex; font-size: 35px;">
                    <span style="padding-left: 42%;" class="list_start">
                        @for($i =1; $i <= 5; $i++) <i class="ratting fa fa-star" data-key="{{$i}}"
                            style="padding: 2px;">
                            </i>
                            @endfor</span>
                    <input type="hidden" value="" name="number" class="number_rating">
                </div>
                <div style="margin-top: 15.5px; margin-bottom: 12px;">
                    <textarea id="comment" name="comment" rows="4" placeholder="Enter comment"
                        class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save review</button>
            </div>
        </form>
    </div>

    <footer class="ftco" style="padding-bottom: 4%;">
    </footer>

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
    <script src="{{asset('js/ajax.js')}}"></script>

</body>

</html>