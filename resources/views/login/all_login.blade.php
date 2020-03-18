<!DOCTYPE html>
<html>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Feb 2019 02:32:22 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Login</title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="{{asset('public/assets/admin/')}}/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/assets/admin/')}}/assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="{{asset('public/assets/admin/')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="{{asset('public/assets/admin/')}}/assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('public/logo.png')}}" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">

        <div style="color: red">
            <h3>
            <?php
            $exceotion = Session::get('exception');

            if($exceotion)
            {
                echo $exceotion;
                Session::put('exception','');
            }

              ?>
              </h3>
            
        </div>
        <div style="color: lime">
            <h3>
            <?php
            $message = Session::get('message');

            if($message)
            {
                echo $message;
                Session::put('message','');
            }

              ?>
              </h3>
            
        </div>
				
					  {!! Form::open(['url' => '/login-check','class' => 'login100-form validate-form']) !!}
					<span class="login100-form-logo">
						<img alt="" src="{{asset('public/logo.png')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="id" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div>
				 {!! Form::close() !!}
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="{{asset('public/assets/admin/')}}/assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="{{asset('public/assets/admin/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('public/assets/admin/')}}/assets/js/pages/extra-pages/pages.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Feb 2019 02:32:30 GMT -->
</html>