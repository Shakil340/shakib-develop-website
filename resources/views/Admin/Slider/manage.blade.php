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
        <section class="content ">
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
                                    <th>Image 1</th>
                                    <th>Image 2</th>
                                    <th>Image 3</th>
                                    <th>Image 4</th>
                                    <th>Image 5</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img src="{{asset('uploads/image/'.$slider->img1)}}" width="80px"></td>
                                        <td><img src="{{asset('uploads/image/'.$slider->img2)}}" width="80px"></td>
                                        <td><img src="{{asset('uploads/image/'.$slider->img3)}}" width="80px"></td>
                                        <td><img src="{{asset('uploads/image/'.$slider->img4)}}" width="80px"></td>
                                        <td><img src="{{asset('uploads/image/'.$slider->img5)}}" width="80px"></td>


                                        <td>{{$slider->status == 1 ? 'Active' : 'Inactive'}}</td>
                                        <td>
                                                                        <a class="btn btn-warning text-white btn-xs" href="{{route('slider.edit',$slider->id)}}"><i class="fas text-white fa-pencil-alt"></i>Edit</a>
                                                                        <a class="btn btn-danger btn-xs" href="{{route('slider.delete',$slider->id)}}"><i class="far fa-trash-alt"></i>Delete</a>
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
