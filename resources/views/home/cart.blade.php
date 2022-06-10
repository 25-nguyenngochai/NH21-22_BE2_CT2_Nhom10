@extends('home.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>

@if(Session::has('cart'))
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product_cart as $product)
                            <tr class="text-center">
                                <td class="product-remove"><a
                                        href="{{route('xoagiohang', $product['item']['id'])}}"><span
                                            class="ion-ios-close"></span></a></td>
                                <td class="image-prod">
                                    <a href="{{url('home.product-single')}}?product_id={{$product['item']['id']}}">
                                        <div class="img"
                                            style="background-image:url({{asset('images/'.$product['item']['image'])}});">
                                        </div>
                                    </a>
                                </td>
                                <td class="product-name">
                                    <h3><a
                                            href="{{url('home.product-single')}}?product_id={{$product['item']['id']}}">{{$product['item']['name']}}</a>
                                    </h3>
                                </td>
                                <td class="price">{{number_format($product['item']['price'])}} VND</td>
                                <td class="quantity">
                                    <div class="input-group">
                                        <a class="btn-xoa btn mb-2"
                                            href="{{route('xoamotgiohang', $product['item']['id'])}}"><i
                                                class="ion-ios-remove"></i></a>
                                        <a class="qty">{{$product['qty']}}</a>
                                        <a class="btn-xoa btn mb-2"
                                            href="{{route('themgiohang', $product['item']['id'])}}"><i
                                                class="ion-ios-add"></i></a>
                                    </div>
                                </td>

                                <td class="total">{{number_format($product['qty'] * $product['item']['price'])}} VND
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end mt-3">
            <h4 class="total-mau px-3 mt-2">Total: {{number_format(Session('cart')->totalPrice)}} VND</h4>
            @if (Auth::check())
            <p><a href="{{url('home.checkout')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            @else
            <p><a href="{{url('home.login')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            @endif
        </div>
    </div>
</section>
@endif
@endsection