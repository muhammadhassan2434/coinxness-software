
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Withdraws Approved</h1>
                </div>
                <div class="col-sm-6 text-right">
                    
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th>Name</th>
                                <th>Account Number</th>
                                <th>Approved Date</th>
                                <th>Screenshoot</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($withdraws->isNotEmpty()): ?>
                                <?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name ?? 'N/A'); ?></td>
                                        <td><?php echo e($item->account_number ?? 'N/A'); ?></td>
                                        <td><?php echo e($item->updated_at ?? 'N/A'); ?></td>
                                        <td>
                                            <?php if($item->payment_screenshot): ?>
                                                <button class="btn btn-secondary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#screenshotModal"
                                                    onclick="showScreenshot('<?php echo e(asset($item->payment_screenshot)); ?>')">
                                                    Check
                                                </button>
                                            <?php else: ?>
                                                <span class="text-muted">No Screenshot</span>
                                            <?php endif; ?>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-danger text-center">
                                        <h1>Rcords not found</h1>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    

                </div>



            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
    </div>
    <div class="modal fade" id="screenshotModal" tabindex="-1" aria-labelledby="screenshotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="screenshotModalLabel">Payment Screenshot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="screenshotImage" src="" class="img-fluid rounded" alt="Payment Screenshot">
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('customjs'); ?>
    <script>
        function showScreenshot(imageUrl) {
            document.getElementById('screenshotImage').src = imageUrl;
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views/admin/depositRequest/approvedDeposit.blade.php ENDPATH**/ ?>