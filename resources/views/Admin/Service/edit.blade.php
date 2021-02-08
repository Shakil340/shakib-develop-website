@extends('Admin.master.layout')

@section('content')

    <div class="card card-info  " style="height: 530px">
        <div class="card card-info col-md-7 offset-md-3 p-0">
            <div class="card-header">
                <h3 class="card-title">Add Post</h3>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-{{session('type')}}">
                    {{session('message')}}
                </div>
        @endif
        <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('service.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">service Name</label>
                    <div class="col-sm-9">
                        <input type="hidden" value="{{$service->id}}" name="id">
                        <input type="text" value="{{$service->name}}"   class="form-control @error ('name') is-invalid @enderror" id="name" placeholder="Enter brand Name" name="name">
                        @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>





                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error ('status') is-invalid @enderror" type="radio" name="status" id="active"{{$service->status == 1 ? 'checked' : ''}}  value="1">
                        <label class="form-check-label" for="active">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input  @error ('status') is-invalid @enderror" type="radio" name="status" id="inactive"{{$service->status == 0 ? 'checked' : ''}} value="0" >
                        <label class="form-check-label" for="inactive">Inactive</label>
                    </div>
                    @error('status')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
