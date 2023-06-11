<?php
    $ourTeam = element('our_team.element');
    $ourTeamTitle = content('our_team_title.content')
?>
<main class="main">

    <!-- Background title image here -->
    <div class="page-title text-center">

    </div>
    <!-- Background title image here -->

    <!-- below the title shadow here -->
    <div class="breadcrumbs">
        <div class="container">
        </div>
    </div>
    <!-- below the title shadow here -->
    <div class="container">
        <div class="row about-sidebar">
            <div class="col-md-9 about-content">

                <section class="about-leaders">
                    <div class="section-title text-center">
                        <h2 class="title-services-other title-2"> OUR TEAM </h2>
                        <h4 class="subtitle-services-other subtitle-2"><?php echo e($ourTeamTitle->data->team_title); ?></h4>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row leaders text-center">
                        
                       
                       
                        
                       <?php $__currentLoopData = $ourTeam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-4">
                            <div class="img-hover-effect">
                                <img src="<?php echo e($team->data->image); ?>" alt="Clifton">
                                <div class="social-links">
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </div>
                            </div>
                            <h4 class="subtitle"><?php echo e($team->data->image_title); ?></h4>
                            <p><?php echo e($team->data->image_des); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
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
<?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/frontend/sections/our_team.blade.php ENDPATH**/ ?>