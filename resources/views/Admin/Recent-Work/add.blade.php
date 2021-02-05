@extends('Admin.master.layout')

@section('content')

    <div class="card card-info  " style="height: 530px">
        <div class="card card-info col-md-6 offset-md-3 p-0">
            <div class="card-header">
                <h3 class="card-title">Add Recent Work</h3>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                    <strong>{{session('message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('recent_work.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" value="{{old ('title')}}"   class="form-control @error ('title') is-invalid @enderror" id="title" placeholder="Enter brand Name" name="title">
                        @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="file" class="col-sm-3 col-form-label">Thumbnail</label>
                    <div class="col-sm-9">
                        <input type="file" value="{{old('thumbnail')}}" class="form-control @error ('thumbnail') is-invalid @enderror" name="thumbnail" id="thumbnail">
                        @error('thumbnail')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <img src="" id="thumbnail1"  style="width: 80px">
                    </div>
                </div>


                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input  @error ('status') is-invalid @enderror" type="radio" {{old ('status')}} name="status" id="active" value="1">
                                <label class="form-check-label" for="active">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error ('status') is-invalid @enderror" {{old ('status')}}  type="radio" name="status" id="inactive" value="0">
                                <label class="form-check-label" for="inactive">
                                    Inactive
                                </label>
                            </div>
                            @error('status')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
