<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Inc/Backend/dist/css/login.css')}}">
</head>
<body style="color: #aaa;">
<section >
    <div class="container">
        <div class="row">


            <div class="col-md-6 offset-md-3">
                <div class="bak-img" style="min-height: 625px;">
                    <div class="login-wrap" >
                        <div class="logo">
                            <a href="#">

                                <img src="{{asset('Inc/Frontend/')}}/img/skl.png" alt="" width="37%">
                            </a>

                        </div>
                        <h2 class="text-center mt-2 text-capitalize">Admin Login</h2>
                        @if (session('message'))
                            <div class="alert alert-{{session('type')}}" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form class="login" method="post" action="{{route('admin.login')}}">
                            @csrf

                            <div class="form-group">
                                <label for="email" >Email address</label>
                                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}"  aria-describedby="emailHelp" placeholder="Enter email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="password" >Password</label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"  name="password" value="{{old('password')}}"  placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="check" name="remember" {{ old('remember') ? 'checked' : '' }}  class="form-check-input" >
                                <label class="form-check-label" for="check">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-cus">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
