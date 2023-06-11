<?php
    $about_us_details = content('about_us_details.content');
    $about_us_details_element = element('about_us_details_element.element');
?>

<main class="main">

    <div class="page-title text-center">

    </div>

    <!-- below the picture the shadow -->
    <div class="breadcrumbs">
    </div>
    <!-- below the picture the shadow -->

    <div class="container">
        <div class="row about-sidebar">
            <div class="col-md-9 about-content">
                <section class="about-company">
                    <div class="com">
                </section>
                <!-- know us for about page starts here -->
                <section class="home-company">
                    <div class="container">
                        <div class="know-header">Know Us</div>
                        <div class="row company">
                            <div class="col-lg-6 col-md-12">
                                <div class="btn">
                                    <a href="<?php echo e($about_us_details->data->video_url); ?>" class="popup-video"><img
                                            src="<?php echo e(getFile('', 'play.png')); ?>" class="v_play1"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="company-details">
                                    <p><?php echo e($about_us_details->data->short_description); ?></p>
                                </div>
                                <div class="lea">
                                    <a href="" class="learn">Learn More <i
                                            class="fa-sharp fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- know us for about page ends here -->

                <section class="about-services">
                    <div class="row services">

                        <?php $__empty_1 = true; $__currentLoopData = $about_us_details_element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elements): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="col-sm-6">
                                <a href="#" class="hover-effect">
                                    <img src="<?php echo e($elements->data->image); ?>" alt="technology-innovation" />
                                </a>
                                <h4 class="services-title-one subtitle"><?php echo e($elements->data->image_title); ?></h4>
                                <p><?php echo e($elements->data->image_des); ?></p>
                                <a class="link" href="#">Read More</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>

                    </div>
                </section>
            </div>
            <div class="col-md-3 sidebar left">
                <div class="sidebar-blog-categories">
                    <ul>
                        <li> <a href="about.html"> The Company </a> </li>
                        <li> <a href="mission.html"> Our Vision &amp; Mission </a> </li>
                        <li> <a href="approach.html"> Our Approach </a> </li>
                        <li> <a href="team.html"> Our Team </a> </li>
                    </ul>
                </div>
                <div class="sidebar-download">

                </div>

            </div>
        </div>
    </div>
</main>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function() {
            $('.popup-video').magnificPopup({
                type: 'iframe',
                iframe: {
                    patterns: {
                        youtube: {
                            index: 'youtube.com/',
                            id: 'v=',
                            src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                        }
                    }
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/about_us_details.blade.php ENDPATH**/ ?>