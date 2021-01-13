@extends('Frontend.Master.layout')

@section('content')

    <section class="bg-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 ">
                    <div class="box-area" >
                        <h4 class="text-center">Please Fillup in the Form</h4>
                        <form>
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" id="name"  placeholder="Enter Your First Name" required>
                            </div>


                            <div class="form-group">
                                <label for="last">Last Name</label>
                                <input type="text" class="form-control" id="last"  placeholder="Enter Your Last Name" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Country Name</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Choose Your Country Name</option>
                                    <option>Bangladesh</option>
                                    <option>Pakistan</option>
                                    <option>Srilanka</option>
                                    <option>Nepal</option>
                                    <option>Bhutan</option>
                                    <option>Other</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="number">Phone Number</label>
                                <input type="number" class="form-control" id="number"  placeholder="Enter number">
                            </div>


                            <div class="form-group">
                                <label for="city">City Name</label>
                                <select class="form-control" id="city">
                                    <option>Choose Your City Name </option>
                                    <option>Photo Editing</option>
                                    <option>Backgorund Remove</option>
                                    <option>Cliping Path</option>
                                    <option>Color Correction</option>
                                    <option>Cutout Image</option>
                                    <option>Resizing Image</option>
                                    <option>Colorize Photo</option>


                                </select>
                            </div>


                            <div class="form-group">
                                <label for="post">Zip Code</label>
                                <input type="text" class="form-control" id="post"  placeholder="Enter Your Zip Code">
                            </div>

                            <div class="form-group amount-p">
                                <label for="amount">Total Offer Amount</label>
                                <span class="offer-amount">$</span>
                                <input type="number" class="form-control" id="amount"  placeholder="20,000 max">
                            </div>

                            <div class="form-group">
                                <label for="delivery">Delivery Time</label>
                                <select class="form-control" id="delivery">
                                    <option value="1">Choose Your Delivery Time</option>
                                    <option value="0">Photo Editing</option>
                                    <option>Backgorund Remove</option>
                                    <option>Cliping Path</option>
                                    <option>Color Correction</option>
                                    <option>Cutout Image</option>
                                    <option>Resizing Image</option>
                                    <option>Colorize Photo</option>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="category">Category Name</label>
                                <select class="form-control" id="category">
                                    <option value="1">Choose Your Job Category </option>
                                    <option value="0">Photo Editing</option>
                                    <option>Backgorund Remove</option>
                                    <option>Cliping Path</option>
                                    <option>Color Correction</option>
                                    <option>Cutout Image</option>
                                    <option>Resizing Image</option>
                                    <option>Colorize Photo</option>


                                </select>
                            </div>

                            <div class="form-group">
                                <label for="file">Upload</label>
                                <input type="file" id="file"  placeholder="Enter Your File Upload">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Text Here" required></textarea>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-primary float-right">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
