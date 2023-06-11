
    <?php
        $clientElement = element('client.element');
        $clientContent = content('client_content.content');
    ?>

    <!-- Our corporate client starts -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold"><?php echo e(@$clientContent->data->title); ?></p>
        <hr class="hr_for_c_client">
    </div>

    <section class="card_container">
        <div class="container">
            <div class="cli"></div>
            <div class="row">
                <div class="">
                    <?php $__empty_1 = true; $__currentLoopData = $clientElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-3">
                            <div class="blue-box">
                                <img src="<?php echo e(@$item->data->image); ?>" class="c_logo" alt="">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Our corporate client ends -->
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/sections/corporate_client.blade.php ENDPATH**/ ?>