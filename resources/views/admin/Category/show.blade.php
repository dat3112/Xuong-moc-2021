@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{route('category.index')}}" class="btn btn-primary" >Danh Sách</a>
        </h1>

    </section>

    <!-- Main content -->


    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thông Tin</h3>
        </div>

        <div class="box-body">
            <form action="{{route('category.show',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input type="text" class="form-control" name="name" value="{{$data->name}}" >
                        </div>


                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ẢNH</label>

                            @if($data->image)
                                <img src="{{asset($data->image)}}" width="200">
                            @endif
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="{{$data->position}}" min="0">
                        </div>
                        <div class="form-group">

                            <input {{ ($data->is_active == 1) ? 'checked' : '' }} type="checkbox" name="is_active" value="1" disabled>
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
