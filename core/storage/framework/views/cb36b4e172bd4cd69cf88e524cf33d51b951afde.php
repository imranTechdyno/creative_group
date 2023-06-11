
<?php $__env->startSection('content'); ?>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-12 box">
                        <div class="col-md-6 col-sm-12" style="vertical-align: middle">
                            <div class="">
                                <h4 ><?php echo e(@$product_details->data->single_title); ?></h4>
                                <p><?php echo e(@$product_details->data->short_description); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="">
                                <img src="<?php echo e(@$product_details->data->image); ?>" alt="Box Image" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\unisoftfinal\core\resources\views/frontend/sections/product_details.blade.php ENDPATH**/ ?>