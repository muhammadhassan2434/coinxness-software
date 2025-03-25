

<?php $__env->startSection('content'); ?>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Deposit</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0 p-4">
                        <div class="container">
                            <div class="row">
                                <!-- Deposit Form -->
                                <form method="POST" action="<?php echo e(route('user.deposit.store')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <h3 class="text-center">Sender Account info</h3>
                                        <!-- Select Payment Method -->
                                        <div class="col-md-6 mb-3">
                                            <label for="payment_method">Select Payment Method</label>
                                            <select id="payment_method" name="payment_method" class="form-control" required>
                                                <option value="">Choose Payment Method</option>
                                                <option value="jazzcash">JazzCash</option>
                                                <option value="easypaisa">EasyPaisa</option>
                                                <option value="bank">Bank Transfer</option>
                                            </select>
                                            <?php $__errorArgs = ['payment_method'];
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

                                        <!-- Select Bank (Only If Bank Transfer Selected) -->
                                        <div class="col-md-6 mb-3 d-none" id="bank_select">
                                            <label for="bank_name">Choose Bank</label>
                                            <select id="bank_name" name="bank_name" class="form-control">
                                                <option value="">Select Bank</option>
                                                <option value="hbl">HBL (Habib Bank Limited)</option>
                                                <option value="ubl">UBL (United Bank Limited)</option>
                                                <option value="mcb">MCB (Muslim Commercial Bank)</option>
                                                <option value="meezan">Meezan Bank</option>
                                                <option value="nbp">NBP (National Bank of Pakistan)</option>
                                                <option value="bop">BOP (Bank of Punjab)</option>
                                                <option value="summit">Summit Bank</option>
                                                <option value="askari">Askari Bank</option>
                                                <option value="faysal">Faysal Bank</option>
                                                <option value="bankislami">BankIslami Pakistan</option>
                                                <option value="bankalfalah">Bank Alfalah</option>
                                                <option value="js">JS Bank</option>
                                                <option value="samba">Samba Bank</option>
                                                <option value="albaraka">Al Baraka Bank</option>
                                                <option value="sindh">Sindh Bank</option>
                                                <option value="bankalhabib">Bank Al Habib</option>
                                                <option value="firstwomen">First Women Bank</option>
                                                <option value="allied">Allied Bank</option>
                                                <option value="habibmetro">Habib Metropolitan Bank</option>
                                                <option value="zarai">Zarai Taraqiati Bank</option>
                                                <option value="industrial">Industrial Development Bank</option>
                                                <option value="modaraba">Pak Oman Investment Company</option>
                                                <option value="citi">Citi Bank</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Name -->
                                        <div class="col-md-4 mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control">
                                            <?php $__errorArgs = ['name'];
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

                                        <!-- Account Number -->
                                        <div class="col-md-4 mb-3">
                                            <label for="account_number">Account Number</label>
                                            <input type="text" id="account_number" name="account_number"
                                                class="form-control">
                                            <?php $__errorArgs = ['account_number'];
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
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Deposit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Dynamic Field Handling -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let paymentMethod = document.getElementById("payment_method");
            let bankSelect = document.getElementById("bank_select");

            paymentMethod.addEventListener("change", function() {
                if (this.value === "bank") {
                    bankSelect.classList.remove("d-none");
                } else {
                    bankSelect.classList.add("d-none");
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\laravel\tradeSoftware\resources\views/user/deposit/index.blade.php ENDPATH**/ ?>