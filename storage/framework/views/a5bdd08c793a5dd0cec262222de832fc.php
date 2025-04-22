

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
                        <div class="card-header text-center">
                            <h4 class="card-title">Transactions Report</h4>
                        </div>

                        <div class="container">
                            <div class="row">
                                <form method="GET" action="<?php echo e(route('ledger.history')); ?>" class="mb-3">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="date" name="from_date" value="<?php echo e(request('from_date')); ?>"
                                                class="form-control" placeholder="From Date" required>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="to_date" value="<?php echo e(request('to_date')); ?>"
                                                class="form-control" placeholder="To Date" required>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary w-100">Filter</button>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="<?php echo e(route('ledger.history')); ?>" class="btn btn-secondary w-100">Reset</a>
                                        </div>
                                    </div>
                                </form>

                                <div class="mb-3">
                                    <h5>Total Profit: <?php echo e(number_format($totalProfit, 2)); ?></h5>
                                    <h5>Total Withdrawals: <?php echo e(number_format($totalWithdrawals, 2)); ?></h5>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover border-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Profit Earned</th>
                                        <th>Withdraw</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($entry['date']); ?></td>
                                            <td>$<?php echo e(number_format($entry['profit'], 2)); ?></td>
                                            <td>$<?php echo e(number_format($entry['withdraw'], 2)); ?></td>
                                            <td>$<?php echo e(number_format($entry['balance'], 2)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="5" class="text-center text-muted">No Data Found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views/user/transactions/ledgerhistory.blade.php ENDPATH**/ ?>