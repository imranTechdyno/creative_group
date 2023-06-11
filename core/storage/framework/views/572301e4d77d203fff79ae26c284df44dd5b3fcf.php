<?php
    $aboutContent = content('about.content');
    $about_us_details = content('about_us_details.content');
?>

<!-- Know us section starts -->
<section class="home-company">
    <div class="container">
        <div class="know-header"><?php echo e($aboutContent->data->title); ?></div>
        <div class="row company">
            <div class="col-lg-6 col-md-12 text-right">
                <?php if($aboutContent->data->video_url): ?>
                    <div class="btn">
                        <a href="<?php echo e($aboutContent->data->video_url); ?>" class="popup-video"><img
                                src="<?php echo e(getFile('', 'play.png')); ?>" class="v_play"></a>
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
                        $aboutContent->data->short_description,
                    ); ?>


                </div>
                <div class="lea">
                    <a href="<?php echo e(url('about-us')); ?>" class="learn">Learn More <i
                            class="fa-sharp fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- know us section ends -->
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
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/about.blade.php ENDPATH**/ ?>