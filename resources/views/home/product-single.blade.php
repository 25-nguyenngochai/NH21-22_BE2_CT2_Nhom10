@extends('home.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a
                            href="index.html">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        @foreach($productId as $value)
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <br>
                <a href="{{asset('images/'.$value->image)}}" class="image-popup"><img
                        src="{{asset('images/'.$value->image)}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <br><br>
                <div class="rating d-flex">
                    <p class="text-left">
                        <span class="comment_ratting">
                            @for($i =1; $i <= 5; $i++) <i
                                class="fa fa-star {{$i <= $countRating ? 'active_rating' : ''}}"
                                style="font-size: 25px;">
                                </i>
                                @endfor</span>
                    </p>
                </div>
                <h3>{{$value->name}}</h3>
                <p class="price"><span>{{number_format($value->price)}}VND</span></p>
                <p>{{substr($value->description,0,250)}}</p>
                <p><a href="{{route('themgiohang', $value->id)}}" class="btn btn-black py-3 px-5">Add to Cart</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="product-tab">
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab">Description</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <p>{{$value->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Products</span>
                <h2 class="mb-4">Related Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($productRelated as $value)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="{{url('home.product-single')}}?product_id={{$value->id}}" class="img-prod"><img
                            class="img-fluid" src="{{asset('images/'.$value->image)}}" alt="Colorlib Template">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="{{url('home.product-single')}}?product_id={{$value->id}}">{{$value->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">{{number_format($value->price)}}VND</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{route('themgiohang', $value->id)}}"
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
    <div class="comment">
        <div class="container">
            <div class="row danhgia">
                <h3><b>Đánh Giá Sản Phẩm</b></h3><span class="mt-3">( {{$countComment}} đánh giá)</span>
            </div>
            <hr>
        </div>
        @foreach($allComment as $value)
        <div class="container">
            <div class="row nhanxet">
                <span class="user">
                    <img src="{{asset('images/user.jpg/')}}" alt="user" />
                    <span class="first"><b>{{$value->name}}</b></span>
                    <span class="second">{{\Carbon\Carbon::parse($value->data_comment)->format('d/m/Y')}}</span>
                </span>
                <span class="comment_ratting">
                    @for($i =1; $i <= 5; $i++) <i class="fa fa-star {{$i <= $value->rating ? 'active_rating' : ''}}">
                        </i>
                        @endfor</span>
                <div class="three">{{$value->comment_content}}</div>
            </div>
            <hr>
        </div>
        @endforeach
        {{$allComment->links('paginate.my-paginate')}}
    </div>
</section>
@endsection