@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            Chi tiết sản phẩm
        </h1>

    </section>

    <!-- Main content -->


    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">
            <a href="{{route('product.index')}}" class="btn btn-success" >Danh Sách</a>
        </div>

        <div class="box-body">
            <form action="{{route('product.show',['id'=>$dat->id])}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Mời Bạn Nhập Tên" value="{{$dat->name}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>ẢNH</label>
                            <input type="file" class="form-control" name="image" placeholder="" disabled>
                            @if($dat->image)
                                <img src="{{asset($dat->image)}}" alt="" width="150">
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="number" class="form-control" name="stock" placeholder="" value="{{$dat->stock}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Giá nhập</label>
                            <input type="text" class="form-control" name="price" placeholder="" value="{{$dat->price}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Giá bán</label>
                            <input type="text" class="form-control" name="sale" placeholder="" value="{{$dat->sale}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Hot</label>
                            <input type="" class="form-control" name="is_hot" value="{{$dat->is_hot}}" disabled>
                        </div>

                    </div>
                    <!-- /.col -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Danh mục</label>
                            <select class="form-control select2" style="width: 100%;" name="category_id">
                                <option value="0">--Chọn--</option>
                                @foreach($category as $item)
                                    <option {{$dat->category_id==$item->id?'selected':''}} value="{{$item->id}}" disabled>{{$item->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thương hiệu</label>
                            <select class="form-control select2" style="width: 100%;" name="brand_id">
                                <option value="0">--Chọn--</option>
                                @foreach($brand as $item)
                                    <option {{$dat->brand_id==$item->id?'selected':''}} value="{{$item->id}}" disabled>{{$item->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label>Vị Trí</label>
                            <input type="number" class="form-control" name="position" value="{{$dat->position}}" min="0" disabled>
                        </div>
                        <div class="form-group">

                            <input {{$dat->is_active==1?'checked':''}} type="checkbox" name="is_active" value="1" disabled>
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
