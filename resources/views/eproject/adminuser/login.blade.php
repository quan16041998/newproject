<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/animate/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/css-hamburgers/hamburgers.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/select2/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
  <title>Document</title>
</head>

<body>
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="{{asset('images/img-01.png')}}" alt="IMG">
      </div>
      <form class="login100-form validate-form" action="{{route('admin.signin')}}" method="post">
					<span class="login100-form-title">
            <h1>Admin Login</h1>
					</span>
        @include('partials.sessionmessage')
        @include('partials.ErrorsAll')
        @csrf
        <div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
          <input type="text" id="username" class="input100" name="username"  value="{{old('username')?? null}}"
                 placeholder="Username">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
        </div>

        <div class="wrap-input100 validate-input">
          <input type="password" id="password" class="input100" name="password" value="{{old('password')?? null}}"
                 placeholder="Password">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Login
          </button>
        </div>

        <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
          <a class="txt2" href="#">
            Username / Password?
          </a>
        </div>

        <div class="text-center p-t-136">
          <a class="txt2" href="#">
            Create your Account
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>



<script src="{{asset('css/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('css/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('css/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('css/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script >
  $('.js-tilt').tilt({
    scale: 1.1
  })
</script>
<script src="js/main.js"></script>

</body>
</html>
