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
            <form action="{{route('background.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label for="file" class="col-sm-3 col-form-label">Image 1</label>
                    <div class="col-sm-9">
                        <input type="hidden" class="form-control"  name="id" value="{{$backgrounds->id}}">
                        <input type="file" value="{{old('img1')}}" class="form-control @error ('img1') is-invalid @enderror" name="img1" id="file">
                        @error('img1')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <img src="{{asset('uploads/image/'.$backgrounds->img1)}}" id="image"  style="width: 80px">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="file" class="col-sm-3 col-form-label">Image 2</label>
                    <div class="col-sm-9">
                        <input type="file" value="{{old('img2')}}" class="form-control @error ('img2') is-invalid @enderror" name="img2" id="file2">
                        @error('img2')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <img src="{{asset('uploads/image/'.$backgrounds->img2)}}" id="image2"  style="width: 80px">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="file" class="col-sm-3 col-form-label">Image 3</label>
                    <div class="col-sm-9">
                        <input type="file" value="{{old('img3')}}" class="form-control @error ('img3') is-invalid @enderror" name="img3" id="file3">
                        @error('img3')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <img src="{{asset('uploads/image/'.$backgrounds->img3)}}" id="image3"  style="width: 80px">
                    </div>
                </div>



                <div class="form-group row">
                    <label for="file" class="col-sm-3 col-form-label">Image 4</label>
                    <div class="col-sm-9">
                        <input type="file" value="{{old('img4')}}" class="form-control @error ('img4') is-invalid @enderror" name="img4" id="file4">
                        @error('img4')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <img src="{{asset('uploads/image/'.$backgrounds->img4)}}" id="image4"  style="width: 80px">
                    </div>
                </div>







                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error ('status') is-invalid @enderror" type="radio" name="status" id="active"{{$backgrounds->status == 1 ? 'checked' : ''}}  value="1">
                        <label class="form-check-label" for="active">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input  @error ('status') is-invalid @enderror" type="radio" name="status" id="inactive"{{$backgrounds->status == 0 ? 'checked' : ''}} value="0" >
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
