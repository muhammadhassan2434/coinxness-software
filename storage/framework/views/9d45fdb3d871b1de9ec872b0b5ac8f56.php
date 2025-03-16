

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Report</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header" style="display: flex; justify-content: center">
                            <h4 class="card-title">Transactions Report</h4>
                        </div>

                        <div class="container">
                            <div class="row">
                                <form method="GET" action="<?php echo e(route('ledger.history')); ?>" class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="date" name="from_date" value="<?php echo e($fromDate ?? ''); ?>"
                                                class="form-control" placeholder="From Date">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="to_date" value="<?php echo e($toDate ?? ''); ?>"
                                                class="form-control" placeholder="To Date">
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="<?php echo e(route('ledger.history')); ?>" class="btn btn-secondary">Reset</a>
                                        </div>
                                    </div>
                                </form>

                                <div class="mb-3">
                                    <h5>Total Profit: <?php echo e(number_format($totalProfit, 2)); ?></h5>
                                </div>
                            </div>

                        </div>
                        <table class="table table-hover border-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Profit Earned</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php $__currentLoopData = $ledger; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e($entry->date); ?></td>
                                        <td><?php echo e(number_format($entry->profit, 2)); ?></td>
                                        <td><?php echo e(number_format($entry->balance, 2)); ?></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views\user\transactions\ledgerhistory.blade.php ENDPATH**/ ?>