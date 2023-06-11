
<?php $__env->startSection('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(__($pageTitle)); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(route('admin.home')); ?>"><?php echo e(__('Dashboard')); ?></a>
                </div>
                <div class="breadcrumb-item"><?php echo e(__($pageTitle)); ?></div>
            </div>
        </div>

        <div class="section-body ">
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="sitename"><?php echo e(__('Site Name')); ?></label>
                                        <input type="text" name="sitename" placeholder="<?php echo app('translator')->get('site name'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->sitename); ?>">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="sitename"><?php echo e(__('Site Email')); ?></label>
                                        <input type="text" name="site_email" placeholder="<?php echo app('translator')->get('site email'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->site_email); ?>">
                                    </div>
                                     <div class="form-group col-md-2">
                                        <label for="sitename"><?php echo e(__('Site Address')); ?></label>
                                        <input type="text" name="address" placeholder="<?php echo app('translator')->get('Site Address'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->address); ?>">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="phone_no"><?php echo e(__('Phone Number')); ?></label>
                                        <input type="text" name="phone" placeholder="<?php echo app('translator')->get('Phone Number'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->phone); ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="facebook"><?php echo e(__('Facebook')); ?></label>
                                        <input type="text" name="facebook" placeholder="<?php echo app('translator')->get('Facebook'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->facebook); ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="twitter"><?php echo e(__('Twitter')); ?></label>
                                        <input type="text" name="twitter" placeholder="<?php echo app('translator')->get('Twitter'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->twitter); ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="linked_in"><?php echo e(__('Linked in')); ?></label>
                                        <input type="text" name="linked_in" placeholder="<?php echo app('translator')->get('Linked in'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->linked_in); ?>">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="youtube"><?php echo e(__('youtube')); ?></label>
                                        <input type="text" name="youtube" placeholder="<?php echo app('translator')->get('Youtube'); ?>"
                                            class="form-control form_control" value="<?php echo e(@$general->youtube); ?>">
                                    </div>

                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label"><?php echo e(__('Site logo')); ?> (165 x 68)</label>

                                        <div id="image-preview" class="image-preview"
                                            style="background-image:url(<?php echo e(getFile('logo', @$general->logo)); ?>);">
                                            <label for="image-upload" id="image-label"><?php echo e(__('Choose File')); ?></label>
                                            <input type="file" name="logo" id="image-upload" />
                                        </div>

                                    </div>
                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label"><?php echo e(__('Footer logo')); ?> (165 x 68)</label>

                                        <div id="image-preview" class="image-preview"
                                            style="background-image:url(<?php echo e(getFile('logo', @$general->logo)); ?>);">
                                            <label for="image-upload" id="image-label"><?php echo e(__('Choose File')); ?></label>
                                            <input type="file" name="footer_logo" id="image-upload" />
                                        </div>

                                    </div>

                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label"><?php echo e(__('Favicon Icon')); ?> (80 x 80)</label>
                                        <div id="image-preview-icon" class="image-preview"
                                            style="background-image:url(<?php echo e(getFile('icon', @$general->favicon)); ?>);">
                                            <label for="image-upload-icon" id="image-label-icon"><?php echo e(__('Choose File')); ?></label>
                                            <input type="file" name="icon" id="image-upload-icon" />
                                        </div>
                                    </div>                                   

                                    <div class="form-group col-md-4 mb-3">
                                        <label class="col-form-label"><?php echo e(__('Breadcumb Image')); ?> (461 x 419 png)</label>
                                        <div id="image-preview-default" class="image-preview"
                                            style="background-image:url(<?php echo e(getFile('default', @$general->default_image)); ?>);">
                                            <label for="image-upload-default" id="image-label-default"><?php echo e(__('Choose
                                                File')); ?></label>
                                            <input type="file" name="default" id="image-upload-default" />
                                        </div>
                                    </div>
                                    
                                    



                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary float-right"><?php echo e(__('Update General
                                            Setting')); ?></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>
<script>
    $(function() {

            'use strict'
  
            $.uploadPreview({
                input_field: "#image-upload",
                preview_box: "#image-preview",
                label_field: "#image-label",
                label_default: "Choose File",
                label_selected: "Update Image",
                no_label: false,
                success_callback: null
            });

            $.uploadPreview({
                input_field: "#image-upload-icon",
                preview_box: "#image-preview-icon",
                label_field: "#image-label-icon",
                label_default: "Choose File",
                label_selected: "Update Image",
                no_label: false,
                success_callback: null
            });


            $.uploadPreview({
                input_field: "#image-upload-default",
                preview_box: "#image-preview-default",
                label_field: "#image-label-default",
                label_default: "Choose File",
                label_selected: "Update Image",
                no_label: false,
                success_callback: null
            });

        })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/backend/setting/general_setting.blade.php ENDPATH**/ ?>