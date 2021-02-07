<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('public/design_backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/design_backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('public/design_backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('public/design_backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	<link rel="shortcut icon" href="{{URL::to('public/design_backend/img/favicon.ico')}}">
	
	
	<style type="text/css">
			body{background: url({{URL::to('public/design_backend/img/bg-login.jpg')}}) !important; }
		  </style>		
 </head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					
					<p class="alert-danger">
					<?php


					$messege=Session::get('messege');
					     if($messege)
							 {
								 echo $messege;
								 Session::put('messege',null);
							 }
					
					
						
					
					?>
					</p>
					<h2>Login to your account</h2>
					<form class="form-horizontal" action="{{url('/admin-dashboard')}}" method="post">
			
					@csrf
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email"  type="text" placeholder="type your mail" />
							</div>
						

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password" type="password" placeholder="type your password" />
							</div>
							
							
						

							<div class="button-login">	
								<button type="submit" name="submit" class="btn btn-primary">Login</button>
							</div>
						
					</form>
					
					
					
					
					
					
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div>
			</div>
      </div>	
</div>
	
	<!-- start: JavaScript-->

   	<script src="{{asset('public/design_backend/js/jquery-1.9.1.min.js')}}"></script>
	  <script src="{{asset('public/design_backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('public/design_backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
		<script src="{{asset('public/design_backend/js/modernizr.js')}}"></script>
		<script src="{{asset('public/design_backend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/design_backend/js/jquery.cookie.js')}}"></script>
		<script src="{{asset('public/design_backend/js/excanvas.js')}}"></script>
		<script src="{{asset('public/design_backend/js/jquery.uniform.min.js')}}"></script>
		<script src="{{asset('public/design_backend/js/custom.js')}}"></script>
	
	
</body>
</html>
