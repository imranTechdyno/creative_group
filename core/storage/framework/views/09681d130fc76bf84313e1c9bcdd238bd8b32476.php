
<?php $__env->startSection('content'); ?>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-6 col-sm-12 col-12 box ">
                    <div class="text-center">
                        <img src="<?php echo e(@$sister_concern->data->image); ?>" class="img-fluid concern_img" alt="Box Image" />
                        <div class="col-md-12 text-justify">
                            <h4><?php echo e(@$sister_concern->data->title); ?></h4>
                            <p><?php echo e(strip_tags(@$sister_concern->data->short_description)); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/sister_concern_details.blade.php ENDPATH**/ ?>