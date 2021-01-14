@extends('Admin.master.layout')

@section('content')


    <div class="card offset-md-3 col-md-9">
        <div class="card-header">
            <h3 class="card-title">Sliders Data Table</h3>
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
                        <td><img src="{{$slider->img1}}" width="80px" alt=""/></td>
                        <td><img src="{{$slider->img2}}" width="80px" alt=""/></td>
                        <td><img src="{{$slider->img3}}" width="80px" alt=""/></td>
                        <td><img src="{{$slider->img4}}" width="80px" alt=""/></td>
                        <td><img src="{{$slider->img5}}" width="80px" alt=""/></td>

                        <td>{{$slider->status == 1 ? 'Active' : 'Inactive'}}</td>
                        <td>
{{--                            <a class="btn btn-warning text-white btn-xs" href="{{route('brand.edit',$slider->id)}}"><i class="fas text-white fa-pencil-alt"></i>Edit</a>--}}
{{--                            <a class="btn btn-danger btn-xs" href="{{route('brand.destroy',$slider->id)}}"><i class="far fa-trash-alt"></i>Delete</a>--}}
                        </td>
                    </tr>
                @endforeach

                </tfoot>

            </table>

        </div>
        <!-- /.card-body -->
    </div>
@endsection
