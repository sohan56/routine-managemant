
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Feb 2019 02:32:47 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Admin Dashboard </title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="{{asset('public/assets/admin')}}/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/admin')}}/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/admin')}}/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="{{asset('public/assets/admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="{{asset('public/assets/admin')}}/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="{{asset('public/assets/admin')}}/assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="{{asset('public/assets/admin')}}/assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="{{asset('public/assets/admin')}}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/admin')}}/assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/admin')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="{{asset('public/assets/admin')}}/assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="{{asset('public/logo.png')}}" />



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

	

	 <script type="text/javascript">
    function checkDelete()
    {

      chk = confirm ("Are You sure to Delete This??");
      if(chk)
      {
        return true;

      }else{
        return false;
      }
    }
     
   </script>
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="{{URL::to('/deshboard')}}">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">AUB</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						
						
						
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="{{asset(session('admin_img'))}}" />
								<span class="username username-hide-on-mobile"> <?php echo Session::get('admin_name');?> </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								
								
								
								
								<li>
									<a href="{{URL::to('/logout')}}">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
						<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->
		<div class="quick-setting-main">
			<button class="control-sidebar-btn btn" data-toggle="control-sidebar"><i
					class="fa fa-cog fa-spin"></i></button>
			<div class="quick-setting display-none">
				<ul id="themecolors">
					<li>
						<p class="selector-title">Main Layouts</p>
					</li>
					<li class="complete">
						<div class="theme-color layout-theme">
							<a href="#" data-theme="light"><span class="head"></span><span class="cont"></span></a>
							<a href="http://radixtouch.in/templates/admin/smart/source/dark/dashboard3.html" data-theme="dark"><span class="head"></span><span
									class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Sidebar Color</p>
					</li>
					<li class="complete">
						<div class="theme-color sidebar-theme">
							<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header Brand color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color logo-theme">
							<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-indigo"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
							<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
					<li>
						<p class="selector-title">Header color</p>
					</li>
					<li class="theme-option">
						<div class="theme-color header-theme">
							<a href="#" data-theme="header-white"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-dark"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-blue"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-indigo"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-cyan"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-green"><span class="head"></span><span
									class="cont"></span></a>
							<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="{{asset(session('admin_img'))}}" class="img-circle user-img-circle"
											alt="User Image" />
									</div>
									<div class="pull-left info">
										<p><?php echo Session::get('admin_name');?></p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item start active open">
								<a href="{{URL::to('/deshboard')}}" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								
							</li>
							 @if(Session::get('access_label')==0)
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Admin</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-admin')}}" class="nav-link "> <span class="title">Add
												Admin</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{URL::to('/manage-admin')}}" class="nav-link "> <span
												class="title">Manage Admin</span>
										</a>
									</li>
									
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Departments</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-department')}}"class="nav-link "> <span class="title">Add
												Department</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-department')}}" class="nav-link "> <span class="title">Manage
												Department</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Semester</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-semester')}}"class="nav-link "> <span class="title">Add semester</span>
												
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-semester')}}" class="nav-link "> <span class="title">Manage semester</span>
												
										</a>
									</li>
								</ul>
							</li>
							
							
							
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Section</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-section')}}"class="nav-link "> <span class="title">Add
												section</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-section')}}" class="nav-link "> <span class="title">Manage
												section</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Day</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-day')}}"class="nav-link "> <span class="title">Add day</span>
												
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-day')}}" class="nav-link "> <span class="title">Manage day</span>
												
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Time</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-time')}}"class="nav-link "> <span class="title">Add time</span>
												
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-time')}}" class="nav-link "> <span class="title">Manage time</span>
												
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Room</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-room')}}"class="nav-link "> <span class="title">Add
												room</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-room')}}" class="nav-link "> <span class="title">Manage
												room</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Teacher</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-teacher')}}" class="nav-link "> <span class="title">Add Teacher</span>
												
										</a>
									</li>
									<li class="nav-item">
										<a href="{{URL::to('/manage-teacher')}}" class="nav-link "> <span
												class="title">Manage Teacher</span>
										</a>
									</li>
									
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-student')}}" class="nav-link "> <span class="title">Add
												Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="{{URL::to('/manage-student')}}" class="nav-link "> <span class="title">Manage All Students</span>
										</a>
									</li>
									
									
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Courses</span> <span class="arrow"></span>
									
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-course')}}" class="nav-link "> <span class="title">Add Course</span>
												
										</a>
									
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-course')}}" class="nav-link "> <span class="title">manage Course</span>
												
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Slider</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/add-slider')}}"class="nav-link "> <span class="title">Add
												Slider</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-slider')}}" class="nav-link "> <span class="title">Manage
												Slider</span>
										</a>
									</li>
								</ul>
							</li>
							 @endif
							
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Routine</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="{{URL::to('/make-routine')}}"class="nav-link "> <span class="title">Make
												routine</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="{{URL::to('/manage-routine')}}" class="nav-link "> <span class="title">Manage
												routine</span>
										</a>
									</li>
								</ul>
							</li>
							
							
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			 @yield('content')
			<!-- end page content -->
			
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2020 &copy;Develop by 2(SR)
				
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="{{asset('public/assets/admin')}}/assets/plugins/jquery/jquery.min.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/plugins/popper/popper.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="{{asset('public/assets/admin')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<!-- Common js-->
	<script src="{{asset('public/assets/admin')}}/assets/js/app.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/js/layout.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="{{asset('public/assets/admin')}}/assets/plugins/material/material.min.js"></script>
	<!-- chart js -->
	<script src="{{asset('public/assets/admin')}}/assets/plugins/chart-js/Chart.bundle.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/plugins/chart-js/utils.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/js/pages/chart/chartjs/home-data3.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="{{asset('public/assets/admin')}}/assets/js/pages/sparkline/sparkline-data.js"></script>
	<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/dashboard3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Feb 2019 02:32:48 GMT -->
</html>