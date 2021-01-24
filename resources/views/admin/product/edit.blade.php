@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>Sửa sản phẩm</h1>
    </section>

    <!-- Main content -->

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <a href="{{route('product.index')}}" class="btn btn-success" >Danh Sách</a>
        </div>

        <div class="box-body">
            <form action="{{route('product.update',['id'=>$dat->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input value="{{$dat->name}}" type="text" class="form-control" name="name" placeholder="Mời Bạn Nhập Tên" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>Thay ảnh</label>
                            <input type="file" id="new_image" class="form-control" name="new_image"><br>
                            @if ($dat->image)
                                <img src="{{asset($dat->image)}}" width="200">
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input value="{{$dat->stock}}" type="number" class="form-control" name="stock" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Giá gốc</label>
                            <input type="text" class="form-control" name="price" placeholder="" value="{{$dat->price}}">
                        </div>
                        <div class="form-group">
                            <label>Giá bán</label>
                            <input type="text" class="form-control" name="sale" placeholder="" value="{{$dat->sale}}">
                        </div>
                        <div class="form-group">
                            <label>Hot</label>
                            <input {{($dat->is_hot == 1) ? 'checked':''}} type="checkbox" name="is_hot" value="1">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <button type="reset" class="btn btn-secondary">reset</button>
                        </div>

                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control select2" style="width: 100%;" name="category_id">
                                <option value="0">--Chọn--</option>
                                @foreach($category as $item)
                                    <option {{$dat->category_id == $item->id ? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thương hiệu</label>
                            <select class="form-control select2" style="width: 100%;" name="brand_id">
                                <option value="0">--Chọn--</option>
                                @foreach($brand as $item)
                                    <option {{$dat->brand_id == $item->id ? 'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="{{$dat->position}}" min="0">

                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="description" id="editor1">{!! $dat->description !!}</textarea>
                        </div>
                        <div class="form-group">

                            <input {{($dat->is_active == 1) ? 'checked':''}} type="checkbox" name="is_active" value="1">
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
