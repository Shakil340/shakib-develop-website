@extends('User.Master.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content d-flex">


                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">Proccessing Order</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{route('order.pending')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white  o-hidden h-100" style="background: #3ab585">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                            </div>
                            <div class="mr-5">Complete Order</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{route('order.complete')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white  o-hidden h-100" style="background: #543ea0">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fab fa-paypal"></i>
                            </div>
                            <div class="mr-5">Payment Paypal</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="https://www.phototrims.com/user/dashboard/pendding">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">Payment Payoneer</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="https://www.phototrims.com/user/dashboard/pendding">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>






        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
