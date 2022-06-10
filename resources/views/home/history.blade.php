@extends('home.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url({{asset('images/bg_1.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Order
                        details</span>
                </p>
                <h1 class="mb-0 bread">Order
                    details</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allDetailBill as $value)
                        <tr class="text-center">
                            <td class="image-prod">
                                <a href="{{url('home.product-single')}}?product_id={{$value->product_id}}">
                                    <div class="img" style="background-image:url({{asset('images/'.$value->image)}});">
                                    </div>
                                </a>
                            </td>
                            <td class="product-name">
                                <h3><a
                                        href="{{url('home.product-single')}}?product_id={{$value->product_id}}">{{$value->name}}</a>
                                </h3>
                            </td>
                            <td class="quantity">
                                <p>{{$value->quantity}}</p>
                            </td>
                            <td class="price">{{number_format($value->price)}}</td>
                            <td><a href="{{route('review', $value->product_id)}}" class="btn btn-primary">Review</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection