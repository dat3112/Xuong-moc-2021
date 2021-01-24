@extends('admin.layout.main')
@section('content')
    <section class="content-header">
        <h1>
            Danh sách đối tác
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                           aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th>STT</th>
                                            <th>Tên đối tác</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Vị trí</th>
                                            <th>Trạng thái</th>
                                            <th>Chức năng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dat as $key =>$item)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$key +1}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>
                                                    @if($item->image)
                                                        <img src="{{asset($item->image)}}" style="width: 60px;">
                                                    @endif
                                                </td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->position}}</td>
                                                <td>{{($item->is_active ==1)?'Hien thi':'An'}}</td>
                                                <td>
                                                    <a href="{{route('category.show',[$item->id])}}" class="btn btn-success">Xem</a>
                                                    <a href="{{route('category.edit',['id'=>$item->id])}}" class="btn btn-info">Sửa</a>
                                                    <a href="{{route('category.delete',['id'=>$item->id])}}" class="btn btn-danger">Xóa</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="container">
                                    {{$dat->links()}}
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection




