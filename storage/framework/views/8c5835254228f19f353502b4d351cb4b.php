<?php $__env->startSection('title', 'Notebook - Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center mb-5">
        <h2 class="fw-bolder">خوش آمدید!</h2>
        <p class="lead mb-0">یادداشت های خود را به راحتی اضافه کنید</p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-6">
            <form id="contactForm" method="post" action="<?php echo e(route('notes.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" name="title" value="<?php echo e(old('title')); ?>" placeholder="عنوان یادداشت خود را وارد کنید..." />
                    <label for="title">عنوان</label>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="form-error">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" name="body" value="<?php echo e(old('body')); ?>" placeholder="یادداشت خود را وارد کنید..." style="height: 10rem"></textarea>
                    <label for="body">یادداشت</label>
                    <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="form-error">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">موفقیت آمیز بود</div>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">خطایی رخ داد!</div></div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">
                            افزودن یادداشت
                    </button>
                </div>
            </form>
            <?php if(isset($note)): ?>
                <?php echo "OK"; ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\code\notebook\resources\views/welcome.blade.php ENDPATH**/ ?>