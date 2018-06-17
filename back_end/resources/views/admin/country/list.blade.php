@extends('layout.admin_template')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Danh sách Quốc gia</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Quốc gia</th>
                                <th>Được tạo tại</th>
                                <th>Được cập nhật</th>
                                <th>Hoạt Động</th>

                            </tr>
                            </thead>
                            @foreach($country as  $item)
                                {{ csrf_field() }}
                                <tbody>
                                <tr id="{{$item->id}}">
                                    <td class="country-id">{{$item->id}}</td>
                                    <td class="country-name">{{$item->name}}</td>
                                    <td class="country-created">{{$item->created_at}}</td>
                                    <td class="country-updated">{{$item->updated_at}}</td>
                                    <td>
                                        <button class="btn btn-info btn-edit" id="edit-{{$item->id}}"
                                                data-toggle="modal"
                                                data-target="#modal-edit">Sửa
                                        </button>
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm(' Bạn có chắc muốn xóa ?')"
                                              action="{{url('/country/destroy',['id'=> $item->id])}}" method="post">
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
                        <div>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"
                                    style="color: #005cbf">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Thêm mới
                            </button>
                        </div>
                        {{--modal edit--}}

                        <div class="modal fade" id="modal-edit">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Quốc gia</h4>
                                    </div>
                                    <form action="" method="post" id="formUpdate">
                                        <input type="hidden" name="_method" value="put">
                                        {{csrf_field()}}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" id="idUpdate" class="form-control">
                                                    <input type="text" name="name_Update" class="form-control"
                                                           id="name_Update" placeholder="Quốc gia" style="border-radius: 15px">
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
                                        <h4 class="modal-title" id="myModalLabel">Thêm Mới Quốc gia</h4>
                                    </div>
                                    <form class="form-horizontal" action="/admin/country/store"
                                          enctype="multipart/form-data"
                                          method="post">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                           placeholder="Quốc gia " style="border-radius: 15px">
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
                url: '/country/' + id + '/edit',
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
                url: '/country/update/' + id,
                data: $('#formUpdate').serialize(),

                success: function (resp) {
                    $('tr#' + id + ' > td.country-id').text(resp.id);
                    $('tr#' + id + ' > td.country-name').text(resp.name);
                    $('tr#' + id + ' > td.country-created').text(resp.created_at);
                    $('tr#' + id + ' > td.country-updated').text(resp.updated_at);
                    $('#modal-edit').modal('hide');
                },
                error: function () {
                    alert(id);
                    alert('wrong');
                }
            });
            event.preventDefault();
        });
    </script>
@endsection