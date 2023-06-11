
<?php $__env->startSection('content'); ?>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-12 box">
                        <div class="col-md-6 col-sm-12" style="vertical-align: middle">
                            <div class="">
                                <h4 ><?php echo e(@$sister_concern->data->sub_title); ?></h4>
                                <p><?php echo e(@$sister_concern->data->short_description); ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\unisoft\core\resources\views/frontend/sections/sister-concern-details.blade.php ENDPATH**/ ?>