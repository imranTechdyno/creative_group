<?php
    $ourApproach = element('our_approach.element');
?>
<main class="main">

    <!-- background title image starts -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">Our Approach</p>
        <hr class="hr_for_all">
</div>
    <!-- background title image starts -->

    <!-- shadow below the title image -->
    <div class="breadcrumbs">
        <div class="container">
        </div>
    </div>
    <!-- shadow below the title image -->
    <div class="container">
        <div class="row about-sidebar">
            <div class="col-md-9 about-content">
                <section class="about-employees">
                    <?php $__empty_1 = true; $__currentLoopData = $ourApproach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $approach): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="row employees">
                            <div class="col-sm-6 text-left">
                                <a href="#" class=""><img src="<?php echo e($approach->data->image); ?>"
                                        alt=""> </a>
                            </div>
                            <div class="col-sm-6">
                                <p><?php echo e($approach->data->description); ?></p>
                            </div>
                        </div>
                        <!-- data for 2nd image -->
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>

                    <div class="spacer-80"> </div>
                </section>




            </div>
            <div class="col-md-3 sidebar left">
                <div class="sidebar-blog-categories">
                    <ul>
                        <li> <a href="<?php echo e(url('about-us')); ?>"> The Company </a> </li>
                        <li> <a href="<?php echo e(url('mission-and-vission')); ?>"> Our Vision &amp; Mission </a> </li>
                        <li> <a href="<?php echo e(url('our-approach')); ?>"> Our Approach </a> </li>
                        <li> <a href="<?php echo e(url('our-team')); ?>"> Our Team </a> </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</main>
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/our_approach.blade.php ENDPATH**/ ?>