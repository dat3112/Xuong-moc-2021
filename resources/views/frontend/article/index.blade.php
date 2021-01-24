@extends('frontend.layout.main')
@section('content')
{{--    <a href="{{route('shop.detail',['slug'=> bien->slug])}}"> Danh sách</a>--}}
    <div class="container news-tt">
        <div class="box-news-tt">
            <h2>TIN TỨC</h2>
            <div class="row wrapper-news-tt">
                @foreach($list as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="news-item">
                        <div class="img-news-tt">
                            <img style="width: 100%" src="{{asset($item->image)}}" alt=""
                                 class="img-fluid">
                        </div>
                        <div class="title-news-tt">
                            <h4>
                                <a href="">{{$item->title}}</a>
                            </h4>
                            <p class="desc-news-tt">
                                {{$item->summary}}
                            </p>

                        </div>


                    </div>

                </div>
                @endforeach

            </div>

        </div>

    </div>
@endsection
