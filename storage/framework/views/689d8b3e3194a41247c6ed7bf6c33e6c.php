
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Deposit Requests</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
            </div>

            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="60">ID</th>
                            <th>Name</th>
                            <th>Account Number</th>
                            <th>Request Date</th>
                            <th>Screenshot</th>
                            <th width="150">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($requests->isNotEmpty()): ?>
                            <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->name ?? 'N/A'); ?></td>
                                    <td><?php echo e($item->account_number ?? 'N/A'); ?></td>
                                    <td><?php echo e($item->created_at ?? 'N/A'); ?></td>
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
                                    <td>
                                        <a href="<?php echo e(route('deposit.approve', $item->id)); ?>" class="btn btn-primary btn-sm">
                                            Approve
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-danger text-center">
                                    <h1>Records not found</h1>
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Screenshot Modal -->
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

<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views\admin\depositRequest\index.blade.php ENDPATH**/ ?>