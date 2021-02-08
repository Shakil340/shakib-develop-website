@extends('Admin.master.layout')


@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <div class="card-title">
                Ekko Lightbox
            </div>
        </div>
        <div class="card-body">
            <div class="row " style="margin-left: 250px">
                @foreach($singles as $image)

                <div class="col-sm-2">

                    <img src="{{asset('uploads/image/'.$image->thumbnail)}}" class="img-fluid mb-2" alt="white sample" width="80px">
                    <a href="{{route('free-trial.download',$image->thumbnail)}}">Download</a>

                </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
