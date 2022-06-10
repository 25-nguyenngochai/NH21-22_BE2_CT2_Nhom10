@extends('home.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products
                        found</span>
                </p>
                <h1 class="mb-0 bread">Products found</h1>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="{{ url('home.my-seach')}}" class="subscribe-form" method="get">
                    <div class="form-group d-flex">
                        <input type="text" name="key" class="form-control" placeholder="What are you looking for ?">
                        <input type="submit" value="Search" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            @foreach($seachAll as $row)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{url('home.product-single')}}?product_id={{$row->id}}" class="img-prod"><img
                            class="img-fluid" src="{{asset('images/'.$row->image)}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{url('home.product-single')}}?product_id={{$row->id}}">{{$row->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">{{number_format($row->price)}}VND</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{route('themgiohang', $row->id)}}"
                                    class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                @if (Auth::check())
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                                @else
                                <a href="{{url('home.login')}}"
                                    class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{$seachAll->links('paginate.my-paginate')}}
</section>
@endsection