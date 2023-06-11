<?php
    $bannerElement = element('mission_and_vission.element');
    
?>

<?php $__currentLoopData = $bannerElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span style="color:<?php echo e($key->data->color_text); ?>"><?php echo e($key->data->title); ?></span>
            </div>
            <div class="col-md-6">
                <?php echo e($key->data->short_description); ?>

                <img src="<?php echo e($key->data->image); ?>">
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\tdbdltd\core\resources\views/frontend/sections/mission_and_vission.blade.php ENDPATH**/ ?>