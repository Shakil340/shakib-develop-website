<!DOCTYPE html>
<html lang="en">

<head>
    <title>Graphics Design Point</title>
    <link rel="shortcut icon" type="image/jpg" href="{{asset('Inc/Frontend/img/skl.png')}}" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{asset('Inc/Frontend')}}/css/intlTelInput.css">
    <link rel="stylesheet" href="{{asset('Inc/Frontend')}}/css/demo.css">

    <link rel="stylesheet" href="{{asset('Inc/Frontend')}}/css/style.css" />
    <link rel="stylesheet" href="{{asset('Inc/Frontend')}}/css/responsive.css" />
</head>

<body style="margin: 0px">
    <header class="bg-danger bg-header header">
        <div class="container res-nav-sm" style="max-width: 1300px !important;">
            <nav class="navbar navbar-expand-md ">
                <a class="navbar-brand" href="{{route('home')}}"><img style="width: 110px;"
                        src="{{asset('Inc/Frontend/')}}/img/skl.png" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars    "></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active padd">
                            <a class="nav-link  {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{route('home')}}">Home </a>
                        </li>

                        <li class="nav-item dropdown padd">
                            <a class="nav-link  {{ request()->routeIs('service*') ? 'active' : ''}} dropdown-toggle" data-toggle="collapse"
                                href="#multiCollapseExample1" role="button" aria-expanded="false"
                                aria-controls="multiCollapseExample1">
                                Services
                            </a>
                            <ul class="dropdown-menu2 collapse multi-collapse" id="multiCollapseExample1">
                                <li class="nav-item skk">
                                    <a class="dropdown-item {{ request()->routeIs('service.photoshop*') ? 'active' : ''}}"
                                        data-toggle="collapse" href="#multiCollapseExample2" role="button"
                                        aria-expanded="false" aria-controls="multiCollapseExample2">Photoshop Services
                                        <i class="fas fa-caret-down sks"></i></a>
                                    <ul class="dropdown-menu3 collapse multi-collapse" id="multiCollapseExample2">
                                        <li class="nav-item"><a
                                                class="dropdown-item {{ request()->routeIs('service.photoshop.clipping-path') ? 'active' : ''}}"
                                                href="{{route('service.photoshop.clipping-path')}}">Image
                                                Clipping Path</a></li>


                                        <li class="nav-item"><a
                                                class="dropdown-item {{ request()->routeIs('service.photoshop.image-retouching') ? 'active' : ''}}"
                                                href="{{route('service.photoshop.image-retouching')}}">Image
                                                Retouching</a></li>


                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.photoshop.image-masking') ? 'active' : ''}}"
                                                href="{{route('service.photoshop.image-masking')}}">Image
                                                masking</a></li>


                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.photoshop.image-manipulation') ? 'active' : ''}}"
                                                href="{{route('service.photoshop.image-manipulation')}}">Image Manipulation</a>
                                        </li>


                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.photoshop.photo-resizing') ? 'active' : ''}}"
                                                href="{{route('service.photoshop.photo-resizing')}}">Photo
                                                Resizing</a></li>


                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.photoshop.color-correction') ? 'active' : ''}}"
                                                href="{{route('service.photoshop.color-correction')}}">Color
                                                Correction</a></li>


                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.photoshop.background-remove') ? 'active' : ''}}"
                                                href="{{route('service.photoshop.background-remove')}}">Background Remove</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item skkk">
                                    <a class="dropdown-item {{ request()->routeIs('service.illustrator*') ? 'active' : ''}}" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">Illustrator Services<i
                                            class="fas fa-caret-down skss"></i></a>

                                    <ul class="dropdown-menu4 collapse multi-collapse" id="multiCollapseExample3">
                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.illustrator.logo-design') ? 'active' : ''}}"
                                                href="{{route('service.illustrator.logo-design')}}">Logo
                                                Design</a></li>


                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.illustrator.ads-design') ? 'active' : ''}}"
                                                href="{{route('service.illustrator.ads-design')}}">Ads Design</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.illustrator.business-card-design') ? 'active' : '' }}"
                                                href="{{route('service.illustrator.business-card-design')}}">Business
                                                Card Design</a>
                                        </li>

                                        <li class="nav-item"><a class="dropdown-item {{ request()->routeIs('service.illustrator.raster-to-vector') ? 'active' : '' }}"
                                                href="{{route('service.illustrator.raster-to-vector')}}">Raster to Vector</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">Others</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item padd">
                            <a class="nav-link  {{ request()->routeIs('why-us') ? 'active' : '' }}"
                                href="{{route('why-us')}}">Why Us</a>
                        </li>

                        <li class="nav-item padd">
                            <a class="nav-link  {{ request()->routeIs('portfolio') ? 'active' : '' }}"
                                href="{{route('portfolio')}}">Protfolio</a>
                        </li>

                        <li class="nav-item padd">
                            <a class="nav-link  {{ request()->routeIs('free-trial') ? 'active' : '' }}"
                                href="{{route('free-trial')}}">Free Trial </a>
                        </li>

                        <li class="nav-item padd">
                            <a class="nav-link  {{ request()->routeIs('order-now') ? 'active' : '' }}"
                                href="{{route('order-now')}}">Order Now</a>
                        </li>

                        <li class="nav-item padd">
                            <a class="nav-link  {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                                href="{{route('contact-us')}}">Contact Us</a>
                        </li>
                        <li class="nav-item padd">
                            <a class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}"
                                href="{{route('about-us')}}">About</a>
                        </li>
                        @guest
                        <li class="nav-item padd res-nav" style="margin-left: 250px; ">
                            <a class="nav-link  {{ request()->routeIs('about-us') ? 'active' : '' }}"
                                style="background: #428bca; " href="{{route('login')}}">Login/Register</a>
                        </li>

                        @else
                        <li class="nav-item padd res-nav2" style="margin-left: 190px ">
                            <a class="nav-link  {{ request()->routeIs('about-us') ? 'active' : '' }}"
                                style="background: #428bca; " href="{{route('order-now')}}">Dashboard</a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li class="nav-item padd res-nav2" style="margin-left: 16px; ">
                                <a class="nav-link  {{ request()->routeIs('about-us') ? 'active' : '' }}"
                                    style="background: #428bca; " href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                        </form>
                        @endguest

                    </ul>
                    {{-- <form class="form-inline  p-relative">
                    <input class="form-control"  type="search" placeholder="Search"
                            />
                    <button class="btn bsk" type="submit"><i class="fas fa-search"></i></button>
                </form> --}}
                </div>
            </nav>
        </div>
    </header>
    <section class="res-sm" style="margin-top: 57px">

    </section>
