@extends('frontend.layout.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>chi tiết</title>
    <!-- link icon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> -->
    <!-- link bootstrap -->
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->

    <!-- link font -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> -->
    <!-- link slider -->
    <!-- <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css"> -->
    <!-- link css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
<!-- thanh menu -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container">
        <a href="#" class="">
            <img src="images/logo.png" alt="">
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive12">
            <ul class="navbar-nav ml-auto menu-right22">
                <li class="nav-item">
                    <a href="index.html" class="nav-link active">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a href="gioithieu.html" class="nav-link">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a href="sanpham.html" class="nav-link">Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a href="tintuc.html" class="nav-link">Tin Tức</a>
                </li>
                <li class="nav-item">
                    <a href="doitac.html" class="nav-link">Đối Tác</a>
                </li>
                <li class="nav-item">
                    <a href="lienhe.html" class="nav-link">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
<!-- chi tiết -->
<div class="container">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <h3 class="product-title">Bàn uống nước</h3>
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png" alt="">
                        </div>
                        <div class="tab-pane" id="pic-2"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png">
                        </div>
                        <div class="tab-pane" id="pic-3"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png">
                        </div>
                        <div class="tab-pane" id="pic-4"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png">
                        </div>
                        <div class="tab-pane" id="pic-5"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png">
                        </div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">

                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png"></a>
                        </li>
                        <li><a data-target="#pic-2" data-toggle="tab"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png"></a>
                        </li>
                        <li><a data-target="#pic-3" data-toggle="tab"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png"></a>
                        </li>
                        <li><a data-target="#pic-4" data-toggle="tab"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png"></a>
                        </li>
                        <li><a data-target="#pic-5" data-toggle="tab"><img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png"></a>
                        </li>
                    </ul>
                </div>
                <div class="details col-md-6 quality-us">

                    <h2>Chất liệu</h2>
                    <div class="quality">
                        <ul>
                            <li>Gỗ sồi</li>
                            <li>Gỗ lim</li>

                        </ul>


                    </div>



                    <div class="action">
                        <h4 class="price">Giá bán: 20.000.000 đ</h4>
                        <a href="C:/xampp/htdocs/PHP0620EEEE/DEVMASTER/index.html" target="_blank">
                            <button class="add-to-cart btn btn-default" type="button">MUA NGAY</button>
                        </a>
                        <a href="#" target="_blank">
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>

                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')">London</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
        </div>

        <div id="London" class="tabcontent">
            <h3>London</h3>
            <p>London is the capital city of England.</p>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
    </div>



</div>

<!-- sản phẩm -->
<div class="container product-sp">
    <div class="list-product">
        <div class="d-flex justify-content-between box-product-1">
            <h2>Sản phẩm liên quan</h2>
            <p class="all-product">
                <a href="#">XEM TẤT CẢ</a>
            </p>
        </div>
        <div class="box-product-2">
            <div class="row main-product">
                <div class="col-lg-3 col-sm-6">
                    <div class="product-bot">
                        <div class="img-bot">
                            <img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc.png" alt="">
                        </div>
                        <div class="info-bot">
                            <p>Bàn uống nước</p>
                            <p class="vote">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </p>
                            <p>22,999,000 VNĐ</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-bot">
                        <div class="img-bot">
                            <img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ke-de-do.png" alt="">
                        </div>
                        <div class="info-bot">
                            <p>Bàn uống nước</p>
                            <p class="vote">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </p>
                            <p>22,999,000 VNĐ</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-bot">
                        <div class="img-bot">
                            <img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ke-ti-vi.png" alt="">
                        </div>
                        <div class="info-bot">
                            <p>Bàn uống nước</p>
                            <p class="vote">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </p>
                            <p>22,999,000 VNĐ</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-bot">
                        <div class="img-bot">
                            <img src="https://xuongmocgiatot.com/Content/Uploads/images/san-pham/phong-khach-ban-uong-nuoc-2.png" alt="">
                        </div>
                        <div class="info-bot">
                            <p>Bàn uống nước</p>
                            <p class="vote">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </p>
                            <p>22,999,000 VNĐ</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



</div>


<!-- footer -->
<footer>
    <div class="container-fluid footer1">
        <div class="container">
            <div class="row mt-3 mb-3 row-footer">
                <div class="col-md-6">
                    <h5>
                        THÔNG TIN CHUNG
                        <span class="line-remove" style="width: 78px; "></span>
                    </h5>
                    <h4 class="mt-2 pt-2 com-name">XƯỞNG MỘC HOÀNG HOAN</h4>
                    <p class="com-phone"><i class="fas fa-phone-alt"></i> <a href="tel:0985367024" title="0985.367.024">0985.367.024</a> </p>
                    <p class="com-email"><i class="fas fa-envelope"></i><a href="mailto:noithatlanhoan@gmail.com" title="noithatlanhoan@gmail.com">noithatlanhoan@gmail.com</a> </p>
                    <p class="com-address"><i class="fas fa-map-marker-alt"></i><a href="#">Hiệp Thuận, Phúc Thọ, Hà Nội</a></p>
                    <!-- <address class="com-address"><i class="fas fa-map-marker-alt"></i>Hiệp Thuận, Phúc Thọ, Hà Nội </address> -->
                </div>
                <div class="col-md-3">
                    <h5>
                        VỀ CHÚNG TÔI
                        <span class="line-remove" style="width: 78px; "></span>
                    </h5>
                    <ul>
                        <li><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li><a href="/san-pham" title="Sản phẩm">Sản phẩm</a></li>
                        <li><a href="/tin-tuc-ruou-vang" title="Tin tức">Tin tức</a></li>
                        <li><a href="/doi-tac" title="Đối tác">Đối tác</a></li>
                        <li><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-right3">
                    <h5>
                        KẾT NỐI VỚI CHÚNG TÔI
                        <span class="line-remove" style="width: 78px; "></span>
                    </h5>
                    <div class="mt-4 social-icon">
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="null" target="_blank"><i class="fab fa-youtube-square"></i></a>
                        <a href="mailto:noithatlanhoan@gmail.com" target="_blank">
                            <i class="far fa-envelope"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</footer>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>




</body>
</html>
@endsection
