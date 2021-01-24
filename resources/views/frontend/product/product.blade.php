@extends('frontend.layout.main')
@section('content')
    <div class="container product-sp slide-margin">
        <div class="list-product">
            <div class="d-flex justify-content-between box-product-1">
                <h2>PHÒNG KHÁCH</h2>
                <p class="all-product">
                    <a href="#">XEM TẤT CẢ</a>
                </p>
            </div>
            <div class="box-product-2">
                <div class="row main-product">
                    @foreach($livingroom as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-bot">
                            <div class="img-bot">
                                <img src="{{asset($item->image)}}" alt="">
                            </div>
                            <div class="info-bot">
                                <p>{{$item->name}}</p>
                                <p class="vote">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <p>{{$item->sale}} VND</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
{{--        <div class="list-product">--}}
{{--            <div class="d-flex justify-content-between box-product-1">--}}
{{--                <h2>PHÒNG NGỦ</h2>--}}
{{--                <p class="all-product">--}}
{{--                    <a href="#">XEM TẤT CẢ</a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="box-product-2">--}}
{{--                <div class="row main-product">--}}
{{--                    @foreach($bedroom as $item)--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="product-bot">--}}
{{--                            <div class="img-bot">--}}
{{--                                <img src="{{asset($item->image)}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="info-bot">--}}
{{--                                <p>{{$item->name}}</p>--}}
{{--                                <p class="vote">--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                </p>--}}
{{--                                <p>{{$item->sale}} VND</p>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="list-product">--}}
{{--            <div class="d-flex justify-content-between box-product-1">--}}
{{--                <h2>PHÒNG BẾP</h2>--}}
{{--                <p class="all-product">--}}
{{--                    <a href="#">XEM TẤT CẢ</a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="box-product-2">--}}
{{--                <div class="row main-product">--}}
{{--                    @foreach($kidchen as $item)--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <div class="product-bot">--}}
{{--                            <div class="img-bot">--}}
{{--                                <img src="{{asset($item->image)}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="info-bot">--}}
{{--                                <p>{{$item->name}}</p>--}}
{{--                                <p class="vote">--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                    <span><i class="fas fa-star"></i></span>--}}
{{--                                </p>--}}
{{--                                <p>{{$item->sale}} VND</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection


