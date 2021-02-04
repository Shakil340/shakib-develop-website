<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('Inc/Frontend/css')}}/style.css" />
</head>

<body class="all-body">
<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-logo">
                    <a href="index.html">
                        <img src="img/skl.png" alt="">
                    </a>

                </div>
                <div class="login-snip">

                    <!-- fonget page  -->
                    <input id="tab-3" type="radio" name="tab" class="forget" />
                    <label for="tab-3" class="tab skl d-none">Forget</label>

                    <!-- login page  -->
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked />
                    <label for="tab-1" class="tab tabs">Login</label>



                    <!-- sing up page  -->
                    <input id="tab-2" type="radio" name="tab" class="sign-up" />
                    <label for="tab-2" class="tab tabs">Sign Up</label>




                    <div class="login-space">
                        <form class="login" method="post" action="{{route('login')}}">
                            @csrf
                            <div class="group"><label for="email" class="label">Email</label>
                                <input id="email" name="email" value="{{old('email')}}" type="email" class="input" placeholder="Enter your Email" />
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Password</label>
                    <input id="pass" name="password" value="{{old('password')}}" type="password" class="input"  placeholder="Enter your password" />
                            </div>
                            <div class="group">
                                <input id="check" name="remember" {{ old('remember') ? 'checked' : '' }}  type="checkbox" class="check" />
                                <label for="check">
                                    <span class="icon"></span> Keep me Signed in</label>
                            </div>
                            <div class="group"><input type="submit" class="button" value="Sign In" /></div>
                            <div class="hr"></div>
                            <div class="foot"><label for="tab-2">Don't Have an Account?</label></div>
                            <div class="foot"><label for="tab-3" class="forgot">Forgot Password?</label></div>
                        </form>



                        <form method="post" action="{{route('register')}}" class="sign-up-form">
                            @csrf

                            <div class="group"><label for="user" class="label">Username</label>
                                <input id="user" type="text" name="name" value="{{old('name')}}" class="input" placeholder="Create your Username" />
                            </div>
                            <div class="group"><label for="pass" class="label">Email Address</label>
                                <input id="pass" type="email" name="email" value="{{old('email')}}" class="input" placeholder="Enter your email address" />
                            </div>
                            <div class="group"><label for="pass" class="label">Password</label>
                                <input id="pass" type="password" name="password" value="{{old('password')}}" class="input" data-type="password" placeholder="Create your password" />
                            </div>
                            <div class="group">
                                <label for="pass" class="label">Repeat Password</label>
                                <input id="pass" name="password_confirmation"  value="{{old('password_confirmation')}}" type="password" class="input" data-type="password"
                                    placeholder="Repeat your password" />
                            </div>

                            <div class="group"><input type="submit" class="button" value="Sign Up" /></div>
                            <div class="hr hr-custom"></div>
                            <div class="foot"><label for="tab-1">Already Member?</label></div>
                        </form>

                        <div class="forget-page">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                            <div class="group">
                                <label for="skl" class="label">Email</label>
                                <input id="skl" type="email" name="email" value="{{ old('email') }}" class="input" placeholder="Enter Your Email" />
                            </div>
                            <div class="group">

                                @if (Route::has('password.request'))

                                    <button type="submit" class="btn btn-primary w-100" style="font-size: 15px;">
                                        {{ __('Send Password Reset Link') }}
                                    </button>



                                @endif



                            </div>
                            </form>
                            <div class="hr "></div>
                            <div class="foot"><label for="tab-2" class="tabs">Don't Have an Account?</label></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.js"
        integrity="sha512-14GPUgKFTeCsgj5WWZpTNQ525GYlOK3DMTqrjsly3TDIDnOUbZ5sWyfI6HqsWUmMmaCoa6q7FHrbq9xdqNhmYg=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>


<script>
    $(document).ready(function () {
        $('.forget-page').hide();
        $('.forgot').click(function () {

            $('.forget-page').show();

        });
        $('.tabs').click(function () {

            $('.forget-page').hide();

        });


    });
</script>
</body>

</html>
