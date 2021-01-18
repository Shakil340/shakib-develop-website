@extends('Frontend.Master.layout')

@section('content')

    <section class="contact-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center pdd">Please Fil Out The Form and You Will be contacted Within 6 hour</h3>
                </div>
                <div class="col-md-6 ">
                    <div class="box-area">

                        <form action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="left-side">
                                <div class="form-group">
                                    <label for="name">Your Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Enter email" required>
                                </div>

                                @php

                                use App\Models\Subject; $subjects = Subject::where('status',1)->get();

                                @endphp

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Subject<span class="text-danger">*</span></label>


                                    <select name="subject_id" class="form-control" id="exampleFormControlSelect1" required>
                                        <option>Choose One:</option>
                                        @foreach($subjects as $subject)

                                        <option value="{{$subject->id}}">{{$subject->name}}</option>

                                        @endforeach
                                    </select>


                                </div>


                            </div>

                            <div class="right-side">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Message<span class="text-danger">*</span></label>
                                    <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                              placeholder="Enter Text Here" required></textarea>
                                </div>

                                <div class="custom-form">
                                    <input type="checkbox" class="custom-check" id="contact-checkbox" required>
                                    <label class="custom-label" for="contact-checkbox">Check me out</label>
                                </div>
                                <div class="margin-tp">

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-primary float-right">Reset</button>

                                </div>

                            </div>

                            <div class="clear-both"></div>

                        </form>


                    </div>

                    @if(session()->has('message'))
                        <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                            <strong class="d-block text-center">{{session('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                </div>

                <div class="col-md-6">
                    <div class="house-padd">
                        <h4>Bangladesh Office:</h4>
                        <p>House: 71/01, Kaligonj,Jhenaidah Dhaka,Bangladesh</p>
                        <h4>Email:</h4>
                        <a href="#">bdgraphicdesignpoint@gmail.com</a>
                        <p>Support 24/7</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.475053880722!2d89.13596421451655!3d23.407200584759554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fee1b68d95bc6f%3A0x3e737332b7123dc1!2sGovt.%20Naldanga%20Bhushan%20Secondary%20School!5e0!3m2!1sen!2sbd!4v1609858846397!5m2!1sen!2sbd"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </section>

@endsection
