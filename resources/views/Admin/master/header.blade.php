<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('inc/Backend')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('inc/Backend')}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->

    {{--    <nav class="main-header navbar navbar-expand navbar-white navbar-light">--}}
    {{--        <!-- Left navbar links -->--}}
    {{--        <ul class="navbar-nav">--}}
    {{--            <li class="nav-item">--}}
    {{--                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item d-none d-sm-inline-block">--}}
    {{--                <a href="../../index3.html" class="nav-link">Home</a>--}}
    {{--            </li>--}}
    {{--            <li class="nav-item d-none d-sm-inline-block">--}}
    {{--                <a href="#" class="nav-link">Contact</a>--}}
    {{--            </li>--}}
    {{--        </ul>--}}


    <nav class="navbar navbar-expand-lg navbar-light bg-light ">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin-left: 1200px">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <form action=" " method="post">
                            @csrf
{{--                            <a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a>--}}
                        </form>


                    </div>
                </li>
            </ul>

        </div>
    </nav>


{{--    </nav>--}}
{{--    <!-- /.navbar -->--}}
