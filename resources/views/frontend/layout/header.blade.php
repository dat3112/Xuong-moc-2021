<nav class="navbar-expand-md navbar-light bg-light menu-atb">
    <div class="container menu">
        <a href="#" class="">
            <img src="/frontend/images/logo.png" alt="">
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto menu-right">
                <li class="nav-item active-11">
                    <a href="/" class="nav-link ">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('shop.introduce')}}" class="nav-link">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('shop.product')}}" class="nav-link">Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('shop.article')}}" class="nav-link">Tin Tức</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('shop.partner')}}" class="nav-link">Đối Tác</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('shop.contact')}}" class="nav-link">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>

</nav>

