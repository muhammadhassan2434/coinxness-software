

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row">

                <div class="col-xl-3 col-lg-3 data">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4 text-white">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">User Name</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        <?php echo e(ucwords(Auth::user()->name)); ?>

                                    </h2>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4 text-white">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Balance</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                       $<?php echo e(Auth::user()->balance); ?>

                                    </h2>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="card l-bg-orange-dark">
                        <div class="card-statistic-3 p-4 text-white">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Invested</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        $<?php echo e(Auth::user()->capital); ?>

                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-4 text-white">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Withdraw</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        $<?php echo e($withdrawl); ?>

                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-4 text-white">
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Today Profit</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        $<?php echo e($todayProfit); ?>

                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row ">
                <div class="col-md-12">
                    <div class="card-body pt-2">
                        <div class="text-center">
                            <h3 class="mt-4 mb-1 text-center">User Account</h3>
                            <ul class="list-group mb-3 list-group-flush">
                                <li class="list-group-item px-0 d-flex ">
                                    <span class="mb-0">User :</span><strong
                                        class="mx-3"><?php echo e(ucwords($user->name)); ?></strong>
                                </li>
                                <li class="list-group-item px-0 d-flex ">
                                    <span class="mb-0">Registration Date :</span><strong
                                        class="mx-3"><?php echo e($user->reg_date ?? ''); ?></strong>
                                </li>
                                <li class="list-group-item px-0 d-flex ">
                                    <span class="mb-0">Account Balance :</span><strong
                                        class="mx-3">$<?php echo e($user->balance); ?></strong>
                                </li>
                                <li class="list-group-item px-0 d-flex ">
                                    <span class="mb-0">Total Earned :</span><strong
                                        class="mx-3">$<?php echo e($earned); ?></strong>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views/user/home.blade.php ENDPATH**/ ?>