<?php
$achievmentContent=content('achievment.content');
?>

<!-- Achievement of the company starts -->
<section class="home-company">
    <div class="">
        <!-- background image here -->
        <div class="achievement-background">
            <div class="achieve_head"><?php echo e($achievmentContent->data->title); ?></div>
            <!--  -->
            <div class="row achievemargin">
                <div class="col-md-6 col-sm-12">
                    <div class="">
                        <img src="<?php echo e($achievmentContent->data->image); ?>" alt="" />
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="achievet">
                        <h1><?php echo e($achievmentContent->data->sub_title); ?></h1>
                    </div>
                    <div class="achivep">
                        <p><?php echo e($achievmentContent->data->description); ?></p>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</section>
<!-- Achievement of the company ends -->
<?php /**PATH C:\laragon\www\New Project\core\resources\views/frontend/sections/achievment.blade.php ENDPATH**/ ?>