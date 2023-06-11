<?php
    $newsEventsElement = element('news_and_events.element');
    $newsEventsContent = content('news_and_events_content.content');
?>
<div class="page-title text-center">

</div>
<!-- News and event Section starts -->
<section class="home-publications">
    <div class="container">
        <div class="news-head"><?php echo e(@$newsEventsContent->data->title); ?></div>

        <div class="row">
            
                <?php $__currentLoopData = $newsEventsElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <a href="<?php echo e(url('news-and-events-details',$item->data->slug)); ?>">
                                <img src="<?php echo e(@$item->data->image); ?>" alt="Box Image" />
                            </a>
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
</section>
<!-- News and event Section ends -->
<?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/all_news_and_events.blade.php ENDPATH**/ ?>