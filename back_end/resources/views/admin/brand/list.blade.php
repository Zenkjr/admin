@extends('layout.admin_template')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách Màu</h3>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div style="float: right;">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"
                                    style="color: #005cbf">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Thêm mới
                            </button>
                        </div>
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>id</th>
                                <th>Hãng</th>
                                <th>Được tạo tại</th>
                                <th>Được cập nhật</th>
                                <th>Hoạt Động</th>

                            </tr>
                            </thead>
                            @foreach($brands as  $item)
                                {{ csrf_field() }}
                                <tbody>
                                <tr id="{{$item->id}}">
                                    <td>
                                        <form id="formDeleteCheckBox" action="{{url('/brand/destroyMany/',['id'=>$item->id])}}" method="post"
                                              enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" class="minimal check-one"
                                                           value="{{$item->id}}"
                                                           name="check-car[{{$item->id}}]">
                                                </label>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="brand-id">{{$item->id}}</td>
                                    <td class="brand-name">{{$item->name}}</td>
                                    <td class="brand-created">{{$item->created_at}}</td>
                                    <td class="brand-updated">{{$item->updated_at}}</td>
                                    <td>
                                        <button class="btn btn-info btn-edit" id="edit-{{$item->id}}"
                                                data-toggle="modal"
                                                data-target="#modal-edit">Sửa
                                        </button>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"
                                              action="{{url('/brand/destroy',['id'=> $item->id])}}" method="post">
                                            <input type="hidden" name="_method" value="delete">
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modal-delete">
                                                delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer">

                        {{--form delete with box checked--}}
                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="checkAll" class="minimal"
                                       name="check-car"><span> Chọn tất cả</span>
                                <span style="margin-left: 14px;">
                                    <select name="chosse" id="selectAction">
                                        <option value="0">
                                            -- chọn một mục --
                                        </option>
                                        <option value="1" class="text-center">
                                            Xóa
                                        </option>
                                    </select>
                                </span>
                                {{--<form action="" method="post">--}}
                                {{--<input type="hidden" name="_method" value="delete">--}}
                                {{--{{method_field('delete')}}--}}
                                {{--{{csrf_field()}}--}}
                                <button type="submit" class="btn btn-danger" id="btn-apply">
                                    Apply
                                </button>
                                {{--</form>--}}
                            </label>
                        </div>
                        {{--modal edit--}}
                        <div class="modal fade" id="modal-edit">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Chỉnh sửa hãng</h4>
                                    </div>
                                    <form action="" method="post" id="formUpdate">
                                        <input type="hidden" name="_method" value="put">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" id="idUpdate" class="form-control">
                                                    <input type="text" name="name_Update" class="form-control"
                                                           id="name_Update"
                                                           placeholder="hãng xe" style="border-radius: 15px">
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
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>


                        <!-- Modal add-->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Thêm Mới hãng</h4>
                                    </div>
                                    <form class="form-horizontal" action="/admin/brand/store"
                                          enctype="multipart/form-data"
                                          method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                           placeholder="hãng xe" style="border-radius: 15px">
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
@section('script')
    <script>
        var id;
        $('.btn-edit').click(function () {
            id = $(this).closest('tr').attr('id');
            $.ajax({
                method: 'get',
                url: '/brand/' + id + '/edit',
                data: {
                    '_token': '{{csrf_token()}}'
                },
                success: function (resp) {
                    $('#idUpdate').val(resp.id);
                    $('#name_Update').val(resp.name);
                },
                error: function () {
                    alert("wrong");
                }
            })
        });
        $('#formUpdate').submit(function (event) {
            $.ajax({
                method: 'put',
                url: '/brand/update/' + id,
                data: $('#formUpdate').serialize(),
                success: function (resp) {
                    alert('ok');
                    $('tr#' + id + ' > td.brand-id').text(resp.id);
                    $('tr#' + id + ' > td.brand-name').text(resp.name);
                    $('tr#' + id + ' > td.brand-created').text(resp.created_at);
                    $('tr#' + id + ' > td.brand-updated').text(resp.updated_at);
                    $('#modal-edit').modal('hide');
                },
                error: function () {
                    alert('wrong')
                }
            });
            event.preventDefault();
        });
        $('#checkAll').click(function () {
            if ($(this).prop('checked')) {
                $('.check-one').prop('checked', true);
            } else {
                $('.check-one').prop('checked', false);
            }
        });

        $('.check-one').click(function () {

            if ($('#checkAll').prop("checked", true)) {
                $('#checkAll').prop('checked', false);
            }
            else {
                $('#checkAll').prop('checked', true);
            }
        });
        $('#btn-apply').click(function () {
            switch ($('#selectAction').val()) {
                case '0':
                    alert('vui long chon mot muc');
                    break;
                case '1':
                    DeletedApply();
                    break;
                case '2':
                    break;
            }

        });
        var boxId = 1;

        function DeletedApply() {
            $('#formDeleteCheckBox').submit();
            $.ajax({

                method: 'post',
                url: '/brand/destroyMany/' + boxId,
                data: {
                    "_token": $('meta[name="csrf-token"]').attr('content'),
                    // id: '.check-one'
                },

                success: function (resp) {
                    // alert($('.check-one').prop('check',true).val())
                    alert(resp.id)
                    //     // alert($('.check-one').val());
                },
                // error:function () {
                //     alert(boxId)
                // }
            });
        }
    </script>
@endsection