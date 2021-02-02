@extends('User.Master.layout')

@section('content')

    <div class="card offset-md-3 col-md-9">
        <div class="card-header">
            <h3 class="card-title">Sliders Data Table</h3>
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
                    <th>File</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pending as $pen)
                    <tr class="text-center">

                        <td>10{{$pen->id}}</td>
                        <td>{{$pen->service->name}}</td>
                        <td>{{$pen->amount}}$</td>
                        <td>{{$pen->time}}</td>
                        <td> <img src="{{url('uploads/image/'.$pen->thumbnail)}}" alt="" width="80px"/>
                        <td>{{$pen->status == 1 ? '' : 'Pending'}}</td>
                        <td>
                            <a href="">Cancel</a>
                        </td>

                    </tr>



                @endforeach




                </tbody>

            </table>

        </div>
        <!-- /.card-body -->
    </div>

@endsection
