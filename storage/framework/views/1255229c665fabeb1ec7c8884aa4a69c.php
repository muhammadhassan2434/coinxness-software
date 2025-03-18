<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo e(asset('img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">CionXness </span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="<?php echo e(route('dashboard.index')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">

                        <a href="<?php echo e(route('user.index')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>User</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route('all.withdraw.requests')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Withdraws Requests</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('withdraw.approved')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Withdraws Approved</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('all.deposit.requests')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Deposit Requests</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('deposit.approved')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Deposit Approved</p>
                        </a>
                    </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH E:\laravel\tradeSoftware\resources\views\admin\layouts\sidebar.blade.php ENDPATH**/ ?>