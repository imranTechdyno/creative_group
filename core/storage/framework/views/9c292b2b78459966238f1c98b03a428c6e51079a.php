
<?php $__env->startSection('content'); ?>
    <div class="page-title text-center">

    </div>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">

            <div class="row">
                <div class="">
                    <div class="col-md-12 box" style="border: none!important">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="">
                                <img src="<?php echo e(@$product_details->data->image); ?>" alt="Box Image" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12" style="vertical-align: middle">
                            <div class="" style="padding-top:20px">
                                <h3 style="padding-left: 15px"><?php echo e(@$product_details->data->title); ?></h3>
                                <p style="padding-left: 0px!important" class="text-justify"><?php echo @$product_details->data->short_description; ?></p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="row">
                <div class="">
                    <div class="">
                        <div class="col-md-9 col-sm-12 col-12 box product_des">
                            <div class="">
                                <h3 style="padding-left:30px">Description:</h3>
                                <p class="text-justify" ><?php echo (@$product_details->data->description); ?></p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-12 col-12 py-3 box" style="border: none!important">
                            <h3 style="margin-top: 20px;padding-left:20px">Related Products</h3>
                            <?php $__currentLoopData = $related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url('product-details', $item->data->slug)); ?>">
                                    <div class="productItem">


                                        <img src="<?php echo e($item->data->image); ?>" class="rel_p_img" alt="">

                                        <p class="caption">
                                            <?php echo e($item->data->title); ?>

                                        </p>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- News and event Section ends -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/frontend/sections/product_details.blade.php ENDPATH**/ ?>