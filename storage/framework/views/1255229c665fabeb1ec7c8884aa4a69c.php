<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo e(asset('img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">CionXness</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="<?php echo e(route('dashboard.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i> <!-- Dashboard Icon -->
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- User Management -->
                <li class="nav-item">
                    <a href="<?php echo e(route('user.index')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i> <!-- Users Icon -->
                        <p>User</p>
                    </a>
                </li>

                <!-- Withdraw Requests -->
                <li class="nav-item">
                    <a href="<?php echo e(route('all.withdraw.requests')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-money-bill-wave"></i> <!-- Money Icon -->
                        <p>Withdraw Requests</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('withdraw.approved')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-check-circle"></i> <!-- Approved Icon -->
                        <p>Withdraw Approved</p>
                    </a>
                </li>

                <!-- Deposit Requests -->
                <li class="nav-item">
                    <a href="<?php echo e(route('all.deposit.requests')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-piggy-bank"></i> <!-- Deposit Icon -->
                        <p>Deposit Requests</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('deposit.approved')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-thumbs-up"></i> 
                        <p>Deposit Approved</p>
                    </a>
                </li>

                <!-- Support -->
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.support')); ?>" class="nav-link">
                        <i class="nav-icon fas fa-headset"></i> 
                        <p>Support</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH E:\laravel\tradeSoftware\resources\views\admin\layouts\sidebar.blade.php ENDPATH**/ ?>