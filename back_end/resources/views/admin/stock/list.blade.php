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
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>car id</th>
                                <th>biển số</th>
                                <th>đăng ký lần đầu</th>
                                <th>hạn đăng kiểm</th>
                                <th>Quốc gia</th>
                                <th>màu</th>
                                <th>Chú thích</th>
                                <th>Nhập ngày</th>
                                <th>Xuất ngày</th>
                                <th>Giá bán</th>
                                <th>Trạng thái</th>
                            </tr>
                            </thead>
                            @foreach($stock as $item)
                                {{ csrf_field() }}
                                <tbody>
                                <tr>
                                    <td>{{$item->id}}</td>
                                    {{--<td>--}}
                                        {{--<div class="card"--}}
                                             {{--style="background-image: url('{{$item->img}}'); background-size: cover; width: 100px; height: 60px;">--}}
                                        {{--</div>--}}
                                    {{--</td>--}}
{{--                                    <td>{{$item->name}}</td>--}}
                                    <td>{{$item->car_id}}</td>
                                    <td>{{$item->plate_num}}</td>
                                    <td>{{$item->first_plate}}</td>
                                    <td>{{$item->regis_expiry}}</td>
                                    <td>{{$item->country_id}}</td>
                                    <td>{{$item->color_id}}</td>
                                    <td>{{$item->note}}</td>
                                    <td>{{$item->in_at}}</td>
                                    <td>{{$item->out_at}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->status}}</td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.row -->
@endsection