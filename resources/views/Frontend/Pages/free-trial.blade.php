@extends('Frontend.Master.layout')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center pd">Send 2 Free Trial Images</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="free-bg">
        <div class="container">
            <div class="from-br">
                <div class="row">
                    <div class="col-md-12">
                        <div class="spaces">
                            <h2 class="text-center"> Upload Your Image Frist to Submit Form</h2>
                            <h5 class="text-center">Select File(max 4GB) to Upload</h5>
                        </div>

                    </div>

                    <div class="col-md-12 ">
                        @if(session()->has('message'))
                            <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                                <strong>{{session('message')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <form method="post" action="{{route('free-trial.store')}}"  class="free-bg-drag" enctype="multipart/form-data">
                            @csrf

                            <div class="drag-50 w-50">
                                <div class="form-group files color">
                                    <span class="drag-icon"><i class="fas fa-cloud-upload-alt"></i></span>
                                    <h4>Drag & Drop Files Here</h4>
                                    <input type="file" name="thumbnail" class="form-control drag-opacity" multiple>
                                </div>

                            </div>

                            <div class="image-trial w-50">


                                <div class="form-group p-relative">
                                    <span class="free-name"> <i class="fas fa-user"></i></span>

                                    <input type="text" name="name" class="form-control name" aria-describedby="emailHelp"
                                           placeholder="Enter Your Name" required>

                                </div>

                                <div class="form-group p-relative">
                                    <span class="free-email"> <i class="fas fa-envelope"></i></span>

                                    <input type="email" name="email" class="form-control name" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Enter email" required>
                                </div>

                                <div class="form-group p-relative">
                                    <span class="free-email"> <i class="fas fa-globe-americas"></i></span>

                                    <input type="text" name="location" class="form-control name"
                                           aria-describedby="emailHelp" placeholder="Enter Your Country Name" required>
                                </div>


                                <div class="form-group">

                                    <input id="phone" name="number" type="tel">

                                </div>


                                <div class="form-group p-relative">
                                    <span class="free-email"><i class="fas fa-check"></i></span>
                                    <select name="category_id" class="form-control name" id="skb">
                                        <option>Select Category</option>

                                        @php
                                        use App\Models\Category;$categories = Category::where('status',1)->get();
                                        @endphp
                                        @foreach($categories as $category)

                                        <option value="{{$category->id}}">{{$category->name}}</option>

                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group p-relative">
                                    <span class="t-area"><i class="fas fa-pen"></i></span>
                                    <textarea name="message" class="form-control name" id="exampleFormControlTextarea1" rows="3"
                                              placeholder="Enter Text Here" required></textarea>
                                </div>





                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-primary float-right">Reset</button>
                            </div>

                        </form>

                    </div>



                </div>


            </div>

        </div>

    </section>
    <section class="free-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="we-work">
                        <h3>We Work at the lowest prices.we have a good reputation for the quality of our work.</h3>
                        <h6 class="text-center " style="font-size: 20px; margin-bottom: 50px;">our minimum work price
                            starts from $.25.</h6>
                        <p>If you need the following image retouching & clipping path services, please contact us.
                            We provide:-
                        </p>
                        <ul class="free-left">
                            <li>Hand-made Image clipping path (100% quality background remove from the Object)</li>
                            <li>Image Retouching & Image masking</li>
                            <li>Image enhancement</li>
                            <li>Image manipulation</li>
                            <li>Photo Restoration</li>
                            <li>Color Correction</li>
                            <li>Photo Resizeing</li>
                            <li>Raster To Vector</li>
                            <li>logo design</li>
                            <li>Ads design</li>
                            <li>Business Card Design</li>
                            <li>Social Media Banner Design</li>
                            <li>Shadow Adding</li>
                            <li>Background Remove</li>
                            <li>And (ETC) </li>

                        </ul>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
