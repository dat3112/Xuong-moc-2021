@extends('frontend.layout.main')
@section('content')
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

            <div class="container tab">

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#menu1">Menu 1</a></li>
                    <li><a href="#menu2">Menu 2</a></li>
                    <li><a href="#menu3">Menu 3</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>HOME</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>

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



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- link javascrip -->
    <script type="text/javascript" src="/frontend/css/javascrip.js"></script>
    <script>
        $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            $('.nav-tabs a').on('shown.bs.tab', function(event){
                var x = $(event.target).text();         // active tab
                var y = $(event.relatedTarget).text();  // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
            });
        });
    </script>
@endsection
