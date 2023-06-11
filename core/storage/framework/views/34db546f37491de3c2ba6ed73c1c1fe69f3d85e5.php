

<?php $__env->startSection('content'); ?>
    <!-- News and event Section starts -->
    <section class="home-publications product_bg">
        <div class="container">
            <div class="job-h">
                <h3 style="color:#004683">Apply For <?php echo e($career_details->data->job_title); ?></h3>
            </div>

            <div class="row">
                       <div class="col-md-8">
                        <div class="">
                            <img class="card-img-top" src="<?php echo e($career_details->data->image); ?>" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text" style="text-align: justify"><?php echo $career_details->data->job_description; ?></p>
                            </div>
                          </div>
                       </div>

                       <div style="padding-left: 50px" class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                             <h4 class="job-ty">Job Type</h4>
                              <p class="card-text"><?php echo e($career_details->data->job_type); ?></p>
                             <h4 class="job-ty">Salary</h4>
                              <p class="card-text"><?php echo e($career_details->data->salary); ?></p>
                             <h4 class="job-ty">Job Location</h4>
                              <p class="card-text"><?php echo e($career_details->data->job_location); ?></p>

                              <a href="<?php echo e(url('apply-job')); ?>" class="btn btn-primary">Apply Now</a>
                            </div>
                          </div>
                       </div>

            </div>
        </div>
    </section>
    <!-- News and event Section ends -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/frontend/sections/job_details.blade.php ENDPATH**/ ?>