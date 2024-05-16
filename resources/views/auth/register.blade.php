<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('admin/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('admin/css/main.css')}}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{route('registration')}}" method="POST" class="login100-form validate-form">
					@csrf
                              <h1>Welcome </h1>
				
                              <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
 
                              

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit"  class="login100-form-btn">
								Register
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							<h5>Don’t have an account?</h5>
						</span>

						<a class="txt2" href="#">
						<h4>	Sign Up </h4>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="{{asset('admin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('admin/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('admin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('admin/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('admin/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('admin/js/main.js')}}"></script>

</body>
</html>