@extends('User.Master.layout')

@section('content')

    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Complete Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('order-now')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Complete Order</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- /.col -->
                    <div class="card  col-md-12">
                        <div class="card-header">
                            <h3 class="card-title">Complete Order List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr class="text-center">

                                    <th>Order Id</th>
                                    <th>Service</th>
                                    <th>Amount</th>
                                    <th>Time</th>

                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>




                                @foreach($complete as $com)
                                    <tr class="text-center">

                                        <td>10{{$com->id}}</td>
                                        <td>{{$com->service->name}}</td>
                                        <td>{{$com->amount}}$</td>
                                        <td>{{$com->time}}</td>

                                        <td>{{$com->status == 1 ? 'Complete' : ''}}</td>


                                    </tr>



                                @endforeach










                                </tbody>

                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
