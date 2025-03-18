

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card-body pt-2">
                        <div class="text-center">
                            <h3 class="mt-4 mb-1 text-center">Account Info</h3>

                            <?php if(session('success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php echo e(session('success')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <?php if(session('error')): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo e(session('error')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <?php if($errors->has('error')): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?php echo e($errors->first('error')); ?>

                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                        
                            <!-- Admin Account Info -->
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card bg-light p-3">
                                        <p><strong>Name:</strong> hassan</p>
                                        <p><strong>Account Number:</strong> 347626427647</p>
                                        <p><strong>Payment Method:</strong> 347626427647</p>
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
                                <h4 class="mb-3 text-center">Upload payment screenshoot</h4>
                                <form action="<?php echo e(route('deposit.uploadscreenshoot')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group mt-3">
                                        <input type="hidden" name="deposit_id" value="<?php echo e($deposit_id); ?>" id="">
                                        <label for="payment_screenshot">Upload Payment Screenshot</label>
                                        <input type="file" id="payment_screenshot" name="payment_screenshot" class="form-control" required>
                                        <?php $__errorArgs = ['payment_screenshot'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"><?php echo e($message); ?></span>
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

<?php echo $__env->make('user.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views\user\deposit\admininfo.blade.php ENDPATH**/ ?>