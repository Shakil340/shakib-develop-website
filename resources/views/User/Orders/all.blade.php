@extends('User.Master.layout')

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
                                    <th>Service</th>
                                    <th>Amount</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>


                                @foreach($all as $al)
                                    <br class="text-center">
                                    @php
                                    $sk = explode(' ',$al->time);
                                    $pk = $sk[0];
                                    $date = date_create();
                                    $sks = date_add($date, date_interval_create_from_date_string($al->time));
                                    $pkk = date_format($date, 'Y-m-d');



                                    @endphp

                                            <script>
                      // Set the date we're counting down to

                      var countDownDate = new Date('<?php echo $pkk ?>').getTime();

                      // Update the count down every 1 second
                      var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();


                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;



                      //   // Time calculations for days, hours, minutes and seconds
                         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      //    document.getElementById('demo').innerHTML=days;
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                      //   // Display the result in the element with id="demo"
                          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                              + minutes + "m " + seconds + "s ";

                      //   // If the count down is finished, write some text
                        if (distance < 0) {
                          clearInterval(x);
                          document.getElementById("demo").innerHTML = "EXPIRED";
                        }
                      }, 1000);
                      </script>


                                        <td>10{{$al->id}}</td>
                                        <td>{{$al->service->name}}</td>
                                        <td>{{$al->amount}}$</td>

                                        <td id="demo"></td></br>
                                        <td>{{$al->status == 1 ? 'Complete' : 'Pending'}}</td>
                                        <td>

                                                <a href="{{route('order.allSoftDelete',$al->id)}}">{{$al->status ==1 ? '' : 'Cancel'}}</a>

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
