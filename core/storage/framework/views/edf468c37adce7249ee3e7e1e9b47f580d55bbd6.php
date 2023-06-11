<?php
    $career = element('career.element');
?>

<div class="container contact_form" style="background-color:#d1d8e0">
    <h3 style="text-align:center;padding-bottom:10px">Send Your Updated CV with the required field*</h3>
    <div class="">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <form action="/sendhtmlemail" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mt-4">
                            <input class="form-control pb" type="text" name="name" placeholder="Name*" required>
                        </div>
                        <div class="form-group mt-4">
                            <input class="form-control pb" type="text" name="contac_no" placeholder="Contact No*"
                                required>
                        </div>
                        <div class="form-group mt-4">
                            <input class="form-control pb" type="email" name="email" placeholder="Email Address*"
                                required>
                        </div>
                        <div class="form-group mt-4">
                            <select name="position" class="form-select form-control pb"
                                style=" padding-bottom: 12px;
                          padding-top: 12px;">
                                <option selected disabled>Select Your Position</option>
                                <?php $__currentLoopData = $career; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->data->slug); ?>"><?php echo e($item->data->job_title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="form-group mt-4">

                            <div class="custom-file">

                                <input type=file name="file" id="file" class="custom-file-input form-control pb"
                                    required>

                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit"
                                class="mt-5 btn btn-sm  contact_form_submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/apply_job.blade.php ENDPATH**/ ?>