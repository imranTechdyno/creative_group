<?php
    $career= element('career.element');
?>
<div class="page-title text-center">
    <p class="contact_tag1 text-center text-bold">Career</p>
    <hr class="hr_for_career">
    <p class="contact_tag text-center text-bold">We welcome competent people to join us. Join our leading team.</p>
</div>
<div class="container">
    <div class="career_tag_align">
        
    </div>
    <div class="job">

        <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card career_card">
                    <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">
                        <img class="card-img-top" src="<?php echo e($job->data->image); ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">
                        <h3 style="padding-left: 20px" class="card-title"><?php echo e($job->data->job_title); ?></h3>
                        </a>
                    </div>
                    <hr class="card_body_hr">
                    <div class="dead-line">
                        <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">
                         <p class="card-title card_p">Dead Line:<?php echo e(\Carbon\Carbon::parse(@$job->data->dead_line)->format('d F Y')); ?></p>
                         
                         </a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/career.blade.php ENDPATH**/ ?>