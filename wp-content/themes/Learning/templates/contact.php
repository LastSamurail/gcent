<?php
/*
* Template Name: Page à contact
*/

?>
<?php get_header(); ?>
<?php if (get_field('contact_banner')) : ?>
    <section class="page-title" style="background-image:url(<?php echo TG_IMG . 'images/background/12.jpg' ?>)">
        <div class="pattern-layer" style="background-image: url(<?php echo get_field('banner_img')['url']; ?>)"></div>
        <div class="auto-container">
            <h2><?php the_field('banner_title'); ?></h2>
        </div>
    </section>
<?php endif; ?>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="pattern-layer" style="background-image: url(images/background/pattern-6.png)"></div>
    <div class="auto-container">
        <div class="inner-container">
            <!-- Sec Title Two -->
            <div class="sec-title-two centered">
                <h2>Ecrivez nous</h2>
            </div>


            <!-- Contact Form -->
            <div class="contact-form">

                <!-- Contact Form -->
                <form method="post" action="sendemail.php" id="contact-form">

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea name="message" placeholder="Write here..."></textarea>
                    </div>

                    <div class="form-group">
                        <button class="theme-btn btn-style-three" type="submit" name="submit-form"><span class="txt">Send Message</span></button>
                    </div>

                </form>

            </div>
            <!-- End Contact Form -->

        </div>
    </div>
</section>
<!-- End Contact Page Section -->

<!-- Map Section -->
<section class="map-section">
    <!-- Map Boxed -->
    <div class="map-boxed">
        <!--Map Outer-->
        <div class="map-outer">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.250121989597!2d1.1909088!3d6.1892467!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc64bc7def4debd2!2sCabinet%20GCENT!5e0!3m2!1sfr!2stg!4v1598969580277!5m2!1sfr!2stg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>
<!-- End Map Section -->

<!-- Call To Action Section Four -->
<section class="call-to-action-four">
    <div class="auto-container">
        <h2>Etes-vous prêt à travailler<br> avec nous.</h2>
        <a href="contact.html" class="theme-btn btn-style-three"><span class="txt">Commençons</span></a>
    </div>
</section>

<?php get_footer(); ?>