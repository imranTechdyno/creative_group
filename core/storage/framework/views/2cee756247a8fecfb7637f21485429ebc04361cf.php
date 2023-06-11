
<?php $__env->startSection('content'); ?>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-6">
                        <div class="box col-md-12">
                            <img src="<?php echo e($press_release->data->image); ?>" alt="Box Image" />
                            <h4><?php echo e($press_release->data->title); ?></h4>
                            <p><?php echo e(Str::limit($press_release->data->short_description, 200, '...')); ?></p>
                            <br />
                            <i class="fa-solid fa-calendar-days"></i>
                            <?php echo e(\Carbon\Carbon::parse($press_release->data->date)->format('d F Y')); ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisoft\core\resources\views/frontend/sections/press_release_details.blade.php ENDPATH**/ ?>