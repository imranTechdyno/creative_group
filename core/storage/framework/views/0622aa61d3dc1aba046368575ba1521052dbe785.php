<?php
    $pressRelease = element('press_release.element');
   
?>
<div class="page-title text-center">

</div>

<!-- News and event Section starts -->
<section class="home-publications">
    <div class="container">
        <div class="news-head">Press Release</div>

        <div class="row">
                <?php $__currentLoopData = $pressRelease; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="box">
                            <a href="<?php echo e(url('press-release',$item->data->slug)); ?>">
                                <img src="<?php echo e(@$item->data->image); ?>" alt="Box Image" />
                            </a>
                            <h4><?php echo e(@$item->data->title); ?></h4>
                            <p><?php echo e(Str::limit(@$item->data->short_description, 200, '...')); ?></p>
                            <br />
                            <i class="fa-solid fa-calendar-days"></i>
                            <?php echo e(\Carbon\Carbon::parse(@$item->data->date)->format('d F Y')); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- News and event Section ends -->

<?php /**PATH C:\xampp\htdocs\unisoft\core\resources\views/frontend/sections/press_release.blade.php ENDPATH**/ ?>