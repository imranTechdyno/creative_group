<?php

$sister_concernElement = element('sister_concern.element');
$sister_concernContent = content('sister_concern_content.content');
?>

<!-- box slider our sister concern -->
<div class="page-title text-center">

</div>
<div class="sister"><?php echo e(@$sister_concernContent->data->title); ?></div>

    <div class="container">
        <div class="row">
          
                <?php $__empty_1 = true; $__currentLoopData = $sister_concernElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h2><?php echo e(@$item->data->sub_title); ?></h2>

                        <p>
                            <?php echo e(@$item->data->short_description); ?>

                            <a target="_blank" href="<?php echo e(@$item->data->url); ?>">VIEW MORE..</a>
                        </p>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            
        </div>
       
    </div>


<!-- box slider our sister concern end--><?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/all_sisterConcern.blade.php ENDPATH**/ ?>