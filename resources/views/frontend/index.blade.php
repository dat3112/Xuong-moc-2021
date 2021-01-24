@extends('frontend.layout.main')
@section('content')
<!-- carousel-băng truyền qua lại -->
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

    <div class="carousel-inner">
        <?php
        $i=0;
        ?>
        @foreach($banner as $item)

        <div class="carousel-item @if($i == 0) active @endif">
            <img src="{{asset($item->image)}}" alt="">
            <div class="  caption">
                <h1 class="display-2">THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM HOÀNG HOAN</h1>
                <h3>
                    Xưởng Mộc Hoàn Hoan
                </h3>
                <p>với sứ mệnh là kết hợp hài hòa giữa ý tưởng và mong muốn của khách hàng, đem lại những sản phẩm tinh tế, hài hòa và tiết kiệm nhất dành cho khách hàng.</p>
                <button type="button" class="btn btn-outline-light btn-lg">LIÊN HỆ NGAY</button>
            </div>
        </div>
                <?php
                $i++;
                ?>
        @endforeach

    </div>
</div>
<!-- Danh muc -->
<div class="container">
    <div class="row reason">
        @foreach($category as $item)
        <div class="col-lg-3 col-md-6">
            <div class="reason-item">
                <div class="img">
                    <a href="{{route('shop.category',['slug'=>$item->slug])}}">
                        <img src="{{asset($item->image)}}" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="tieude"><p>{{$item->name}}</p></div>
        </div>
        @endforeach

    </div>
    <!-- sản phẩm nổi bật -->
    <div class="box-product">
        <h2 class="active">SẢN PHẨM NỔI BẬT</h2>
        <div class="wp-slider">
            <div class="owl-carousel owl-theme">
                @foreach($is_hot as $item)
                <div class="item">

                    <a href="{{route('shop.product_detail',['id'=>$item->id])}}">
                        <img src="{{asset(($item->image))}}" alt="">
                    </a>
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
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- wellcom us -->
<div class="container-fluid us">
    <div class="container us1">
        <h2>VỀ VỚI CHÚNG TÔI</h2>
        <div class="row reason-1">
            <div class="col-lg-6 col-md-6">
                <div class="img-us">
                    <img src="/frontend/images/us1.png" alt="" class="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 content-us">
                <div class="content-usbot">
                    <h3>NỘI THẤT HOÀNG HUY UY TÍN SONG HÀNH CÙNG CHẤT LƯỢNG</h3>
                </div>
                <div>
                    <p>Nội thất Hoàng Hoan chúng tôi tự hào là đứa con tinh thần ra đời sau hơn 30 năm hoạt động trong lĩnh vực kinh doanh đồ gỗ nội thất với thương hiệu ĐỒ GỖ HOÀNG HOAN nổi tiếng.
                    </p>
                    <p>Tài nguyên của chúng tôi là đội ngũ kiến trúc sư tốt nghiệp ĐH Kiến Trúc Hà Nội với nhiều năm kinh nghiệm, luôn tràn đầy nhiệt huyết và sức sáng tạo của tuổi trẻ. Thế mạnh của chúng tôi là sở hữu xưởng nội thất hơn 10.000m2 tại Hà Nội sản xuất đa dạng các sản phẩm với giá cả luôn cạnh tranh.
                    </p>
                </div>
                <div class="product-us">
                    <img src="/frontend/images/product-us.jpg" alt="">&nbsp;
                    <img src="/frontend/images/product-us1.jpg" alt="">&nbsp;
                    <img src="/frontend/images/product-us2.jpg" alt="">&nbsp;
                    <img src="/frontend/images/product-us3.jpg" alt="">&nbsp;

                </div>
            </div>
        </div>

    </div>


    <div class="container why">
        <h2>TẠI SAO NÊN CHỌN HOÀNG HOAN</h2>
        <div class="row reason-why">
            <div class=" col-lg-6 col-md-6">
                <div class="reason-item d-lg-flex d-md-flex why-img">
                    <div class="img-why">
                        <img src="/frontend/images/why1.jpg" alt="">
                    </div>
                    <div class="content-why">
                        <h3 class="title-why">CHÍNH SÁCH GIÁ</h3>
                        <p class="desc">Tốt nhất và công khai giá trên website</p>

                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-6">
                <div class="reason-item d-lg-flex d-md-flex why-img">
                    <div class="img-why">
                        <img src="/frontend/images/why2.jpg" alt="">
                    </div>
                    <div class="content-why">
                        <h3 class="title-why">SẢN XUẤT</h3>
                        <p class="desc">Trực tiếp sản xuất bởi đội ngũ nhân viên hàng đầu</p>

                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-6">
                <div class="reason-item d-lg-flex d-md-flex why-img">
                    <div class="img-why">
                        <img src="/frontend/images/why3.jpg" alt="">
                    </div>
                    <div class="content-why">
                        <h3 class="title-why">CHẤT LƯỢNG</h3>
                        <p class="desc">Cam kết chất lượng sản phẩm và tốc độ thi công</p>

                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-6">
                <div class="reason-item d-lg-flex d-md-flex why-img">
                    <div class="img-why">
                        <img src="/frontend/images/why4.jpg" alt="">
                    </div>
                    <div class="content-why">
                        <h3 class="title-why">BẢO HÀNH</h3>
                        <p class="desc">Dịch vụ bảo hành tốt nhất khu vực</p>

                    </div>
                </div>
            </div>

        </div>




    </div>

</div>
<!-- TIN TỨC -->
<div class="container news">
    <h2>TIN TỨC</h2>
    <div class="row reason-news">
        <div class="col-lg-7">
            @foreach($news as $item)
                @if($item->hot == 1)
                <div class="box-news" >
                        <div class="img-news">
                            <img src="{{asset(($item->image))}}" alt="">
                        </div>
                        <div class="main-news">
                            <p class="title-news">
                                <a href="#">
                                    {{$item->title}}
                                </a>
                            </p>
                            <div class="desc-news">
                                <p>
                                    {{$item->summary}}
                                </p>
                            </div>
                        </div>
                </div>
        </div>

        <div class="col-lg-5 news-right">
            @else
                    <ul>
                        <li class="d-flex">

                            <div class="img-right-news">
                                <img src="{{asset(($item->image))}}" alt="">
                            </div>
                            <div class="content-news">
                                <p class="title-news">
                                    <a href="#">
                                        {{$item->title}}
                                    </a>
                                </p>
                                <div class="desc-news">
                                    <p>{{$item->summary}}</p>
                                </div>

                            </div>

                        </li>
                    </ul>
            @endif
            @endforeach
                <div class="see">
                    <a href="/tin-tuc" class="see-more"> Xem thêm  <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
        </div>



    </div>


</div>

<!-- ĐỐI TÁC -->
<div class="container partner">
    <h2>ĐỐI TÁC</h2>
    <div class="wp-slider1">
        <div class="owl-carousel owl-theme">
            @foreach($partner as $item)
            <div class="item">
                <a href="#">
                    <img src="{{asset(($item->image))}}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>

</div>

<!-- SERVICE -->
<div class="container-fluid service">
		<span>
			<img src="/frontend/images/service1.jpg" alt="">
		</span>
    <div class="container service-content">
        <div class="row service-row">
            <div class="col-lg-6 col-md-5 mana">
                <h2 class="title"> Trải nghiệm dịch vụ <br> <strong> cùng Hoàng hoan ngay </strong></h2>
            </div>
            <div class="col-lg-6 col-md-7">
                <p class="mb-1 text-white"> Thông tin liên hệ </p>
                <div class="form-group">
                    <input type="text" placeholder="Email/Số điện thoại">
                    <button class="savePhone"> Gửi </button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
