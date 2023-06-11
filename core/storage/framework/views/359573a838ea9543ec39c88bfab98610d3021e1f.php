<?php
    $footerContent = content('footer.content');
    $footerSocial = element('footer.element');
?>


<section class="home-partners">
    <div class="container">
        <div class="section-title text-center">
            <div class="spacer-20"></div>
        </div>

    </div>
</section>
</main>
<footer>
    <div class="footer">
        <div class="container">
            <div class="row pre-footer justify-content-center">
                <div class="col-md-5">
                    <div class="contact-box">

                        <div class="contact-details">
                            <h4 class="pre-footer-title">Let's Start The Journy With Us</h4>
                            <p>
                                We Are Ready To Servey
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="contact_btn_area">
                        <div class="contact-box">
                            <a href="<?php echo e(url('about-us')); ?>" class="about_btn1">About Us</a>
                            <a href="<?php echo e(url('contact')); ?>" class="about_btn2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row widgets">
            <div class="col-md-4 col-sm-6">
                <div class="about-txt widget">
                    <img src="<?php echo e(getFile('logo', @$general->footer_logo)); ?>" alt="logo" />
                    <p><?php echo e($footerContent->data->footer_short_description); ?></p>

                </div>
            </div>
            <div class="col-md-2 col-sm-6 f_company">
                <div class="quick-links widget">
                    <h2 class="widget-title">Company</h2>
                    <ul>
                        <li>
                            <a href="<?php echo e(url('about-us')); ?>"> About Unisoft</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('contact')); ?>"> Contact Us </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('privacy-policy')); ?>"> Privacy Policy </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('terms-and-condition')); ?>"> Terms & Condition </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('faq')); ?>"> FAQ </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="spacer-50 visible-sm"></div>
            <div class="col-md-3 col-sm-6">
                <div class="our-services widget">
                    <h2 class="widget-title">QUICK LINKS</h2>
                    <ul>
                        <li>
                            <a href="<?php echo e(url('all-sister-concern')); ?>">
                                Sister Concern</a>
                        </li>
                        <li>
                            <a href=""> Board Members</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('career')); ?>"> Career </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('all-news-and-events')); ?>">News And Event </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="newsletter widget ico">
                    <h2 class="widget-title">FOLLOW US</h2>
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:<?php echo e($general->site_email); ?>"><?php echo e($general->site_email); ?></a>
                    </div><br>

                    <div class="icon">
                        <i class="fa fa-phone"></i>
                        <a href="tel:<?php echo e($general->phone); ?>"><?php echo e($general->phone); ?></a>
                    </div><br>
                    <div class="widgets-social">
                        <a href="<?php echo e($general->facebook); ?>" class="face">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo e($general->twitter); ?>" class="tweet">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo e($general->linked_in); ?>" class="linkdin">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="<?php echo e($general->youtube); ?>" class="youtube">
                            <i class="fa-brands fa-youtube" aria-hidden="true" style="padding-top: 6px;
                            font-size: 22px;"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright">
        <div class="container">
            <div class="row copyright-bar">
                <div class="col-md-12">
                    <p>
                        Copyright©2022 Unisoft All rights reserved. Design and Developed by <a href="https://www.techdynobd.com/" target="_blank"><span class="tdbd_url">Techdyno BD Ltd.</span></a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>
<a href="#0" class="cd-top"> Top </a>
</div>
<?php /**PATH C:\laragon\www\New_Project\core\resources\views/frontend/layout/footer.blade.php ENDPATH**/ ?>