@extends('Admin.master.layout')

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
                            @if(session()->has('message'))
                                <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                                    <strong>{{session('message')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Country Name</th>
                                    <th>Number</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($free_trials as $free_trial)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$free_trial->name}}</td>
                                        <td>{{$free_trial->email}}</td>
                                        <td>{{$free_trial->location}}</td>
                                        <td>{{$free_trial->number}}</td>
                                        <td>{{substr($free_trial->category->name,0,10)}}</td>
                                        <td>{{$free_trial->message}}</td>

                                        <td>
                                            <a  href=" {{route('free-trial.single',$free_trial->id)}}">Details</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tfoot>

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
