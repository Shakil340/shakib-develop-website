@extends('Frontend.Master.layout')

@section('content')

    <section>
        <div class="container" style="max-width: 100% !important;">
            <div class="row">
                <div class="col-md-12 pt-0">
                    <div class="slider-area">
                        @php
                        use App\Models\Slider;$sliders = Slider::orderby('id','desc')->where('status',1)->take(1)->get();
                        @endphp
                        @foreach($sliders as $slider)
                        <div class="slider">

                            <div><img src="{{$slider->img1}}" alt="" style="width: 100%; height: 600px;"></div>
                            <div><img src="{{$slider->img2}}" alt="" style="width: 100%; height: 600px;"></div>
                            <div><img src="{{$slider->img3}}" alt="" style="width: 100%; height: 600px;"></div>
                            <div><img src="{{$slider->img4}}" alt="" style="width: 100%; height: 600px;"></div>
                            <div><img src="{{$slider->img5}}" alt="" style="width: 100%; height: 600px;"></div>

                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="recent-bg">
        <div class="container" style="max-width: 100% !important;">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1>Professional Editing & Design Service</h1>
                        <h5 class="our-bg">Our Main services at a glance</h5>
                    </div>
                </div>

                @php
                use App\Models\HomeServiceSubTitle;use App\Models\HomeService;$homeServices = HomeService::where('status',1)->take(9)->get();
                $subTitle = HomeServiceSubTitle::with('shakil')->where('status',1)->get();

                @endphp
                @foreach($homeServices as $homeService)
                <div class="col-md-4">
                    <div class="image-box">
                        <a href="{{$homeService->url}}">
                            <img src="{{$homeService->thumbnail}}" alt="">
                        </a>
                        <div class="image-box-botton">
                            <h4> <a href="{{$homeService->url}}">{{substr($homeService->title, 0,20)}}</a> </h4>
                            <p class="d-inline">{{substr($homeService->content, 0,120)}}
                            </p>
                            <a href="{{$homeService->url}}">
                                <button class="readme d-inline">Read More...</button>
                            </a>

                            <ul class="check">


                                @foreach($subTitle as $sub)


                             <li>{{$sub->name }}</li>



                                @endforeach

                            </ul>
                        </div>
                    </div>

                </div>


                @endforeach





            </div>
        </div>
    </section>

    <section>
        <div class="container" style="max-width: 100% !important;">

            <div class="row">
                <div class="col-md-4 wid-35">
                    <div class="our-price">
                        <h4>Our Main Services Starting Price List</h4>

                        <ul class="our-service">
                            <li><a href="#">Volume Image Clipping Path Service Starting at only $0.15</a></li>
                            <li><a href="#">High End Photo Retouching Service Starting At Only $0.20</a></li>
                            <li><a href="#">Image Masking Service Starting At Only $ 0.25</a></li>
                            <li><a href="#">Image Manipulation Service Starting At Only $ 0.22</a></li>
                            <li><a href="#">Photo Resizing Service Starting At Only $ 0.20</a></li>
                            <li><a href="#">Image Color Correction Service Starting At Only $ 0.20</a></li>
                            <li><a href="#">Background Remove Service Starting At Only $ 0.20</a></li>
                            <li><a href="#">Logo Design Service Starting At Only $ 0.20</a></li>
                            <li><a href="#">Raster To Vector Service Starting At Only $ 0.20</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-4 wid-32">
                    <div class="our-price text-center">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <h4>Same Day Delivery</h4>
                        <p>We offer business day delivery to our clients. Turnaround Time: 4-6hrs, 6-12hrs, 12-24hrs.
                            Price depends on delivery time.</p>
                    </div>
                </div>


                <div class="col-md-4 wid-32">
                    <div class="our-price text-center">
                        <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                        <h4>Same Day Delivery</h4>
                        <p>We offer business day delivery to our clients. Turnaround Time: 4-6hrs, 6-12hrs, 12-24hrs.
                            Price depends on delivery time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-bg" >
        <div class="container" style="max-width: 100% !important;">
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-work text-center">
                        <h4>Recent Works</h4>
                        <p> Some of our recent works:</p>
                    </div>
                </div>
                <div class="recent-images d-flex">
                    @php
                    use App\Models\RecentWork;$recents = RecentWork::latest()->where('status',1)->take(5)->get();
                    @endphp
                    @foreach($recents as $recent)
                    <div class="recent-image position-relative" >

                        <img src="{{asset('uploads/image/'.$recent->thumbnail)}}" alt="" style="width: 255px; height: 255px">

                        <div class="recent-content position-absolute">
                            <h6 class="text-center mr">{{substr($recent->title, 0,10)}} </h6>
                        </div>

                    </div>

                    @endforeach




                </div>
            </div>
        </div>

    </section>

    <section class="our-shak-bg" style="background-image: url('{{asset('Inc/Frontend')}}/img/pc.jpg')">
        <div class="container" style="max-width: 100% !important;">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h3>OUR SNEAK PIC</h3>
                        <p>Graphicsdesignpoint Is A One Stop Stop Stop</p>
                    </div>
                </div>

                @php
                use App\Models\Expert;$experts = Expert::latest()->where('status',1)->take(6)->get();
                @endphp
                @foreach($experts as $expert)
                <div class="col-md-2">
                    <div class="text-center our-shark">
                        <h3>{{substr($expert->title,0,5)}}</h3>
                        <h4>{{substr($expert->subTitle, 0,15)}}</h4>
                    </div>
                </div>
                @endforeach


                <div class="col-md-4">
                    <div class="our-order text-center">
                        <a href="{{route('free-trial')}}" class="text-white">
                            <h4>Free Trial</h4>
                            <p>You Can Check Our Quality</p>
                        </a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-order text-center">
                        <a href="{{route('contact-us')}}" class="text-white">
                            <h4>Contact Us</h4>
                            <p>We will be come to you within 1 hour</p>

                        </a>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-order text-center">
                        <a href="{{route('order-now')}}" class="text-white">
                            <h4>Place new order</h4>
                            <p>Place Your Order Here Anytime</p>
                        </a>

                    </div>
                </div>




            </div>
        </div>
    </section>


@endsection
