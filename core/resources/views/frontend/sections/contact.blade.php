{{-- contact section --}}
<div class="page-title text-center">
    <p class="contact_tag1 text-center text-bold">Contact Us</p>
    <hr class="hr_for_all">
    <p class="contact_tag text-center text-bold">Let’s Get in touch.</p>
</div>
<section class="contact_section">
    <div class="container contact_form">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <form action="/sendhtmlemail" method="post">
                                @csrf
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
                            <div>
                                <h1>Dhaka Office</h1>
                                <p class="c_text"><span style="font-weight: bold">Address:</span>{{ $general->address }}
                                </p>
                                <p>
                                    <a href="tel:{{ $general->phone }}" class="c_text"><span
                                            style="font-weight: bold">Phone:</span>{{ $general->phone }}</a>
                                </p>
                                <a></a>
                                <p>
                                    <a href="mailto:{{ $general->site_email }}" class="c_text"><span
                                            style="font-weight: bold">Email:</span>{{ $general->site_email }}</a>
                                </p>
                            </div>
                            <div>
                                <h1>Chittagong Office</h1>
                                <p class="c_text"><span style="font-weight: bold">Address:</span>{{ $general->address }}
                                </p>
                                <p>
                                    <a href="tel:{{ $general->phone }}" class="c_text"><span
                                            style="font-weight: bold">Phone:</span>{{ $general->phone }}</a>
                                </p>
                                <a></a>
                                <p>
                                    <a href="mailto:{{ $general->site_email }}" class="c_text"><span
                                            style="font-weight: bold">Email:</span>{{ $general->site_email }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58409.04509545667!2d90.39105376485865!3d23.79848850660288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7786c61f51f%3A0x31f191875b77c535!2sUnisoft!5e0!3m2!1sen!2sbd!4v1686202067714!5m2!1sen!2sbd"  height="435" style="border:0;width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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
