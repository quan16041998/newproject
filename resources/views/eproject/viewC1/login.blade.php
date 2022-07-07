<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v1 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
@include('partials.ErrorsAll')
@include('partials.sessionmessage')
@include('partials.allmessage')
<div class="wrapper" style="background-image: url({{asset('images/bg-registration-form-1.jpg')}});">
    <div class="inner">
        <div class="image-holder">
            <img src="{{asset('images/registration-form-1.jpg')}}" alt="">
        </div>
        <form action="{{route('viewC1.login')}}" method="post">
            @csrf
            <h3>Welcome</h3>
            <div class="form-wrapper">
                <input type="text" placeholder="Email" name="username" class="form-control" value="{{old('username')?? null}}">
                <i class="zmdi zmdi-account"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control" name="password">
                <i class="zmdi zmdi-lock"></i>
            </div>

            <button style="background-color: greenyellow" type="submit">
                <a class="btn btn-light"  >
                    LogIn<i class="zmdi zmdi-arrow-right"></i>
                </a>
            </button>
            <button style="background-color: greenyellow" >
                <a class="btn btn-light" href="{{route('viewC1.signupcus')}}" >
                    SignUp<i class="zmdi zmdi-arrow-right"></i>
                </a>
            </button>


        </form>
    </div>
</div>

</body>
</html>
