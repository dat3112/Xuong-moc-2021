@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            Sửa Banner
        </h1>

    </section>

    <!-- Main content -->


    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <a href="{{route('banner.index')}}" class="btn btn-success" >Danh Sách</a>
        </div>

        <div class="box-body">
            <form action="{{route('banner.update',['id'=>$dat->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" name="title" placeholder="" value="{{$dat->title}}">
                        </div>
                        <div class="form-group">
                            <label>ẢNH</label>
                            <input type="file" class="form-control" name="image" placeholder="">
                            @if($dat->image)
                                <img src="{{asset($dat->image)}}" alt="" width="300">
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Page image</label>
                            <input type="" class="form-control" name="url" value="{{$dat->page_image}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Cập nhật</button>

                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Url</label>
                            <input type="" class="form-control" name="url" value="{{$dat->url}}">
                        </div>
                        <div class="form-group">
                            <label>Target</label>
                            <input type="" class="form-control" name="target" value="{{$dat->target}}">
                        </div>

                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="{{$dat->position}}" min="0">
                        </div>
                        <div class="form-group">

                            <input {{($dat->is_active==1)?'checked':''}} type="checkbox" name="is_active" value="1">
                            <label>Trạng Thái</label>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>

    </div>


    </section>
@endsection
