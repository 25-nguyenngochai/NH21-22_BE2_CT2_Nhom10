@extends('home.master')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Order
                        history</span>
                </p>
                <h1 class="mb-0 bread">Order
                    history</h1>
            </div>
        </div>
    </div>
</div>

@if($exhistory)
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <table class="table">
                    <thead class="thead-primary">
                        <tr class="text-center">
                            <th>Order date</th>
                            <th>Payment methods</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history as $value)
                        <tr class="text-center">
                            <td class="image-prod">{{\Carbon\Carbon::parse($value->data_order)->format('d/m/Y')}}</td>
                            <td class="product-name">{{$value->pay}}</td>
                            <td class="total">{{$value->totalQty}}</td>
                            <td class="price">{{number_format($value->totalPrice)}} VND</td>
                            <td><a href="{{route('history', $value->id)}}" class="btn btn-primary">Order
                                    details</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$history->links('paginate.my-paginate')}}
            </div>
        </div>
    </div>
</section>
@else
<h3 style="padding-top: 33px; padding-bottom: 30px; text-align: center; color: #82ae46;">Bạn vẫn chưa mua bất kỳ sản
    phẩm nào?</h3>
@endif
@endsection