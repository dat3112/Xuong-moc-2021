@extends('frontend.layout.main')
@section('content')
<!-- ĐỐI TÁC -->
<div class="container-fluid doitac slide-margin">
    <div class="img-doitac">
        <img src="https://xuongmocgiatot.com/Content/images/doi-tac/banner-doi-tac.png" alt="" class="img-fluid">
    </div>

    <div class="content-doitac">
        <h1 class="text-center">ĐỐI TÁC</h1>
    </div>

</div>
<!--  các đối tác -->

<div class="container doitacs">
    <div class="introduce-partner">
        <div class="box-introduce d-flex">
            <div class="row w-100">
                @foreach($partner as $item)

                <div class="col-md-3 col-lg-4 d-flex align-content-center">
                    <div class="img-introduce-dt px-2 px-lg-5">
                        <img src="{{asset(($item->image))}}" alt="">
                    </div>
                </div>
                <div class="col-md-9 col-lg-8 d-flex align-content-center">
                    <div class="content-introduce-dt text-justify">
                        <h3 class="title-introduce-dt">{{$item->name}}</h3>
                        <p class="desc-introduce-dt">{!! $item->description !!}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>

</div>
@endsection
