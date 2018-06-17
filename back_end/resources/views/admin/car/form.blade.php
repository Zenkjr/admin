@extends('layout.admin_template')

@section('content')
    <div class='row'>
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm Mới Xe</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="/admin/car/store" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Car name :</label>

                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" style="border-radius: 15px;" id="name" placeholder="car name">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label">Brand</label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border-radius: 15px;" name="brand_id" id="brand_id">
                                    <option value="1">toyota</option>
                                    <option value="2">honda</option>
                                    <option value="3">mecidec</option>
                                    <option value="4">lambo</option>
                                    <option value="5">ferrari</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Year</label>

                            <div class="col-sm-10">
                                <input type="number" name="year" class="form-control" style="border-radius: 15px;" id="year" placeholder="car year">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Seat</label>

                            <div class="col-sm-10">
                                <input type="number" name="seat" class="form-control" style="border-radius: 15px;" id="seat"
                                       placeholder="seat number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Engine</label>

                            <div class="col-sm-10">
                                <input type="number" name="engine" class="form-control" style="border-radius: 15px;" id="engine"
                                       placeholder="car engine">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">horse power</label>

                            <div class="col-sm-10">
                                <input type="number" name="horse_power" class="form-control" style="border-radius: 15px;" id="horse_power"
                                       placeholder="horse power">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cỡ lốp</label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border-radius: 15px;" name="tire_size" id="tire_size">
                                    <option value="1">d21</option>
                                    <option value="2">d32</option>
                                    <option value="3">d12</option>
                                    <option value="4">l12</option>
                                    <option value="5">a11</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Dòng xe</label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border-radius: 15px;" name="clazz_id" id="clazz_id">
                                    <option value="1">Suv</option>
                                    <option value="2">sot</option>
                                    <option value="3">libi</option>
                                    <option value="4">mec</option>
                                    <option value="5">cu</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ghi chú</label>

                            <div class="col-sm-10">
                                <input type="text" name="note" class="form-control" style="border-radius: 15px;" id="note" placeholder="ghi chú">
                            </div>
                        </div>

                        {{--add plate_num to table stock--}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label"> Biển số</label>

                            <div class="col-sm-10">
                                <input type="text" name="plate_num" class="form-control" style="border-radius: 15px;" id="plate_num"
                                       placeholder="biển số">
                            </div>
                        </div>
                        {{--add first_plate to table stock--}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Đăng ký lần đầu</label>

                            <div class="col-sm-10">
                                <input type="date" name="first_plate" class="form-control" style="border-radius: 15px;" id="first_plate"
                                       placeholder="đăng ký lần đầu">
                            </div>
                        </div>
                        {{--add regis_expiry to table stock--}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hạn đăng kiểm</label>

                            <div class="col-sm-10">
                                <input type="date" name="regis_expiry" class="form-control" style="border-radius: 15px;" id="regis_expiry"
                                       placeholder="hạn đăng kiểm">
                            </div>
                        </div>
                        {{--add country_id to table stock--}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Quốc gia</label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border-radius: 15px;" name="country_id" id="country_id">
                                    <option value="1">mỹ</option>
                                    <option value="2">cannada</option>
                                    <option value="3">nhật</option>
                                    <option value="4">sec</option>
                                    <option value="5">hàn</option>
                                </select>
                            </div>
                        </div>

                        {{--add color_id to table stock--}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Màu</label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border-radius: 15px;" name="color_id" id="color_id">
                                    <option value="1">Đỏ</option>
                                    <option value="2">Đen</option>
                                    <option value="3">Xám</option>
                                    <option value="4">Xanh</option>
                                    <option value="5">Tím</option>
                                </select>
                            </div>
                        </div>
                        {{--add price to table stock--}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giá bán</label>

                            <div class="col-sm-10">
                                <input type="number" name="price" class="form-control" style="border-radius: 15px;" id="price"
                                       placeholder="price">
                            </div>
                        </div>
                        {{--add status to table stock--}}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <select class="form-control" style="border-radius: 15px;" name="status" id="status">
                                    <option value="1">Bán</option>
                                    <option value="2">Hết Hàng</option>
                                    <option value="3">Còn Trong kho</option>
                                </select>
                            </div>
                        </div>
                        {{--add new images to table image--}}
                        <div class="form-group">
                            <label for="exampleInputFile" class="col-sm-2 control-label">images</label>
                            <div class="col-sm-10">
                                <input type="file" id="exampleInputFile" name="img_url">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div>
                    <!-- /.box-footer -->
                </form>

            </div>
            <!-- /.box -->
        </div>
    </div><!-- /.row -->
@endsection