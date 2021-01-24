@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            <a href="{{route('partner.index')}}" class="btn btn-primary" >Danh sách dối tác</a>
        </h1>

    </section>

    <!-- Main content -->


    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thông Tin</h3>
        </div>

        <div class="box-body">
            <form action="{{route('partner.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">

                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Tên đối tác</label>
                            <input type="text" class="form-control" name="name" placeholder="Mời bạn nhập tên">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Mời bạn nhập email">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Mời bạn nhập số điện thoại">
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input type="text" class="form-control" name="website" placeholder="Mời bạn nhập website">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Mời bạn nhập đại chỉ">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Thêm đối tác</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ẢNH</label>
                            <input type="file" class="form-control" name="image" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="description" id="editor1" ></textarea>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="0" min="0">
                        </div>
                        <div class="form-group">

                            <input type="checkbox" name="is_active" value="1">
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
@section('script')
    <script>CKEDITOR.replace('editor1');</script>
@endsection
