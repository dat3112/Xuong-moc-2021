@extends('frontend.layout.main')
@section('content')
    <!-- LIÊN HỆ -->

    <div class="container-fluid contact slide-margin">
        <div class="img-contact">
            <img src="https://xuongmocgiatot.com/Content/images/lien-he/banner-lien-he.png" alt="" class="img-fluid">
        </div>
        <div class="content-contact">
            <h1>LIÊN HỆ</h1>
        </div>
    </div>

    <div class="container contact-lh">
        <div class="introduce-contact">
            <div class="box-contact px-0 px-md-4">
                <div class="box-contact d-flex">
                    <div class="row form-contact">
                        <div class="col-lg-6">
                            <div class="img-contact d-none d-lg-block">
                                <img src="https://xuongmocgiatot.com/Content/images/lien-he/lien-he-img1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content-contact">
                                <p class="title-contact lien-he mb-2">
                                    liên hệ với chúng tôi
                                </p>

                            </div>
                            <div class="form-group lien-he">
                                <input type="text" name="TITLE" placeholder="Họ và tên">
                                <input type="text" name="EMAIL" placeholder="Email">
                                <input type="text" name="PHONE" placeholder="Số điện thoại">
                                <input type="text" name="CONTENT" placeholder="Nội dung">
                                <br>
                                <button class="contact-send"> Gửi </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

