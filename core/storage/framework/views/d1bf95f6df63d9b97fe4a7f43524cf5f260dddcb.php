<?php

$sister_concernElement = element('sister_concern.element');
?>
<header>
    <div class="header-area">
        <nav class="navbar navbar-default container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(getFile('logo',@$general->logo)); ?>" class="m_logo" alt="" />
                        </a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav main-menu">
                        <li class="">
                            <a href="<?php echo e(url('/')); ?>"> Home </a>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(url('mission-and-vission')); ?>">Mission & Vision</a></li>
                                <li><a href="<?php echo e(url('our-approach')); ?>">Our Approach</a></li>
                                <li><a href="<?php echo e(url('our-team')); ?>">Our Team</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sister Concern<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php $__currentLoopData = $sister_concernElement; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('sister-concern-details', $item->data->slug)); ?>"><?php echo e($item->data->title); ?></a></li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="<?php echo e(url('all-product')); ?>"> Products </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="<?php echo e(url('corporate-clients')); ?>"> Corporate Clients</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo e(url('all-news-and-events')); ?>">News & Events</a></li>
                            
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="<?php echo e(url('career')); ?>"> Careers</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="<?php echo e(url('contact')); ?>"> Contact Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
    </div>
</header>
<!-- header section close --><?php /**PATH C:\laragon\www\New Project\core\resources\views/frontend/layout/header.blade.php ENDPATH**/ ?>