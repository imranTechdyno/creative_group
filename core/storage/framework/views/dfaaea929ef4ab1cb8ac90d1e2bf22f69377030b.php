<?php
    $productElement = element('product.element');
    $productContent = content('product_content.content');
?>

<!-- News and event Section starts -->
<div class="page-title text-center">

</div>
<section class="home-publications product_bg">
    <div class="container">
        <div class="news-head"><?php echo e($productContent->data->title); ?></div>

        <div class="row">
           
                <?php $__currentLoopData = $productElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-12">
                        <div class="box">
                            <a href="<?php echo e(url('product-details', $item->data->slug)); ?>">
                                <img src="<?php echo e(@$item->data->image); ?>" alt="Box Image" />
                            </a>
                            <h4><?php echo e(@$item->data->single_title); ?></h4>
                            <p><?php echo e(Str::limit(@$item->data->short_description, 200, '...')); ?></p>
                        </div>
                    </div>
              
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>

        </div>
</section>
<?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/all_product.blade.php ENDPATH**/ ?>