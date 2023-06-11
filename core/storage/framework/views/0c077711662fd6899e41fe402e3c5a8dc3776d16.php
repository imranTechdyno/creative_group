<?php
    $faq = element('faq.element');
?>

<main class="main">

    <!-- background title image starts -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">FAQ</p>
        <hr class="hr_for_all">
</div>
    <!-- background title image starts -->

    <!-- shadow below the title image -->
    <div class="breadcrumbs">
        <div class="container">
            <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faqs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle <?php if($index > 0): ?> collapsed <?php endif; ?>"
                                    data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($index); ?>">
                                    <?php echo e($faqs->data->question); ?>

                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo e($index); ?>"
                            class="panel-collapse collapse <?php if($index == 0): ?> in <?php endif; ?>">
                            <div class="panel-body">
                                <p>
                                    <?php echo preg_replace('/(<[a-zA-Z0-9\s"\-=\'\/]+) style="[^"]*font-family:[^"]*"/i', '$1', $faqs->data->ans); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        </div> <!-- end container -->
    </div>
</main>
<?php /**PATH C:\laragon\www\unisoftdynamic\core\resources\views/frontend/sections/faq.blade.php ENDPATH**/ ?>