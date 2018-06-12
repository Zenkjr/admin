@extends('layout.master')
@section('section')
    <div class="border-bottom">
        <h3 class="pt-3">Danh sách xe</h3>
    </div>
    <div class="pt-4 ">

        <form action="/admin" method="post">
            {{csrf_field()}}
            <div class="row ml-0 mr-0">

                <div class="form-control  col-md">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tình trạng</label>
                        <input type="text" class="form-control w-50" id="tinhtrang" name="tinh_trang"
                               aria-describedby="emailHelp"
                               placeholder="Tình trạng">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Xuất xứ</label>
                        <input type="text" class="form-control w-75" id="xuat_xu" name="xuat_xu"
                               aria-describedby="emailHelp"
                               placeholder="Xuất xứ">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Đăng ký lần đầu</label>
                        <input type="text" class="form-control w-50" id="dang_ky_lan_dau" name="dang_ky_lan_dau"
                               aria-describedby="emailHelp"
                               placeholder="Đăng ký lần đầu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hạn đang kiểm</label>
                        <input type="text" class="form-control w-50" id="han_dang_kiem" name="han_dang_kiem"
                               aria-describedby="emailHelp"
                               placeholder="Hạn đang kiểm">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mã Lực</label>
                        <input type="text" class="form-control w-75" id="ma_luc" name="ma_luc"
                               aria-describedby="emailHelp"
                               placeholder="Mã Lực">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cỡ lốp</label>
                        <input type="text" class="form-control w-50" id="co_lop" name="co_lop"
                               aria-describedby="emailHelp"
                               placeholder="Cỡ lốp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dung tích máy</label>
                        <input type="text" class="form-control w-50" id="dung_tich" name="dung_tich_may"
                               aria-describedby="emailHelp"
                               placeholder="Dung tích máy">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        <input type="text" class="form-control" id="mo_ts" name="mo_ts"
                               aria-describedby="emailHelp"
                               placeholder="Mô tả">
                    </div>
                </div>
                {{--form thông tin cơ bản--}}
                <div class="form-control col-md">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Giá</label>
                        <input type="text" class="form-control w-50" id="gia" name="gia" aria-describedby="emailHelp"
                               placeholder="Giá">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        <input type="text" class="form-control w-50" id="Model" name="Model"
                               aria-describedby="emailHelp"
                               placeholder="Model">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1 ">Nhãn hiệu</label>
                        <input type="text" class="form-control w-50" id="nhanhieu" name="nhan_hieu"
                               aria-describedby="emailHelp"
                               placeholder="Nhãn hiệu">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Năm sản xuất</label>
                        <input type="text" class="form-control w-50" id="nam_san_xuat" name="nam_san_xuat"
                               aria-describedby="emailHelp"
                               placeholder="Năm sản xuất">
                    </div>
                    <div class="custom-file" type="input">
                      {{--<span> <i class="far fa-file-image"></i><input type="file" name="img_url" placeholder="">  </span>--}}
                        {{--<input type="file" class="custom-file-input" id="validatedCustomFile" required>--}}
                        {{--<label class="custom-file-label" for="validatedCustomFile"><i class="far fa-file-image"></i> Chọn images</label>--}}
                        <img src="" type="file" alt="">
                        <input type="file"> <i class="far fa-file-image"></i>
                    </div>



                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
    {{--<div class="pt-4">--}}

@endsection