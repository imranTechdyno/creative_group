<?php
    $career= element('career.element');
?>
<div class="page-title text-center">

</div>
<div class="container">
    <div class="career_up">
        <h2>Find Your Opportunity</h2>
    </div>
    <hr style="color:#004683;">
    <div class="job">

        <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card" style="width: 30rem;">
                    <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">
                        <img class="card-img-top" src="<?php echo e($job->data->image); ?>" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">
                        <h3 style="padding-left: 20px" class="card-title"><?php echo e($job->data->job_title); ?></h3>
                        </a>
                    </div>
                    <hr>
                    <div class="dead-line">
                        <a href="<?php echo e(url('job-details', $job->data->slug)); ?>">
                         <p style="padding-left: 15px;padding-bottom:15px" class="card-title">Dead Line:<?php echo e($job->data->dead_line); ?></p>
                         </a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\unisoft\core\resources\views/frontend/sections/career.blade.php ENDPATH**/ ?>