<div class="mt-2">
    <nav class="d-inline-block">

        <ul class="pagination mb-0">
            <?php if($paginator->onFirstPage()): ?>

            <?php else: ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" tabindex="-1">
                <?php if($general->site_direction == 'rtl'): ?>
                <i class="fas fa-chevron-right"></i>
                <?php else: ?>
                    <i class="fas fa-chevron-left"></i>
                <?php endif; ?>
                </a>
            </li>
            <?php endif; ?>

            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if(count($element) < 2): ?>


                <?php else: ?>

                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li class="page-item <?php echo e($key == $paginator->currentPage() ? 'active' : ''); ?>">
                        <a class="page-link" href="<?php echo e($el); ?>"><?php echo e($key); ?></a>
                    </li>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         <?php if($paginator->hasMorePages()): ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>">
                 <?php if($general->site_direction == 'rtl'): ?>
                <i class="fas fa-chevron-left"></i>
                <?php else: ?>
                    <i class="fas fa-chevron-right"></i>
                <?php endif; ?>
                </a>
            </li>
        <?php endif; ?>
        </ul>
    </nav>
</div>
<?php /**PATH C:\xampp\htdocs\unisoft\core\resources\views/backend/partial/paginate.blade.php ENDPATH**/ ?>