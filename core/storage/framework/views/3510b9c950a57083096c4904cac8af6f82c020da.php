
<?php $__env->startSection('content'); ?>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-12 box">
                        <div class="col-md-6 col-sm-12" style="vertical-align: middle">
                            <div class="">
                                <h4 ><?php echo e(@$news_and_events->data->title); ?></h4>
                                <p><?php echo e(@$news_and_events->data->short_description); ?></p>
                                <p>Publish Date : <?php echo e(@$news_and_events->data->date); ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="">
                                <img src="<?php echo e(@$news_and_events->data->image); ?>" alt="Box Image" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/news_and_events_details.blade.php ENDPATH**/ ?>