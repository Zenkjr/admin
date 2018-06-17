@extends('layout.admin_template')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách ảnh xe</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>ảnh xe</th>
                                <th>Được tạo tại</th>
                                <th>Được cập nhật</th>
                                <th>Hoạt Động</th>

                            </tr>
                            </thead>
                            @foreach($image as $item)
                                {{ csrf_field() }}
                                <tbody>
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->clazzes_name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info">Sửa</button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer">
                        <div>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"
                                    style="color: #005cbf">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Thêm mới
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Thêm Mới ảnh</h4>
                                    </div>
                                    <form class="form-horizontal" action="/admin/image/store"
                                          enctype="multipart/form-data"
                                          method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <input type="text" name="clazzes_name" class="form-control" id="clazzes_name"
                                                           placeholder="Loại xe" style="border-radius: 15px">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                            <button type="submit" class="btn btn-info pull-right">Lưu
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->
@endsection