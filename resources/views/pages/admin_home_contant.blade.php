<!DOCTYPE html>
<html lang="en">


	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Online Meeting</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('public/design_backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('public/design_backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('public/design_backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('public/design_backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	


		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a> -->
				<a class="brand" href="dashboard"><span>Online Meeting Scheduler</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
					
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> {{Session::get('admin_name')}}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<!-- <li><a href="#"><i class="halflings-icon user"></i>Profile</a></li> -->
								<li><a href="{{URL::to('/logout')}}"><i class="halflings-icon off"></i>Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet">Dashboard</span></a></li>

				
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Events</span><span class="label label-important">New</span></a>
							<ul>
								<li><a class="submenu" href="{{URL::to('/add-event')}}"><i class="icon-edit"></i><span class="hidden-tablet">Add Events</span></a></li>
								<li><a class="submenu" href="{{URL::to('/all-event')}}"><i class="icon-eye-open"></i><span class="hidden-tablet">All Events</span></a></li>
								
							</ul>	
						</li>
						<li><a href="{{URL::to('/add-user')}}"><i class="icon-edit"></i><span class="hidden-tablet">Add User</span></a></li>

						<li><a href="{{URL::to('/all-user')}}"><i class="icon-edit"></i><span class="hidden-tablet">User Profile</span></a></li>

					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			@yield('admin_content')
       

	       </div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2019 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Emon</a></span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('public/design_backend/js/jquery-1.9.1.min.js')}}"></script>
	    <script src="{{asset('public/design_backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/modernizr.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.cookie.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/fullcalendar.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('public/design_backend/js/excanvas.js')}}"></script>
	   <script src="{{asset('public/design_backend/js/jquery.flot.js')}}"></script>
	   <script src="{{asset('public/design_backend/js/jquery.flot.pie.js')}}"></script>
	   <script src="{{asset('public/design_backend/js/jquery.flot.stack.js')}}"></script>
	   <script src="{{asset('public/design_backend/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('public/design_backend/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/counter.js')}}"></script>
	
		<script src="{{asset('public/design_backend/js/retina.js')}}"></script>

		<script src="{{asset('public/design_backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>


</html>
