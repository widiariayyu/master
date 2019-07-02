<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard Administrator</title>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/dropzone/css/basic.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/dropzone/css/dropzone.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/summernote/summernote.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/summernote/summernote-bs3.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/codemirror/lib/codemirror.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/vendor/codemirror/theme/monokai.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
            <header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="{{asset('assets/images/logodishub.png')}}" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
                </div>
                
                
				<!-- start: search & user box -->
				<div class="header-right">
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{asset('assets/images/!logged-user.jpg')}}" alt="user" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="$user" data-lock-email="#email">
								<span class="name">User1</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-database" aria-hidden="true"></i>
											<span>Master</span>
										</a>
										<ul class="nav nav-children">
											<li class="nav-active">
												<a href="{{ url('/') }}">
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    <span>Merk</span> 
												</a>
											</li>
											<li>
												<a href="{{ url('v_jeniskendaraan') }}">
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    <span>Jenis Kendaraan</span>     
												</a>
											</li>
											<li class = "nav-parent">
                                                <a href="#">
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    <span>Perusahaan</span>
                                                </a>
                                                <ul class="nav nav-children">
                                                    <li>
                                                        <a href="{{ url('v_angkutansewa') }}" >
                                                             <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                             Angkutan Sewa Khusus
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('v_taksi') }}" >
                                                             <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                             Taksi
                                                        </a>
                                                    </li>
                                                </ul>
											</li>
											<li>
                                                <a href="{{ url('v_wilayah') }}">
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    <span>Wilayah</span>
                                                </a>
											</li>
											<li>
                                                <a href="{{ url('v_warna') }}">
                                                    <i class="fa fa-circle-o" aria-hidden="true"></i>
                                                    <span>Warna</span>
                                                </a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a href="#">
		    								<i class="fa fa-cog" aria-hidden="true"></i>
											<span>Setting</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ url('v_kartupengawasan') }}">
													 Kartu Pengawasan
												</a>
											</li>
											<li>
											   <a href="{{ url('v_pasalmentri') }}">
													 Pasal Peraturan Mentri
												</a>
											</li>
										</ul>
									</li>
									
									
								</ul>
							</nav>

						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>DATA MASTER</h2>
					</header>

                   
                    @yield('content')
                
          
        <script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('assets/vendor/select2/select2.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')}}"></script>
		<script src="{{asset('assets/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
		<script src="{{asset('assets/vendor/fuelux/js/spinner.js')}}"></script>
		<script src="{{asset('assets/vendor/dropzone/dropzone.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-markdown/js/markdown.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-markdown/js/to-markdown.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>
		<script src="{{asset('assets/vendor/codemirror/lib/codemirror.js')}}"></script>
		<script src="{{asset('assets/vendor/codemirror/addon/selection/active-line.js')}}"></script>
		<script src="{{asset('assets/vendor/codemirror/addon/edit/matchbrackets.js')}}"></script>
		<script src="{{asset('assets/vendor/codemirror/mode/javascript/javascript.js')}}"></script>
		<script src="{{asset('assets/vendor/codemirror/mode/xml/xml.js')}}"></script>
		<script src="{{asset('assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js')}}"></script>
		<script src="{{asset('assets/vendor/codemirror/mode/css/css.js')}}"></script>
		<script src="{{asset('assets/vendor/summernote/summernote.js')}}"></script>
		<script src="{{asset('assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
		<script src="{{asset('assets/vendor/ios7-switch/ios7-switch.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('assets/javascripts/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('assets/javascripts/theme.custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('assets/javascripts/theme.init.js')}}"></script>


		<!-- Examples -->
		<script src="{{asset('assets/javascripts/forms/examples.advanced.form.js')}}"></script>
    </body> 