@extends('layout.admin_template')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách Khách Hàng Liên Hệ Mua Xe</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Xe Muốn mua</th>
                                <th>Số Điện thoại</th>
                                <th>email</th>
                                <th>Địa chỉ</th>
                            </tr>
                            </thead>
                            @foreach($preorder as $item)
                                {{ csrf_field() }}
                                <tbody>
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->stock_id}}</td>
                                    <td>{{$item->tel}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->address}}</td>
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

                        <!-- Modal -->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->
@endsection