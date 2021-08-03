<!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Panel</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
		
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="{{URL::to('/dashboard')}}"><span>Admin Panel</span></a>
								
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
			
                                </li>

					</ul>
				</div>
				
				
			</div>
		</div>
	</div>
	
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{URL::to('admin_layout')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>

						<li><a href="{{URL::to('admin-view-students')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> All Students</span></a></li>

						<li><a href="{{URL::to('admin-view-attandances')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> View Attandence</span></a></li>
						<li><a href="{{URL::to('admin-add-attendance')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Add Attandence</span></a></li>


						<li><a href="{{URL::to('view_admin_leave')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> View leave</span></a></li>

						<li><a href="{{URL::to('admin_report')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Create Report</span></a></li>


						

					</ul>

				</div>
			</div>

		</div>
		
					<div id="content" class="span10">

						@yield('content')
						<br><br>
						
					</div>
		</div>



	<footer>

		<p>
			
			<span class="hidden-phone" style="text-align:right;float:right">Powered by: Muhammad Zubair Qureshi</span>
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('backend/js/modernizr.js')}}"></script>
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>
		<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('backend/js/excanvas.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>
		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>
		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>
		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>
		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('backend/js/counter.js')}}"></script>
		<script src="{{asset('backend/js/retina.js')}}"></script>
     	<script src="{{asset('backend/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>

</html>
