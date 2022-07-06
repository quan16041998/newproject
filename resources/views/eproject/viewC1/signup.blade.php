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

<div class="wrapper" style="background-image: url({{asset('images/bg-registration-form-1.jpg')}});">
    <div class="inner">
        <div class="image-holder">
            <img src="{{asset('images/registration-form-1.jpg')}}" alt="">
        </div>
        <form action="{{route('viewC1.storecus')}}}">
            <h3>Registration Form</h3>
            <div class="form-wrapper">
                <input type="text" placeholder="Name" class="form-control">
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>
            <div class="form-wrapper">
                <input type="date" placeholder="Date of birth" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="number" placeholder="Contact" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Address" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <div class="form-wrapper">
                <input type="password" placeholder="Confirm  Password" class="form-control">
                <i class="zmdi zmdi-lock"></i>
            </div>
            <button>Register
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>

</body>
</html>
