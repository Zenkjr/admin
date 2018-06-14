@extends('layout.master')
@section('section')
    <div class="border-bottom">
        <h3 class="pt-3">Danh sách xe</h3>
    </div>
    <div class="pt-4">
        <table class="table table-hover table-dark">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">maker_id</th>
                <th scope="col">year</th>
                <th scope="col">engine</th>
                <th scope="col">horse_power</th>
                <th scope="col">tire_size</th>
                <th scope="col">clazz_id</th>
                <th scope="col">note</th>
                <th scope="col">price</th>
                <th scope="col">action</th>

            </tr>
            </thead>
            @foreach($listCar as $item)
                <tbody>
                <tr id="{{$item->id}}">
                    <th scope="row">{{$item->id}}</th>
                    <td class="car-name">{{$item->name}}</td>
                    <td class="car-maker_id">{{$item->maker_id}}</td>
                    <td class="car-year">{{$item->year}}</td>
                    <td class="car-engine">{{$item->engine}}</td>
                    <td class="car-horse_power">{{$item->horse_power}}</td>
                    <td class="car-tire_size">{{$item->tire_size}}</td>
                    <td class="car-clazz_id">{{$item->clazz_id}}</td>
                    <td class="car-price">{{$item->price}}</td>
                    <td class="car-note">{{$item->note}}</td>

                    <td>
                        <button type="button" id="more-{{$item->id}}" class="btn btn-outline-info more-info"
                                title="Xem chi tiết">
                            <i class="fas fa-arrow-circle-left fa-lg"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger btn-edit">Sửa
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-danger btn-deleted">
                            Xóa
                        </button>
                    </td>

                </tr>
                </tbody>

            @endforeach
        </table>
        {{--modal edit--}}

        <div class="modal" tabindex="-1" role="dialog" id="modal_edit">
            <div class="modal-dialog" role="document">
                <form action="" method="" class="form" id="formUpdate">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{csrf_field()}}
                            <input type="hidden" value="1" id="isAjax" name="isAjax">
                            <input type="hidden" value="" id="idUpdate" name="id">
                            {{--<input type="hidden" value="" id="imageUpdate" name="img_url">--}}


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">name</span>
                                </div>
                                <input type="text" name="name_Update" id="name_Update" class="form-control"
                                       placeholder="name">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">maker_id</span>
                                </div>
                                <input type="number" name="maker_id_Update" id="maker_id_Update" class="form-control"
                                       placeholder="maker_id">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">year</span>
                                </div>
                                <input type="number" name="year_Update" id="year_Update" class="form-control"
                                       placeholder="year">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">engine</span>
                                </div>
                                <input type="number" name="engine_Update" id="engine_Update" class="form-control"
                                       placeholder="engine">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">horse_power</span>
                                </div>
                                <input type="number" name="horse_power_Update" id="horse_power_Update" class="form-control"
                                       placeholder="horse_power">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">tire_size</span>
                                </div>
                                <input type="number" name="tire_size_Update" id="tire_size_Update" class="form-control"
                                       placeholder="tire_size">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">clazz_id</span>
                                </div>
                                <input type="number" name="clazz_id_Update" id="clazz_id_Update" class="form-control"
                                       placeholder="clazz_id">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">price</span>
                                </div>
                                <input type="number" name="price_Update" id="price_Update" class="form-control"
                                       placeholder="price">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >note</span>
                                </div>
                                <input type="text" name="note_Update" id="note_Update" class="form-control"
                                       placeholder="note">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-edit-ok">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{--end model deleted--}}
        <div class="modal" tabindex="-1" role="dialog" id="modal_Delete">
            <div class="modal-dialog" role="document">
                <form action="" method="" class="form" id="formDelete">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{csrf_field()}}
                            <input type="hidden" value="1" id="isAjax_Delete" name="isAjax">
                            <input type="hidden" value="" id="idDelete" name="id">
                            <input type="hidden" value="" id="imageDelete" name="img_url">
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="nameDelete" id="nameDelete">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="license_number_Delete"
                                              id="license_number_Delete"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="">Price</label>
                                    <input type="text" class="form-control" name="first_restration_Delete"
                                           id="first_restration_Delete">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-deleted-ok">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div>

            </div>
        </div>
    </div>
    <script>
        var currentId = '';
        $('.btn-deleted').click(function () {

            currentId = $(this).closest('tr').attr('id');
            getCurrentInformation2(currentId);

        });
        $('.btn-deleted-ok').click(function () {
            $.ajax({
                method: 'DELETE',
                url: ' /admin/' + currentId,
                data: {
                    '_token': '{{ csrf_token() }}'
                },
                success: function () {
                    alert('oki');
                }
            });
        });

        function getCurrentInformation2(id) {
            $.ajax({
                method: 'get',
                url: '/admin/json/' + id,
                data: {
                    '_token': '{{ csrf_token() }}'
                },
                success: function (resp) {

                    var name = resp.name;
                    var id = resp.id;
                    var license_number = resp.license_number;
                    var first_restration = resp.first_restration;
                    var certificate_expiry = resp.certificate_expiry;
                    $('#idDelete').val(id);
                    $('#nameDelete').val(name);
                    $('#license_number_Delete').val(license_number);
                    $('#first_restration_Delete').val(first_restration);
                    $('#certificate_expiry_Delete').val(certificate_expiry);
                    $('#modal_Delete').modal('show');
                },
            });
        }

        var editId = '';
        $('.btn-edit').click(function () {

            editId = $(this).closest('tr').attr('id');
            getEditId(editId);
        });

        $('#formUpdate').submit(function (event) {
            var editId = $('#idUpdate').val();
            // alert('id ' + editId);
            console.log($(this).serialize());
            $.ajax({
                method: 'put',
                url: '/admin/' + editId,
                data: $('#formUpdate').serialize(),

                success: function (resp) {
                    $('#idUpdate').val('');
                    $('#name_Update').val('');
                    $('#maker_id_Update').val('');
                    $('#year_Update').val('');
                    $('#engine_Update').val('');
                    $('#horse_power_Update').val('');
                    $('#tire_size_Update').val('');
                    $('#clazz_id_Update').val('');
                    $('#price_Update').val('');
                    $('#note_Update').val('');

                    // $('#certificate_expiry_Update').val('');

                    console.log('tr' + editId + ' > td.product-name');

                    $('tr#' + editId + ' > td.car-name').text(resp.name);
                    $('tr#' + editId + ' > td.car-maker_id').text(resp.maker_id);
                    $('tr#' + editId + ' > td.car-year').text(resp.year);
                    $('tr#' + editId + ' > td.car-engine').text(resp.engine);
                    $('tr#' + editId + ' > td.car-horse_power').text(resp.horse_power);
                    $('tr#' + editId + ' > td.car-tire_size').text(resp.tire_size);
                    $('tr#' + editId + ' > td.car-clazz_id').text(resp.clazz_id);
                    $('tr#' + editId + ' > td.car-price').text(resp.price);
                    $('tr#' + editId + ' > td.car-note').text(resp.note);

                    alert('oki');
                    // },
                    // err: function () {
                    //
                }

            });
            event.preventDefault();

        });

        function getEditId(id) {
            $.ajax({
                method: 'get',
                url: '/admin/json/' + id,
                data: {
                    '_token': '{{ csrf_token() }}'
                },
                success: function (resp) {
                    var name = resp.name;
                    var id = resp.id;
                    var maker_id = resp.maker_id;
                    var year = resp.year;
                    var engine = resp.engine;
                    $('#idUpdate').val(id);
                    $('#name_Update').val(name);
                    $('#maker_id_Update').val(maker_id);
                    $('#year_Update').val(year);
                    $('#engine_Update').val(engine);
                    $('#horse_power_Update').val(resp.horse_power);
                    $('#tire_size_Update').val(resp.tire_size);
                    $('#clazz_id_Update').val(resp.clazz_id);
                    $('#price_Update').val(resp.price);
                    $('#note_Update').val(resp.note);

                    $('#modal_edit').modal('show');
                },
            });
        }
    </script>
    {{--</div>--}}
@endsection