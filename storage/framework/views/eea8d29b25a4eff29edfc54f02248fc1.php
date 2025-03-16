<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Coinxness </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/logo.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user/assets/vendor/jqvmap/css/jqvmap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('user/assets/vendor/chartist/css/chartist.min.css')); ?>">
	<!-- Summernote -->
    <link href="<?php echo e(asset('user/assets/vendor/summernote/summernote.css')); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(asset('user/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('user/assets/css/skin-3.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   

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

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?php echo e(route('user.account')); ?>" class="brand-logo">
                <h1>Coinxness</h1>
                
                
                
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php echo $__env->make('user.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php echo $__env->make('user.layout.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <?php echo $__env->yieldContent('content'); ?>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by Hs developers 2025</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
<script src="<?php echo e(asset('user/assets/vendor/global/global.min.js')); ?>"></script>
	<script src="<?php echo e(asset('user/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('user/assets/js/custom.min.js')); ?>"></script>
	<script src="<?php echo e(asset('user/assets/js/dlabnav-init.js')); ?>"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="<?php echo e(asset('user/assets/vendor/chart.js/Chart.bundle.min.js')); ?>"></script>
	
	<!-- Chart piety plugin files -->
    <script src="<?php echo e(asset('user/assets/vendor/peity/jquery.peity.min.js')); ?>"></script>
	
	<!-- Chart sparkline plugin files -->
    <script src="<?php echo e(asset('user/assets/vendor/jquery-sparkline/jquery.sparkline.min.js')); ?>"></script>
	
		<!-- Demo scripts -->
    <script src="<?php echo e(asset('user/assets/js/dashboard/dashboard-3.js')); ?>"></script>
	
	<!-- Svganimation scripts -->
    <script src="<?php echo e(asset('user/assets/vendor/svganimation/vivus.min.js')); ?>"></script>
    <script src="<?php echo e(asset('user/assets/vendor/svganimation/svg.animation.js')); ?>"></script>
    <script src="<?php echo e(asset('user/assets/js/styleSwitcher.js')); ?>"></script>
	
  

</body>
</html><?php /**PATH E:\laravel\tradeSoftware\resources\views\user\layout\layout.blade.php ENDPATH**/ ?>