
<!DOCTYPE html>
<html lang="id">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>@yield('title','Admin Madu Al-Hafizh')</title>
	<!--favicon-->
	<link rel="icon" href="assets-admin/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets-admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets-admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets-admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets-admin/css/pace.min.css" rel="stylesheet" />
	<script src="assets-admin/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets-admin/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="assets-admin/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="assets-admin/css/app.css" />
	@yield('page_style')
	
</head>

<body class="bg-theme bg-theme1">
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Madu Al-Hafizh</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>

			<!--navigation-->
		@include('layout.admin.menu')
			<!--end navigation-->

		</div>
		<!--end sidebar-wrapper-->

		<!--header-->
		@include('layout.admin.header')
		<!--end header-->

		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
				@yield('content')

				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

		<!--footer -->
		@include('layout.admin.footer')
		<!-- end footer -->

	</div>
	<!-- end wrapper -->
	



	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets-admin/js/jquery.min.js"></script>
	<script src="assets-admin/js/popper.min.js"></script>
	<script src="assets-admin/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="assets-admin/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets-admin/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets-admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="assets-admin/js/app.js"></script>
    @yield('page_script')
</body>

</html>