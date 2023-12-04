<?php /* Template Name: Contact */

get_header();

 ?>



<!----------------- Common banner------------->

<section class="cmn-banner">
    <div class="color-overlay"></div>
    <div class="bannr-inner">
    <img src="<?php echo get_template_directory_uri(); ?>/images/about/about-banner.jpeg" alt="visit-banner.jpg">
    </div>
</section>

<!----------------- Common banner End------------->

<!----------------- Contact us section start------------->
<section class="contactsec py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h2><a href="tel:<?php echo get_field('phone_number',36); ?>">Phone No: <?php echo get_field('phone_number',36); ?></a></h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <h2><a href="email:<?php echo get_field('email_2',36); ?>">Email: <?php echo get_field('email_2',36); ?></a></h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cntctsec py-3">
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                    <p><?php echo get_field('contact_add_content'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-home"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Address</h4>
                            <p><?php echo get_field('address',36); ?></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Phone</h4>
                            <p><?php echo get_field('phone_number',36); ?></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p><?php echo get_field('email',36); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <?php echo do_shortcode('[contact-form-7 id="68aa9f1" title="Contact Page Form"]'); ?>
                    <!-- <form action="" id="contact-form">
                        <h2>Send Message</h2>
                        <div class="input-box">
                            <input type="text" required="true" name="">
                            <span>Full Name</span>
                        </div>

                        <div class="input-box">
                            <input type="email" required="true" name="">
                            <span>Email</span>
                        </div>

                        <div class="input-box">
                            <textarea required="true" name=""></textarea>
                            <span>Type your Message...</span>
                        </div>

                        <div class="input-box">
                            <input type="submit" value="Send" name="">
                        </div>
                    </form> -->
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="address">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14736.450868512255!2d88.41590775541994!3d22.57488719999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275af6caba055%3A0x82e27cb070bb5b5a!2sCollege%20More!5e0!3m2!1sen!2sin!4v1698816963462!5m2!1sen!2sin"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------Contact usd sewction end------------->







 <?php get_footer(); ?>