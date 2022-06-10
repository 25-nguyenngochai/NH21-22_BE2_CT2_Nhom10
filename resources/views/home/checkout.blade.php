@extends('home.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checkout</span>
                </p>
                <h1 class="mb-0 bread">Checkout</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading">Cart Total</h3>
                            @if(Session::has('cart'))
                            @foreach($product_cart as $product)
                            <p class="d-flex">
                                <span>{{$product['qty']}} x {{$product['item']['name']}}</span>
                                <span>{{number_format($product['item']['price'])}} VND</span>
                            </p>
                            @endforeach
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>{{number_format(Session('cart')->totalPrice)}} VND</span>
                            </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 ftco-animate">
                <form action="{{route('checkcart')}}" method="POST" class="billing-form">
                    @csrf
                    <h3 class="mb-4 billing-heading">Billing Details</h3>
                    <div class="row align-items-end">
                        @if (Auth::check())
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Name:</label>
                                <input type="text" value="{{Auth::user()->name}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="postcodezip">Address:</label>
                                <input type="text" value="{{Auth::user()->address}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" value="{{Auth::user()->phone}}" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input type="text" value="{{Auth::user()->email}}" class="form-control" disabled>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        <div class="cart-detail p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Payment Method</h3>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="pay" class="form-control">
                                            <option value="Thanh toán khi nhận hàng (COD)">Thanh toán khi nhận hàng
                                                (COD)</option>
                                            <option value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng</option>
                                            <option value="Zalo Pay">Zalo Pay</option>
                                            <option value="MoMo">MoMo</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary py-3 px-4" type="submit">Place an order</button>
                        </div>
                    </div>
                </form><!-- END -->
            </div>
        </div>
    </div>
</section>
@endsection