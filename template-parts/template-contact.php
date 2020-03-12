<?php
/**
 * Template Name: Contact Us
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package undercustoms */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="title text-center">
        <h3 class="entry-title"> <?php the_title(); ?> </h3>
      </div>
    </div>

    <section class="common-section contact-section bg-white">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 text-center text-md-left">
            <div class="section-title">
              <p>Write to us </p>
              <h2> <span>Let's talk</span> Get in Touch! </h2>
            </div>
            <p class="lead">Our team is available to talk with you, 24/7/365 right on moment's notice, just give it a shot. </p>
            <!-- <p class="lead">Our background in financial mathematics and digital marketing, give us an analytical and quantitative approach to do just that. </p> -->

            <div class="row mt-4">
              <!-- <div class="col-md-12">
                <i class="fa fa-map-marker fa-2x text-color"></i>
                <h5 class="card-title mb-1 mt-2">Address</h5>
                <?php // $address_mod = ( !empty(get_theme_mod('undercustoms_contact_info_address')) ) ? get_theme_mod('undercustoms_contact_info_address') : 'Set Address in theme options' ; ?>
                <p class="card-text"> <?php // echo $address_mod; ?> </p>
              </div> -->
              <div class="col-md-6">
                <i class="fa fa-phone fa-2x text-color"></i>
                <h5 class="card-title mb-1 mt-2">Call us</h5>
                <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : 'Set Phone in theme options' ; ?>
                <p class="card-text"> <a href="tel:<?php echo str_replace(' ', '', $phone_mod); ?>"><?php echo $phone_mod; ?></a> </p>
              </div>
              <div class="col-md-6">
                <i class="fa fa-envelope fa-2x text-color"></i>
                <h5 class="card-title mb-1 mt-2">Email</h5>
                <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'Set Email in theme options' ; ?>
                <p class="card-text"> <a href="mailto:<?php echo $email_mod; ?>"><?php echo $email_mod; ?></a> </p>
              </div>
            </div>

          </div>
          <div class="col-md-6 pt-4 pt-md-0 pl-md-5">
            <div class="touch-form text-center text-md-left">
              <h4 class="jesse-faden">Share your story!</h4>
              <?php echo do_shortcode('[contact-form-7 id="536" title="Contact form"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="common-section contact-section py-5">
      <div class="container">
        <div class="card card-body">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65337495.96929028!2d13.221284835372032!3d1.7840699917875809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sin!4v1584025892218!5m2!1sen!2sin" frameborder="0" style="width: 100%; height: 400px; border:none; display:block;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
