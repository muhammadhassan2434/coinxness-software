<!-- Main Sidebar Container -->
<aside class="main-sidebar  ">
    <!-- Brand Logo -->
 
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
                            <p>User Account</p>
                        </a>
                    </li>

                    <li class="nav-item">

                        <a href="<?php echo e(route('user.index')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>User</p>
                        </a>
                    </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH E:\laravel\tradeSoftware\resources\views\admin\layouts\sidebar.blade.php ENDPATH**/ ?>