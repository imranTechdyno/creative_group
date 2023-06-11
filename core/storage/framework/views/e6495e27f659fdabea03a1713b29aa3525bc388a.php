<?php
    $productElement = element('product.element');
    $productContent = content('product_content.content');
?>

<!-- News and event Section starts -->
<div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold"><?php echo e($productContent->data->top_title); ?></p>
        <hr class="hr_for_all">
</div>
<section class="home-publications product_bg">
    <div class="container">
        
        <div class="news-head"></div>

        <div class="row">
           
                <?php $__currentLoopData = $productElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-12">
                        <div class="box">
                            <a href="<?php echo e(url('product-details', $item->data->slug)); ?>">
                                <img src="<?php echo e(@$item->data->image); ?>" alt="Box Image" />
                            </a>
                            <h4 style="min-height: 40px"><?php echo e(@$item->data->title); ?></h4>
                            <p><?php echo e(strip_tags(Str::limit(@$item->data->short_description, 130, '...'))); ?>

                                <a href="<?php echo e(url('product-details', $item->data->slug)); ?>"><button style="font-size: 18px;">See More</button></a>
                            </p>
                            
                        </div>
                    </div>
              
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>

        </div>
</section>
<?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/frontend/sections/all_product.blade.php ENDPATH**/ ?>