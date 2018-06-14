<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/listCar.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>Document</title>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="logo bg-light">
            <img class="img-fluid " src="{{asset('/img/logo_admin.png')}}" alt="logo">
        </div>

    </div>

</header>
<div class="container-fluid h-100">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-2 bg-light float-lg-left">
                <nav class="navbar navbar-light ">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 col-md-8" type="search" placeholder="Search"
                               aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </nav>
                <a class="list-group p-3 border-top " href="#">
                    <span>
                        <i class="fas fa-tachometer-alt"></i>Bảng Diều Khiển
                    </span>
                </a>
                <a class="list-group p-3 border-top" href="#">D.s Xe</a>
                <a class="list-group p-3 border-top" methods="get" href="/admin">
                    <sapn>
                        <i class="fas fa-list"></i> D.s Xe
                    </sapn>
                </a>
                <a class="list-group p-3 border-top border-bottom" href="/admin/create"><span><i
                                class="fas fa-plus-circle"></i>  Thêm Mới </span></a>
            </div>

            {{--master--}}
            <div class="col-md-10">
                @section('section')

                @show
            </div>
        </div>
    </div>
    {{--<script src="{{asset('/js/listCar.js')}}"></script>--}}

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
            integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
            crossorigin="anonymous"></script>
{{--<section class="container">--}}


{{--</section>--}}
</body>
</html>

