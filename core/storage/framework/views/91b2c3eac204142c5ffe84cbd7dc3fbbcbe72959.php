
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
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
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
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <h1>Dhaka Office</h1>
                            <p class="c_text"><span style="font-weight: bold">Address:</span>T. K. Bhaban (2nd Floor),
                                13,
                                Karwan Bazar,
                                Dhaka-1215, Bangladesh.</p>
                            <p>
                                <a href="tel:02-9115210" class="c_text"><span
                                        style="font-weight: bold">Phone:</span>02-9115210</a>
                            </p>
                            <a></a>
                            <p>
                                <a href="mailto:info@unnisoft.com" class="c_text"><span
                                        style="font-weight: bold">Email:</span>info@unnisoft.com</a>
                            </p>
                        </div>
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
    .card h1{
        padding-left: 20px;
    }

    .card-body {
        padding: 30px;
    }
</style>
<?php /**PATH /home/novajwmx/unisoft.academiaitbd.com/core/resources/views/frontend/sections/contact.blade.php ENDPATH**/ ?>