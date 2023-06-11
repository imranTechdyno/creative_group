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
                <div class="col-md-12">
                    <div class="card">
                        <h2><?php echo e(@$item->data->sub_title); ?></h2>

                        <p>
                            <?php echo e(@$item->data->short_description); ?>

                            <a target="_blank" href="https://www.techdynobd.com/">VIEW MORE..</a>
                        </p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            </div>
        </div>
        <center>
            <a href="<?php echo e(url('all-sister-concern')); ?>">
                <button class="btn btn-primary sis">All Sister Concern</button>
            </a>
        </center>
    </div>
</section>

<!-- box slider our sister concern end--><?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/sister_concern.blade.php ENDPATH**/ ?>