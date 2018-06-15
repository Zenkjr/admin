@extends('layout.master')
@section('section')
    <div class="border-bottom">
        <h3 class="pt-3">Thêm Mới</h3>
    </div>
    <div class="pt-4 ">

        <form action="/admin" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row ml-0 mr-0">

                <div class="form-control  col-md">
                    <div class="input-group pb-3 w-50">
                        {{--<label for="exampleInputEmail1">name</label>--}}
                        <input type="text"  class="form-control w-50" id="name" name="name"
                               aria-describedby="emailHelp"
                               placeholder="Tên xe" >
                        <div class="input-group-append">
                            <span class="input-group-text">Tên xe</span>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <select class="custom-select" name="maker_id" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">honda</option>
                            <option value="2">ferrari</option>
                            <option value="3">mec</option>
                        </select>
                        <div class="input-group-append">
                            <label class="input-group-text" for="inputGroupSelect02">Hãng</label>
                        </div>
                    </div>
                    <div class="input-group pb-3">
                        <input type="number" class="form-control w-50" id="year" name="year"
                               aria-describedby="emailHelp"
                               placeholder="Năm sản xuất">
                        <div class="input-group-append">
                            <span class="input-group-text">year</span>
                        </div>
                    </div>

                    <div class="input-group pb-3">
                        <input type="number" class="form-control" id="engine" name="engine"
                               aria-describedby="emailHelp"
                               placeholder="Động cơ">
                        <div class="input-group-append">
                            <span class="input-group-text">Động cơ</span>
                        </div>
                    </div>
                </div>
                {{--form thông tin cơ bản--}}
                <div class="form-control col-md">
                    <div class="input-group pb-3 w-75">
                        <input type="number" class="form-control " id="price" name="price"
                               aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div>
                    <div class="input-group pb-3">
                        <input type="number" class="form-control w-50" id="horse_power" name="horse_power"
                               aria-describedby="emailHelp"
                               placeholder="Mã lực">
                        <div class="input-group-append">
                            <span class="input-group-text">Mã lực</span>
                        </div>
                    </div>

                    <div class="input-group pb-3">
                        <input type="number" class="form-control w-50" id="tire_size" name="tire_size"
                               aria-describedby="emailHelp"
                               placeholder="Cỡ lốp">
                        <div class="input-group-append">
                            <span class="input-group-text">Cỡ lốp</span>
                        </div>
                    </div>

                    <div class="input-group pb-3">
                        <input type="number" class="form-control w-50" id="clazz_id" name="clazz_id"
                               aria-describedby="emailHelp"
                               placeholder="Nhãn hiệu">
                        <div class="input-group-append">
                            <span class="input-group-text">Nhãn hiệu</span>
                        </div>
                    </div>
                    <div class="input-group pb-3">
                        <input type="text" class="form-control w-50" id="note" name="note"
                               aria-describedby="emailHelp"
                               placeholder="Ghi chú">
                        <div class="input-group-append">
                            <span class="input-group-text">note</span>
                        </div>
                    </div>

                    <div class="custom-file" type="input">
                        {{--<span> <i class="far fa-file-image"></i><input type="file" name="img_url" placeholder="">  </span>--}}
                        {{--<input type="file" class="custom-file-input" id="validatedCustomFile" required>--}}
                        {{--<label class="custom-file-label" for="validatedCustomFile"><i class="far fa-file-image"></i> Chọn images</label>--}}
                        {{--<img src="" type="file" alt="">--}}
                        <input type="file" name="url_img"> <i class="far fa-file-image"></i>

                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>


        </form>
    </div>
    {{--<div class="pt-4">--}}

@endsection