<?php
    $at_a_glanceElement = element('at_a_glance.element');
    $at_a_glanceContent = content('at_a_glance_content.content');
    
?>
<!-- Group at a glance section starts -->
<section class="home-company">
    <div class="">
        <!-- background image here -->
        <div class="back">
            <div class="write"><?php echo e(@$at_a_glanceContent->data->title); ?></div>
            <!--  -->
            <div class="container one">
                <?php $__empty_1 = true; $__currentLoopData = $at_a_glanceElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="child">
                            <center>
                                <img src="<?php echo e(@$item->data->image); ?>" alt="industry_image" />
                            </center>
                            <p><?php echo e(@$item->data->title); ?> <br /><?php echo e(@$item->data->glance_number); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php echo $__env->make('frontend.partial.no_record_found', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
            <!--  -->
        </div>
    </div>
</section>
<!-- Group at a glance section starts -->
<?php /**PATH C:\laragon\www\unisoftfinal\core\resources\views/frontend/sections/at_a_glance.blade.php ENDPATH**/ ?>