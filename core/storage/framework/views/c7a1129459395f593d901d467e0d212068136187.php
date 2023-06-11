<?php
    $about_us_details = content('about_us_details.content');
    $about = content('about.content');
    $about_us_details_element = element('about_us_details_element.element');
?>

<main class="main">

    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold"><?php echo e($about->data->title); ?></p>
        <hr class="hr_for_all">
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
                        <div class="row company">
                            <div class="col-lg-6 col-md-12">
                                <?php if($about_us_details->data->video_url): ?>
                                    <div class="btn">
                                        <a href="<?php echo e($about_us_details->data->video_url); ?>" class="popup-video"><img
                                                src="<?php echo e(getFile('', 'play.png')); ?>" class="v_play1"></a>
                                    </div>
                                <?php else: ?>
                                    <img src="<?php echo e($about_us_details->data->image); ?>" alt="about-us">
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="company-details" id="info">
                                    <?php echo preg_replace(
                                        '/(<[a-zA-Z0-9\s"\-=\'\/]+) style="[^"]*font-size:[^"]*"/i',
                                        '$1',
                                        $about_us_details->data->description,
                                    ); ?>

                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- know us for about page ends here -->

                
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
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/about_us_details.blade.php ENDPATH**/ ?>