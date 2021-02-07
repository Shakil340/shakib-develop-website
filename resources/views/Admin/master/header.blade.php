<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Inc/Backend')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('Inc/Backend')}}/plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="{{asset('Inc/Backend')}}/plugins/jsgrid/jsgrid-theme.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('Inc/Backend')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('Inc/Backend')}}/dist/css/custom.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="padding: 15px 0px;background: #343a40">
        <!-- Left navbar links -->


        <!-- Right navbar links -->
        <ul class="d-flex w-100" style="justify-content: flex-end; list-style: none; margin: 0px">

            <Li>
                <span>
                    <i class="fas fa-user"></i>
                </span>
                <span style="margin-right: 22px;margin-left: 4px; font-size: 18px">

                        @if(Auth::guard('admin')->check())

                    {{Auth::guard('admin')->user()->name}}

                        @endif


                </span>
            </Li>
            <Li>
                <span><i class="fas fa-sign-out-alt"></i></span>
                <form action="{{route('admin.logout')}}" method="post" style="display: inline-block; margin-left: -25px; margin-right: 20px;">
                    @csrf
                    <x-jet-dropdown-link href="{{ route('admin.logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();" style="font-size: 18px !important; color: rgba(255,255,255,.5);">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form>






            </Li>
        </ul>
    </nav>
    <!-- /.navbar -->
