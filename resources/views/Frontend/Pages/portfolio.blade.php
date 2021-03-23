@extends('Frontend.Master.layout')

@section('content')

    <section class="port-padd">
        <div class="all-portfolio">


            <div class="portfolio-image">
                <h2 class="text-center">Clipping Path</h2>
                @php
                    use App\Models\Protfolliow;$protfollios = Protfolliow::latest()->where('status',1)->get();
                @endphp

                    <div class="port-slider ">
                        @foreach($protfollios as $protfolliow)


                        <a href="{{$protfolliow->img1}}" data-fancybox="gallery">
                            <img src="{{$protfolliow->img1}}" alt="" />

                        </a>

                            <a href="{{$protfolliow->img2}}" data-fancybox="gallery">
                            <img src="{{$protfolliow->img2}}" alt="" />

                        </a>

                            <a href="{{$protfolliow->img3}}" data-fancybox="gallery">
                            <img src="{{$protfolliow->img3}}" alt="" />

                        </a>

                            <a href="{{$protfolliow->img4}}" data-fancybox="gallery">
                            <img src="{{$protfolliow->img4}}" alt="" />
                        </a>


                        @endforeach
                    </div>


            </div>
            <div class="portfolio-image">
                <h2 class="text-center">Image Retouching</h2>
                @php
                    use App\Models\ImageRetouching;$images = ImageRetouching::latest()->where('status',1)->get();
                @endphp

                    <div class="port-slider ">
                        @foreach($images as $image)


                            <a href="{{asset('uploads/image/'.$image->img1)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$image->img1)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$image->img2)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$image->img2)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$image->img3)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$image->img3)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$image->img4)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$image->img4)}}" alt="" />
                            </a>



                        @endforeach
                    </div>


            </div>
            <div class="portfolio-image">
                <h2 class="text-center">Background Remove</h2>
                @php
                    use App\Models\BackgroundRemove;$backgrounds = BackgroundRemove::where('status',1)->get();
                @endphp

                    <div class="port-slider ">
                        @foreach($backgrounds as $background)


                            <a href="{{asset('uploads/image/'.$background->img1)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$background->img1)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$background->img2)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$background->img2)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$background->img3)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$background->img3)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$background->img4)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$background->img4)}}" alt="" />
                            </a>



                        @endforeach
                    </div>


            </div>
            <div class="portfolio-image">
                <h2 class="text-center">Photo Resizing</h2>
                @php
                   use App\Models\PhotoResizing;$photos = PhotoResizing::get();
                @endphp

                    <div class="port-slider ">
                        @foreach($photos as $photo)


                            <a href="{{asset('uploads/image/'.$photo->img1)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$photo->img1)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$photo->img2)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$photo->img2)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$photo->img3)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$photo->img3)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$photo->img4)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$photo->img4)}}" alt="" />
                            </a>



                        @endforeach
                    </div>


            </div>
            <div class="portfolio-image">
                <h2 class="text-center">Color Correction</h2>
                @php
                  use App\Models\ColorCorrection;$colors = ColorCorrection::get();
                @endphp

                    <div class="port-slider ">
                        @foreach($colors as $color)


                            <a href="{{asset('uploads/image/'.$color->img1)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$color->img1)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$color->img2)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$color->img2)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$color->img3)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$color->img3)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$color->img4)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$color->img4)}}" alt="" />
                            </a>


                        @endforeach
                    </div>


            </div>
            <div class="portfolio-image">
                <h2 class="text-center">Logo Design</h2>
                @php
                  use App\Models\LogoDesign;$logos = LogoDesign::get();
                @endphp

                    <div class="port-slider ">
                        @foreach($logos as $logo)


                            <a href="{{asset('uploads/image/'.$logo->img1)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$logo->img1)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$logo->img2)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$logo->img2)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$logo->img3)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$logo->img3)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$logo->img4)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$logo->img4)}}" alt="" />
                            </a>


                        @endforeach
                    </div>


            </div>
            <div class="portfolio-image">
                <h2 class="text-center">Raster To Vector</h2>
                @php
                  use App\Models\RasterToVector;$rasters = RasterToVector::get();
                @endphp

                    <div class="port-slider ">
                        @foreach($rasters as $raster)


                            <a href="{{asset('uploads/image/'.$raster->img1)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$raster->img1)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$raster->img2)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$raster->img2)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$raster->img3)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$raster->img3)}}" alt="" />

                            </a>

                            <a href="{{asset('uploads/image/'.$raster->img4)}}" data-fancybox="gallery">
                                <img src="{{asset('uploads/image/'.$raster->img4)}}" alt="" />
                            </a>


                        @endforeach
                    </div>


            </div>

        </div>



    </section>


@endsection
