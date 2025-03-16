

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row  mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Transactions </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header" style="display: flex; justify-content: center">
                            <h4 class="card-title">Transactions List</h4>
                        </div>
                        <table class="table table-hover border-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 1;
                                ?>
                                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><strong><?php echo e($i); ?></strong></td>
                                        <td><?php echo e($transaction->user->name); ?></td>
                                        <td><?php echo e($transaction->amount); ?></td>
                                        <td><?php echo e($transaction->updated_at); ?></td>
                                        
                                    </tr>
                                    <?php
                                        $i++;
                                    ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views\user\transactions\index.blade.php ENDPATH**/ ?>