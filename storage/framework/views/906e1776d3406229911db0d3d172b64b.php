

<?php $__env->startSection('title', 'Notebook - About'); ?>

<?php $__env->startSection('content'); ?>
    <div class="text-center mb-5">
        <h2 class="fw-bolder">یادداشت ها</h2>
        <p class="lead mb-0">در این قسمت یادداشت های ذخیره شما توسط شما قابل مشاهده است</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card">
                    <h5 class="card-header">یادداشت <?php echo e($key+1); ?></h5>
                    <div class="card-body">
                        <h5 class="card-title">عنوان یادداشت</h5>
                        <p class="card-text">Lorem Ipsum متنی بی‌معنی است، اما به صنعت چاپ و طراحی گرافیک کمک می‌کند تا در ارائه طرح‌ها و صفحات نمونه استفاده شود. این متن با شروع عبارت "لورم ایپسوم دلور سیت آمت" شروع و در ادامه به صورتی بی‌معنی ادامه پیدا می‌کند. هدف از استفاده از این متن، جذب توجه خواننده به محتوای متن نبوده و صرفا برای پر کردن فضای متنی در طرح‌های چاپی و گرافیکی مورد استفاده قرار می‌گیرد.</p>
                    </div>
                    <div class="card-footer text-muted">
                        اضافه شده در تاریخ: <?php echo e($note->created_at); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\code\notebook\resources\views/notes.blade.php ENDPATH**/ ?>