@extends('frontend.layout.main')
@section('content')
    <div id="slides" class="carousel slide slide-margin" data-ride="carousel">
        <ul class="carousel-indicators">
            <?php
            $i=0;
            ?>
            @foreach($banner as $item)
            <li data-target="#slides" data-slide-to="$i" @if($i==0) class="active" @endif></li>
                    <?php
                    $i++;
                    ?>
                @endforeach

        </ul>
    </div>
    <!-- sản phẩm -->
    <div class="container product-sp">

        <div class="list-product">
            <div class="d-flex justify-content-between box-product-1">
                <h2>{{$cate->name}}</h2>
                <p class="all-product">
                    <a href="#">XEM TẤT CẢ</a>
                </p>
            </div>
            <div class="box-product-2">
                <div class="row main-product">
                    @foreach($products as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-bot">

                            <div class="img-bot">
                                <a href="{{route('shop.product_detail',['id'=>$item->id])}}">
                                    <img src="{{asset(($item->image))}}" alt="">
                                </a>
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
                                <p>{{$item->sale}} VNĐ</p>
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>


    </div>
@endsection
