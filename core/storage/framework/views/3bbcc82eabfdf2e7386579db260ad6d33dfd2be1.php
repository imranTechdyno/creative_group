<?php
$clientElement=element('client.element');
$clientContent=content('client_content.content');
?>

<!-- Our corporate client starts -->
				
<section class="card_container">
    <div class="container">
        <div class="cli"><?php echo e(@$clientContent->data->title); ?></div>
        <div class="row">
            <div class="blue">
                <?php $__empty_1 = true; $__currentLoopData = $clientElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-12">
                    <div class="blue-box">
                        <img src="<?php echo e(@$item->data->image); ?>" class="c_logo" alt="">
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    
                <?php endif; ?>
            </div>
        </div>
        <center>
            <a href="<?php echo e(url('corporate-clients')); ?>">
                <button class="btn btn-primary sis">All Clients</button>
            </a>
        </center>
    </div>
</section>
<!-- Our corporate client ends --><?php /**PATH C:\xampp\htdocs\unisoft\core\resources\views/frontend/sections/client.blade.php ENDPATH**/ ?>