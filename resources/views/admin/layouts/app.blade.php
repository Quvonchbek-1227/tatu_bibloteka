<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link rel="stylesheet" href="/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
	<link rel="stylesheet" href="/admin/css/skin.css">
    <link href="/admin/vendor/summernote/summernote.css" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        @include('admin.include.nav-header')
        
        @include('admin.include.header')
        
        @include('admin.include.sidebar')

        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                @yield('content')

            </div>
        </div>
    
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/admin/vendor/global/global.min.js"></script>
	<script src="/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="/admin/js/custom.min.js"></script>
		
    <!-- Chart Morris plugin files -->
    <script src="/admin/vendor/raphael/raphael.min.js"></script>
    <script src="/admin/vendor/morris/morris.min.js"></script>
		
	
	<!-- Chart piety plugin files -->
    <script src="/admin/vendor/peity/jquery.peity.min.js"></script>
	
		<!-- Demo scripts -->
    <script src="/admin/js/dashboard/dashboard-2.js"></script>
	
	<!-- Svganimation scripts -->
    <script src="/admin/vendor/svganimation/vivus.min.js"></script>
    <script src="/admin/vendor/svganimation/svg.animation.js"></script>
    <script src="/admin/js/styleSwitcher.js"></script>

    <!-- Summernote -->
    <script src="/admin/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="/admin/js/plugins-init/summernote-init.js"></script>

		
	
</body>
</html>   