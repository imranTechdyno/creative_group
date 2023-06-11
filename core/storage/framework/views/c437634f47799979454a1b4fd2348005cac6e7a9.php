<?php
    $newsEventsElement = element('news_and_events.element');
    $newsEventsContent = content('news_and_events_content.content');
?>

<!-- News and event Section starts -->
<section class="home-publications">
    <div class="container">
        <div class="news-head"><?php echo e(@$newsEventsContent->data->title); ?></div>

        <div class="row">
            <div class="news">
                <?php $__currentLoopData = $newsEventsElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-sm-12">
                        <div class="box">
                            <img src="<?php echo e(@$item->data->image); ?>" alt="Box Image" />
                            <h4><?php echo e(@$item->data->title); ?></h4>
                            <p><?php echo e(@$item->data->short_description); ?></p>
                            <br />
                            <i class="fa-solid fa-calendar-days"></i>
                            <?php echo e(\Carbon\Carbon::parse(@$item->data->date)->format('d F Y')); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>


    <center>
        <button class="btn btn-primary sis">View More</button>
    </center>
    </div>
</section>
<!-- News and event Section ends -->
<?php /**PATH C:\laragon\www\unisoftfinal\core\resources\views/frontend/sections/news_and_events.blade.php ENDPATH**/ ?>