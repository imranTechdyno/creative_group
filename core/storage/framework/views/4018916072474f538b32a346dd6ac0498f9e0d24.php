<?php
    
    $sister_concernElement = element('sister_concern.element');
    $sister_concernContent = content('sister_concern_content.content');
?>

<!-- box slider our sister concern -->
<div class="sister"><?php echo e(@$sister_concernContent->data->title); ?></div>
<section class="card_container">
    <div class="container">
        <div class="row">
            <div class="multiple-items">
                <?php $__empty_1 = true; $__currentLoopData = $sister_concernElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h2><?php echo e(@$item->data->title); ?></h2>

                            <p class="text-justify">
                                <?php echo e(Str::limit(@$item->data->short_description, 200, '...')); ?>

                                <?php if($item->data->website_link): ?>
                                    <a href="<?php echo e($item->data->website_link); ?>">VIEW MORE..</a>
                                <?php else: ?>
                                    <a href="<?php echo e(url('sister-concern-details', $item->data->slug)); ?>">VIEW MORE..</a>
                                <?php endif; ?>

                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
        </div>
        <center>
            <div class="sis-ter">
                <a href="<?php echo e(url('all-sister-concern')); ?>">
                    <button class="btn btn-primary sis">All Sister Concern</button>
                </a>
            </div>
        </center>
    </div>
</section>

<!-- box slider our sister concern end-->
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/sister_concern.blade.php ENDPATH**/ ?>