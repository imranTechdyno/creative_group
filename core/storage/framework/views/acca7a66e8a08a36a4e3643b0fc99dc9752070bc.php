<?php
    $productElement = element('product.element');
    $productContent = content('product_content.content');
?>

<!-- News and event Section starts -->
<section class="home-publications product_bg">
    <div class="container">
        <div class="news-head"><?php echo e($productContent->data->top_title); ?></div>

        <div class="row">
            <div class="news">
                <?php $__currentLoopData = $productElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-sm-12">
                        <div class="box">
                            <a href="<?php echo e(url('product-details', $item->data->slug)); ?>">
                                <img src="<?php echo e(@$item->data->image); ?>" alt="Box Image" />
                            </a>
                            <a href="<?php echo e(url('product-details', $item->data->slug)); ?>"><h4><?php echo e(@$item->data->title); ?></h4></a>
                            <p><?php echo e(strip_tags(Str::limit(@$item->data->short_description, 200, '...'))); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>


    <center>
        <a href="<?php echo e(url('all-product')); ?>">
            <button class="btn btn-primary sis">View More</button>
        </a>
    </center>
    </div>
</section>
<!-- News and event Section -->
<?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/frontend/sections/product.blade.php ENDPATH**/ ?>