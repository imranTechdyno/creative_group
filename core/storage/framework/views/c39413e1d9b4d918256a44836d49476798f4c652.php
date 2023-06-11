<?php
    $newsEventsElement = element('news_and_events.element');
    $newsEventsContent = content('news_and_events_content.content');
?>
<div class="page-title text-center">
    <p class="contact_tag1 text-center text-bold"><?php echo e(@$newsEventsContent->data->title); ?></p>
    <hr class="hr_for_news">
</div>
<!-- News and event Section starts -->
<section class="home-publications">
    <div class="container">

        <div class="row">
            
                <?php $__currentLoopData = $newsEventsElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
                    <div class="col-md-3 col-sm-6">
                        <div class="box">
                            <a href="<?php echo e(url('news-and-events-details',$item->data->slug)); ?>">
                                <img src="<?php echo e(@$item->data->image); ?>" alt="Box Image" />
                            </a>
                            <i class="fa-solid fa-calendar-days"></i>
                            <?php echo e(\Carbon\Carbon::parse(@$item->data->date)->format('d F Y')); ?>

                            <a href="<?php echo e(url('news-and-events-details',$item->data->slug)); ?>"><h4><?php echo e(@$item->data->title); ?></h4></a>
                            <p><?php echo e(strip_tags(Str::limit(@$item->data->short_description, 200, '...'))); ?></p>
                            <br />
                            
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- News and event Section ends -->
<?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/frontend/sections/all_news_and_events.blade.php ENDPATH**/ ?>