@extends('layout.admin_template')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">List Cars</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-group" action="/admin/car/create" method="get">
                            {{csrf_field()}}
                            <div style="float: right;">
                                <button type="submit" class="btn btn-default"
                                        style="color: #005cbf">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Thêm mới
                                </button>
                            </div>
                        </form>
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>id</th>
                                <th>Ảnh</th>
                                <th>Tên xe</th>
                                <th>Hãng sản xuất</th>
                                <th>Năm sản xuất</th>
                                <th>Số ghế</th>
                                <th>Động cơ</th>
                                <th>Mã lực</th>
                                <th>lốp xe</th>
                                <th>Loại xe</th>
                                <th>Chú thích</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            @foreach($cars as $item)
                                {{ csrf_field() }}
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label>
                                                <input type="checkbox" class="minimal check-one" name="check-car">
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{$item->id}}</td>
                                    <td>
                                        <div class="card"
                                             style="background-image: url('{{$item->img}}'); background-size: cover; width: 100px; height: 60px;">
                                        </div>
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->brand_id}}</td>
                                    <td>{{$item->year}}</td>
                                    <td>{{$item->seat}}</td>
                                    <td>{{$item->engine}}</td>
                                    <td>{{$item->horse_power}}</td>
                                    <td>{{$item->tire_size}}</td>
                                    <td>{{$item->clazz_id}}</td>
                                    <td>{{$item->note}}</td>
                                    <td>
                                        <button class="btn btn-info btn-edit" id="edit-{{$item->id}}"
                                                data-toggle="modal"
                                                data-target="#modal-edit">Sửa
                                        </button>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"
                                              action="{{url('/car/destroy',['id'=> $item->id])}}" method="post">
                                            <input type="hidden" name="_method" value="delete">
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-danger"
                                                    >
                                                delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="checkAll" class="minimal"
                                       name="check-car"><span> Chọn tất cả</span>
                                <span style="margin-left: 14px;"> <select name="chosse" id="">
                                        <option value="">
                                            -- chọn một mục --
                                        </option>
                                        <option value="1" class="text-center">
                                            Xóa
                                        </option>
                                    </select> </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->
@endsection
@section('script')
    <script>
        // $('#check-car').checkbox(function () {
        //     alert('check');
        // })
        //
        $('#checkAll').click(function () {
            if ($(this).prop('checked')) {
                $('.check-one').prop('checked', true);
            } else {
                $('.check-one').prop('checked', false);
            }
        });
        $('.check-one').click(function () {
            if ($('#checkAll').prop("checked", true)) {
                // alert('check');
                $('#checkAll').prop('checked', false);
            }
            else {
                $('#checkAll').prop('checked', true);
            }
        });

    </script>
@endsection
