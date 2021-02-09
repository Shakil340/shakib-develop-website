@extends('Admin.master.layout')

@section('content')

    <div class="content-wrapper" style="min-height: 1200.88px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('order-now')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Orders</li>
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
                            <h3 class="card-title">All Order List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th>Order Id</th>
                                    <th>Description</th>
                                    <th>File</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($orders as $al)
                                    @php
                                        $sk = 'skl skl';
                                            $skl = explode('.',$al->thumbnail);
                                            $thum = $skl[1];
                                    @endphp
                                    <tr class="text-center">
                                        <td>10{{$al->id}}</td>
                                        <td>{{$al->description}}</td>
                                        <td>
                                            @if($thum == 'zip')
                                                {{$al->thumbnail}}
                                            @else
                                            <img src="{{asset('uploads/image/'.$al->thumbnail)}}" alt="" width="80px"/>
                                            @endif


                                            <a href="{{route('admin.order.download',$al->thumbnail)}}">Download</a>
                                        </td>

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
