@extends('Frontend.Master.layout')

@section('content')

    <section class="port-padd">
        <div class="all-portfolio">


            <div class="portfolio-image">
                <h2 class="text-center">Clipping Path</h2>
                @php
                    use App\Models\Protfolliow;$protfollios = Protfolliow::get();
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
                    use App\Models\ImageRetouching;$images = ImageRetouching::where('status',1)->get();
                @endphp

                    <div class="port-slider ">
                        @foreach($images as $image)


                        <a href="{{$image->img1}}" data-fancybox="gallery">
                            <img src="{{$image->img1}}" alt="" />

                        </a>

                            <a href="{{$image->img2}}" data-fancybox="gallery">
                            <img src="{{$image->img2}}" alt="" />

                        </a>

                            <a href="{{$image->img3}}" data-fancybox="gallery">
                            <img src="{{$image->img3}}" alt="" />

                        </a>

                            <a href="{{$image->img4}}" data-fancybox="gallery">
                            <img src="{{$image->img4}}" alt="" />
                        </a>


                        @endforeach
                    </div>


            </div>
            <div class="portfolio-image">
                <h2 class="text-center">Background Remove</h2>
                @php
                    use App\Models\BackgroundRemove;$backgrounds = BackgroundRemove::get();
                @endphp

                    <div class="port-slider ">
                        @foreach($backgrounds as $background)


                        <a href="{{$background->img1}}" data-fancybox="gallery">
                            <img src="{{$background->img1}}" alt="" />

                        </a>

                            <a href="{{$background->img2}}" data-fancybox="gallery">
                            <img src="{{$background->img2}}" alt="" />

                        </a>

                            <a href="{{$background->img3}}" data-fancybox="gallery">
                            <img src="{{$background->img3}}" alt="" />

                        </a>

                            <a href="{{$background->img4}}" data-fancybox="gallery">
                            <img src="{{$background->img4}}" alt="" />
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


                        <a href="{{$photo->img1}}" data-fancybox="gallery">
                            <img src="{{$photo->img1}}" alt="" />

                        </a>

                            <a href="{{$photo->img2}}" data-fancybox="gallery">
                            <img src="{{$photo->img2}}" alt="" />

                        </a>

                            <a href="{{$photo->img3}}" data-fancybox="gallery">
                            <img src="{{$photo->img3}}" alt="" />

                        </a>

                            <a href="{{$photo->img4}}" data-fancybox="gallery">
                            <img src="{{$photo->img4}}" alt="" />
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


                        <a href="{{$color->img1}}" data-fancybox="gallery">
                            <img src="{{$color->img1}}" alt="" />

                        </a>

                            <a href="{{$color->img2}}" data-fancybox="gallery">
                            <img src="{{$color->img2}}" alt="" />

                        </a>

                            <a href="{{$color->img3}}" data-fancybox="gallery">
                            <img src="{{$color->img3}}" alt="" />

                        </a>

                            <a href="{{$color->img4}}" data-fancybox="gallery">
                            <img src="{{$color->img4}}" alt="" />
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


                        <a href="{{$logo->img1}}" data-fancybox="gallery">
                            <img src="{{$logo->img1}}" alt="" />

                        </a>

                            <a href="{{$logo->img2}}" data-fancybox="gallery">
                            <img src="{{$logo->img2}}" alt="" />

                        </a>

                            <a href="{{$logo->img3}}" data-fancybox="gallery">
                            <img src="{{$logo->img3}}" alt="" />

                        </a>

                            <a href="{{$logo->img4}}" data-fancybox="gallery">
                            <img src="{{$logo->img4}}" alt="" />
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


                        <a href="{{$raster->img1}}" data-fancybox="gallery">
                            <img src="{{$raster->img1}}" alt="" />

                        </a>

                            <a href="{{$raster->img2}}" data-fancybox="gallery">
                            <img src="{{$raster->img2}}" alt="" />

                        </a>

                            <a href="{{$raster->img3}}" data-fancybox="gallery">
                            <img src="{{$raster->img3}}" alt="" />

                        </a>

                            <a href="{{$raster->img4}}" data-fancybox="gallery">
                            <img src="{{$raster->img4}}" alt="" />
                        </a>


                        @endforeach
                    </div>


            </div>

        </div>



    </section>


@endsection
