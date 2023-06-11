
<div class="page-title text-center">

</div>
<section class="contact_section">

    <div class="contact_tag_align">
        <p class="contact_tag1 text-center text-bold">Contact Us</p>
        <p class="contact_tag text-center text-bold">Let’s Get in touch.</p>
    </div>
    <div class="container contact_form">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <form action="/sendhtmlemail" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mt-4">
                                    <input class="form-control pb" type="text" name="name" placeholder="Name*"
                                        required>
                                </div>
                                <div class="form-group mt-4">
                                    <input class="form-control pb" type="text" name="contac_no"
                                        placeholder="Contact No*" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input class="form-control pb" type="email" name="email"
                                        placeholder="Email Address*" required>
                                </div>
                                <div class="form-group mt-4">
                                    <textarea name="message" class="form-control pb" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit"
                                        class="mt-5 btn btn-sm  contact_form_submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <div>
                                <h1>Dhaka Office</h1>
                                <p class="c_text"><span style="font-weight: bold">Address:</span><?php echo e($general->address); ?>

                                </p>
                                <p>
                                    <a href="tel:<?php echo e($general->phone); ?>" class="c_text"><span
                                            style="font-weight: bold">Phone:</span><?php echo e($general->phone); ?></a>
                                </p>
                                <a></a>
                                <p>
                                    <a href="mailto:<?php echo e($general->site_email); ?>" class="c_text"><span
                                            style="font-weight: bold">Email:</span><?php echo e($general->site_email); ?></a>
                                </p>
                            </div>
                            <div>
                                <h1>Chittagong Office</h1>
                                <p class="c_text"><span style="font-weight: bold">Address:</span><?php echo e($general->address); ?>

                                </p>
                                <p>
                                    <a href="tel:<?php echo e($general->phone); ?>" class="c_text"><span
                                            style="font-weight: bold">Phone:</span><?php echo e($general->phone); ?></a>
                                </p>
                                <a></a>
                                <p>
                                    <a href="mailto:<?php echo e($general->site_email); ?>" class="c_text"><span
                                            style="font-weight: bold">Email:</span><?php echo e($general->site_email); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                        <p><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d456.4099185393717!2d90.41310760439248!3d23.773064844042636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73fae087717%3A0xcd4edb206f66c1b2!2sUniform!5e0!3m2!1sen!2sbd!4v1686116666782!5m2!1sen!2sbd"
                                width="300" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .card {
        width: 100% !important;
    }

    .card h1 {
        padding-left: 20px;
    }

    .card-body {
        padding: 30px;
    }
</style>
<?php /**PATH C:\xampp\htdocs\unisoft\core\resources\views/frontend/sections/contact.blade.php ENDPATH**/ ?>