<?php
    $career = content('career.content');
    $career_job = element('career_job.element');
?>
<div class="page-title text-center">

</div>
<div class="container">
    <div class="career_up">
        <h2>Find Your Opportunity</h2>
        <p class="career_des"><?php echo e($career->data->why_us); ?></p>
    </div>
    <div class="job">

        <?php $__currentLoopData = $career_job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card" style="width: 30rem;">
                    <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">
                        <img class="card-img-top" src="<?php echo e($job->data->image); ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h3 style="padding-left: 20px" class="card-title"><?php echo e($job->data->job_title); ?></h3>
                        <p><?php echo e(Str::limit(@$job->data->job_des, 200, '...')); ?> <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">read more..</a></p>
                        <a href="#" class="btn btn-primary">Email Us</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/career.blade.php ENDPATH**/ ?>