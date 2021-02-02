@extends('User.Master.layout')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-9 offset-3" style="background: #dad9da; margin-left: 21%;padding-bottom: 40px">


                            <form method="post" action="{{route('order.store')}}"  class="free-bg-drag" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 drag-50" style="float: left">

                                    <h5 class="text-center" style="margin-top: 2px;">Multiple file must be compressed (zip/rar) </h5>

                                <div class="form-group files color">
                                    <span class="drag-icon"><i class="fas fa-cloud-upload-alt"></i></span>
                                    <h4>Drag & Drop Files Here</h4>
                                    <input type="file" name="thumbnail" class="form-control drag-opacity">


                                 </div>
                                 </div>

                        <div class="col-md-6 " style="float: left; margin-top: 30px">

                            <div class="form-group p-relative">

                                <select name="service_id" class="form-control name" id="skb">
                                    <option>Select Service</option>

                                    @php
                                        use App\Models\Category;use App\Models\service;$services = service::where('status',1)->get();
                                    @endphp
                                    @foreach($services as $service)

                                        <option value="{{$service->id}}">{{$service->name}}</option>

                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group amount-p">

                                <span class="offer-amount">$</span>
                                <input type="number" class="form-control" id="amount" name="amount"  placeholder="20,000 max">
                            </div>

                            <div class="form-group p-relative">

                                <select name="time" class="form-control name" id="skb">
                                    <option>Select Day</option>

                                    @for ($i = 1; $i <= 90; $i++)
                                        echo "<option>{{$i}} Day</option>";
                                    @endfor

                                </select>
                            </div>


                            <div class="form-group p-relative">

                                <textarea name="description" class="form-control name" id="exampleFormControlTextarea1" rows="3"
                                          placeholder="Enter Text Here" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Make Order</button>
                            <button type="reset" class="btn btn-primary float-right">Reset</button>
                        </div>

                            </form>

                    <!-- /.card -->

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <section style="height: 180px"></section>

@endsection
