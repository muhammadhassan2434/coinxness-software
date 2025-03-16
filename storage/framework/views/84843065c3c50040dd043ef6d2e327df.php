

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card-body pt-2">
                        <div class="text-center">
                            <h3 class="mt-4 mb-1 text-center">ASK FOR WITHDRAWL</h3>
                            <?php if(session('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <?php if(session('error')): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo e(session('error')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <?php if($errors->has('error')): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo e($errors->first('error')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>


                            <div class="row my-5 d-flex justify-content-center">
                                <div class="col-xl-3 col-lg-3">
                                    <div class="card l-bg-green-dark">
                                        <div class="card-statistic-3 p-4 text-white">
                                            <div class="mb-4">
                                                <h5 class="card-title mb-0 text-left">Balance</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0">
                                                        <?php echo e(Auth::user()->balance); ?>

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
                                                <h5 class="card-title mb-0 text-left">Pending Withdrawl</h5>
                                            </div>
                                            <div class="row align-items-center mb-2 d-flex">
                                                <div class="col-8">
                                                    <h2 class="d-flex align-items-center mb-0">
                                                        <?php echo e($withdrawls); ?>

                                                    </h2>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 text-center">Make a Request</h4>
                                <form action="<?php echo e(route('request.withdraw')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="amount">Enter Amount to Withdraw</label>
                                        <input type="number" id="amount" name="amount" class="form-control">
                                        <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger">
                                                <?php echo e($message); ?>

                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary w-100">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views\user\withdraw\index.blade.php ENDPATH**/ ?>