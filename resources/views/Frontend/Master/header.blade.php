<!DOCTYPE html>
<html lang="en">

<head>
    <title>Graphicsdesignpoint</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" href="{{asset('inc/Frontend')}}/css/style.css" />
</head>

<body>
<header class="bg-danger bg-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="{{route('home')}}"><img style="width: 110px;" src="{{url('inc/Frontend/')}}/img/skl.png" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">
                            Service
                        </a>
                        <ul class="dropdown-menu2">
                            <li class="nav-item">
                                <a class="dropdown-item" href="#">Photoshop Service<i
                                        class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-menu3">
                                    <li class="nav-item"><a class="dropdown-item" href="clipping-path.html">Image
                                            Clipping Path</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="image-retouching.html">Image
                                            Retouching</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="image-masking.html">Image
                                            masking</a></li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="image-manipulation.html">Image Manipulation</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="photo-resizing.html">Photo
                                            Resizing</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="color-correction.html">Color
                                            Correction</a></li>
                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="background-remove.html">Background Remove</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="#">Illustrator Service<i
                                        class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-menu4">
                                    <li class="nav-item"><a class="dropdown-item" href="logo-design.html">Logo
                                            Design</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="ads.html">Ads Design</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="business-card.html">Business
                                            Card Design</a>
                                    </li>

                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="Raster-to-vector.html">Raster to Vector</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="dropdown-item" href="#">Others</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('why-us')}}">Why Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('portfolio')}}">Protfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="free-trial.html">Free Trial </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="order.html">Order Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="s" type="search" placeholder="Search"
                           aria-label="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>
