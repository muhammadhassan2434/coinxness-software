<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CionXness </title>
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/logo.png')); ?>">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo e(asset('plugins/dropzone/min/dropzone.min.css')); ?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


		<link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote.min.css')); ?>">

		<link rel="stylesheet" href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>">

		<link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

		<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Right navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
					  	<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa-solid fa-bars"></i></a>
					</li>					
				</ul>
				<div class="navbar-nav pl-2">
					<!-- <ol class="breadcrumb p-0 m-0 bg-white">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol> -->
				</div>
				
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
							<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<!-- Dropdown Toggle Button -->
						<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img src="<?php echo e(asset('img/avatar5.png')); ?>" class="img-circle elevation-2" width="40" height="40" alt="User Avatar">
						</a>
					
						<!-- Dropdown Menu -->
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
							<!-- User's Name -->
							<h6 class="dropdown-header"><?php echo e(Auth::user()->name); ?></h6>
							<!-- User's Email -->
							<div class="dropdown-item disabled"><?php echo e(Auth::user()->email); ?></div>
					
							<div class="dropdown-divider"></div>
							
					
							<div class="dropdown-divider"></div>
							<a href="<?php echo e(route('admin.logout')); ?>" class="dropdown-item text-danger">
								<i class="fas fa-sign-out-alt mr-2"></i> Logout
							</a>
						</div>
					</li>
					
					
				</ul>
			</nav>
			<!-- /.navbar -->
			<?php echo $__env->make('admin.layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<?php echo $__env->yieldContent('content'); ?>
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				
				<strong>Copyright &copy;
			</footer>
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
		<!-- Bootstrap 4 -->
		<script src="<?php echo e(asset("plugins/dropzone/min/dropzone.min.js")); ?>"></script>
		<script src="<?php echo e(asset("plugins/summernote/summernote.min.js")); ?>"></script>
		<script src="<?php echo e(asset("plugins/select2/js/select2.min.js")); ?>"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

		<!-- AdminLTE App --><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


		<script src="<?php echo e(asset('js/adminlte.min.js')); ?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?php echo e(asset("js/demo.js")); ?>"></script>
		
		<script type="text/javascript">
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			// $(document).ready(function(){
			// 	$(".summernote").summernote({
			// 		height:256
			// 	})
			// });
	</script>
        <?php echo $__env->yieldContent('customjs'); ?>
	</body>
</html><?php /**PATH E:\laravel\tradeSoftware\resources\views/admin/layouts/app.blade.php ENDPATH**/ ?>