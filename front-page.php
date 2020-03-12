<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercustoms
 */

get_header();
?>

<div id="frontpage" class="frontpage-area">

  <section class="hero-section">
    <div class="hero-slider">
      <div id="carouselundercustoms" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000" data-pause="false">

        <ol class="carousel-indicators">
          <li data-target="#carouselundercustoms" data-slide-to="0" class="active"></li>
          <li data-target="#carouselundercustoms" data-slide-to="1"></li>
          <li data-target="#carouselundercustoms" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider active">
            <img src="<?php echo ( !empty(get_theme_mod('undercustoms_slider1_image')) ) ? get_theme_mod('undercustoms_slider1_image') : get_template_directory_uri().'/img/default.jpg' ; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <?php echo get_theme_mod('undercustoms_slider1_caption'); ?>
              </div>
              <!--
              <h4>Sub Heading</h4>
              <h2>Main Heading</h2>
              <p>A small paragraph as complimentory text</p>
              <a href="#" class="btn">Know More</a>
              -->
            </div>
          </div>

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider">
            <img src="<?php echo ( !empty(get_theme_mod('undercustoms_slider2_image')) ) ? get_theme_mod('undercustoms_slider2_image') : get_template_directory_uri().'/img/default.jpg' ; ?>" alt="">
            <div class="carousel-caption text-right">
              <div class="container">
                <?php echo get_theme_mod('undercustoms_slider2_caption'); ?>
              </div>
            </div>
          </div>

          <!-- for the slide -->
          <div class="carousel-item jumbo-slider">
            <img src="<?php echo ( !empty(get_theme_mod('undercustoms_slider3_image')) ) ? get_theme_mod('undercustoms_slider3_image') : get_template_directory_uri().'/img/default.jpg' ; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <?php echo get_theme_mod('undercustoms_slider3_caption'); ?>
              </div>
            </div>
          </div>

        </div>

        <div class="carousel-controls">
          <a class="carousel-control-prev" href="#carouselundercustoms" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselundercustoms" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- <div class="carousel-overlay"> </div> -->
      </div>
    </div>
  </section>

  <section id="about" class="common-section about-section bg-white">
    <div class="container py-5">
      <div class="section-title text-center mb-4">
        <h2> <span>Instaboost</span> </h2>
        <p> Digital Marketing Simplified </p>
      </div>
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="section-content lead text-center">
            <?php
            // TO SHOW THE PAGE CONTENTS
            while (have_posts()) : the_post();
              the_content();
            endwhile;
            wp_reset_query();
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-section services-section">
    <div class="container py-5">

      <div class="section-title text-center mb-5">
        <p>Our Services</p>
        <h2> Why choose <span>instaboost?</span></h2>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-icon text-center">
                    <i class="fa fa-2x fa-ad text-color"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="card-parts">
                    <h5 class="card-title mb-1"> We Work With Any Ad Spend Budget </h5>
                    <p class="card-text text-muted"> Most SMMA’s have an ad spend budget criteria and will refuse service if you don’t meet that standard. At InstaBoost, we work with any ad spend budget and help you scale up! You can’t invest more into your budget if you aren’t getting results.  </p>
                    <!-- <a href="<?php echo site_url(); ?>/services/"> Read More </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-icon text-center">
                    <i class="fa fa-2x fa-infinity text-color"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="card-parts">
                    <h5 class="card-title mb-1"> Super Duper Infinite Versatility  </h5>
                    <p class="card-text text-muted"> There’s some agencies out there that will refuse to work with you because of your specific business niche. At InstaBoost, we have an uncanny ability to adapt in every situation. This simply means that it doesn’t matter what kind of business you own, we’ve got you covered!</p>
                    <!-- <a href="<?php echo site_url(); ?>/services/"> Read More </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-icon text-center">
                    <i class="fa fa-2x fa-money-bill-wave-alt text-color"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="card-parts">
                    <h5 class="card-title mb-1"> Super Affordable Pricing Plans </h5>
                    <p class="card-text text-muted"> Speaking of budgets, you don’t have to pay an arm and a leg to get started. Our pricing plans are built in tiers based on your ad spend budget. Most agencies have a set price on how they feel their services are worth.  </p>
                    <!-- <a href="<?php echo site_url(); ?>/services/"> Read More </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-icon text-center">
                    <i class="fa fa-2x fa-user-cog text-color"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="card-parts">
                    <h5 class="card-title mb-1">Client Portal Access </h5>
                    <p class="card-text text-muted"> Speaking of budgets, you don’t have to pay an arm and a leg to get started. Our pricing plans are built in tiers based on your ad spend budget. Most agencies have a set price on how they feel their services are worth.  </p>
                    <!-- <a href="<?php echo site_url(); ?>/services/"> Read More </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-icon text-center">
                    <i class="fa fa-2x fa-user-friends text-color"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="card-parts">
                    <h5 class="card-title mb-1"> Direct Contact With Your Team </h5>
                    <p class="card-text text-muted"> With every project we work together on, you’ll have direct contact with the personal team assigned to your project! This means that you’ll be able to communicate directly with the person in charge of each specific task and stay up to date with everything! </p>
                    <!-- <a href="<?php echo site_url(); ?>/services/"> Read More </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                  <div class="card-icon text-center">
                    <i class="fa fa-2x fa-calendar-week text-color"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="card-parts">
                    <h5 class="card-title mb-1"> Weekly Statistic Reporting </h5>
                    <p class="card-text text-muted">It's always a good thing when the data about your situation is sent to you on a weekly basis. Whether you’re getting reports on your website or social media ads campaign, we make sure that the information you receive is comprehensive and easy to understand! </p>
                    <!-- <a href="<?php echo site_url(); ?>/services/"> Read More </a> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <section class="common-section services-section bg-dark">
    <div class="container py-5">

      <div class="section-title text-center text-white mb-5">
        <p> Unparalled Expertise </p>
        <h2> Your digital marketing... <strong class="text-color">Done</strong></h2>
      </div>

      <div class="row">

        <div class="col-md-6 col-lg-3 mb-3">
          <div class="cardxxx h-100">
            <div class="card-body text-center text-md-left text-white">
              <div class="card-icon mb-2">
                <i class="fa fa-2x fa-clock text-color"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title"> Post <br> Scheduling </h5>
                <!-- <p class="card-text text-muted"> xxx </p> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-3">
          <div class="cardxxx h-100">
            <div class="card-body text-center text-md-left text-white">
              <div class="card-icon mb-2">
                <i class="fa fa-2x fa-globe text-color"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title"> Website <br> Management </h5>
                <!-- <p class="card-text text-muted"> xxx </p> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-3">
          <div class="cardxxx h-100">
            <div class="card-body text-center text-md-left text-white">
              <div class="card-icon mb-2">
                <i class="fa fa-2x fa-copyright text-color"></i>
              </div>
              <div class="card-parts">
              <h5 class="card-title"> Brand <br> Awareness</h5>
                <!-- <p class="card-text text-muted"> xxx </p> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-3">
          <div class="cardxxx h-100">
            <div class="card-body text-center text-md-left text-white">
              <div class="card-icon mb-2">
                <i class="fa fa-2x fa-star-of-life text-color"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title"> Lead <br> Generation </h5>
                <!-- <p class="card-text text-muted"> xxx </p> -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section marketing-section">
    <div class="parallax-box">
      <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/color-bg2.jpg">
    </div>
    <div class="container py-5">
      <div class="row">
        <div class="col-md-7">
          <div class="section-title text-center text-md-left">
            <p> Marketing </p>
            <h2> Full Service <span>Digital Marketing</span> </h2>
          </div>
          <p class="lead text-center text-md-left"> From SEO to Online PR, we deliver marketing campaigns that target and convert your key customers. </p>

          <div class="row">
            <div class="col-sm-4 mb-3">
              <div class="card shadow-card h-100">
                <div class="card-body p-3 text-center">
                  <i class="fab fa-2x fa-facebook-square text-color"></i>
                  <h5 class="card-title mt-3"> Facebook Services </h5>
                  <p class="card-text text-muted"> A new Facebook Business page to target your base audience.  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card shadow-card h-100">
                <div class="card-body p-3 text-center">
                  <i class="fab fa-2x fa-instagram text-color"></i>
                  <h5 class="card-title mt-3"> Instagram Services </h5>
                  <p class="card-text text-muted"> An Instagram Business account to boost your brand awareness.  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mb-3">
              <div class="card shadow-card h-100">
                <div class="card-body p-3 text-center">
                  <i class="fa fa-2x fa-globe text-color"></i>
                  <h5 class="card-title mt-3"> Website Services </h5>
                  <p class="card-text text-muted"> A top notch website to build trust and credibility for your brand. </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="text-right">
            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/social.png" alt="">
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section services-section">
    <div class="container py-5 pb-4">
      <div class="section-title text-center mb-5">
        <p> Web Development </p>
        <h2> Done for <span>Your Websites</span> </h2>
      </div>
      <div class="row pt-3">

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="card icon-darky shadow-card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-2x fa-window-restore"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title mb-1"> 100% Free Website Build </h5>
                <p class="card-text text-muted"> We’ll build your website the way you want it 100% free of charge. No strings attached!  </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="card icon-darky shadow-card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-2x fa-atlas"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title mb-1"> Free Domain Name  </h5>
                <p class="card-text text-muted"> You’ll never have to pay any registration or renewal fees for your domain name.  </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="card icon-darky shadow-card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-2x fa-at"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title mb-1"> 100 Business Emails </h5>
                <p class="card-text text-muted"> You’ll have 100 business email addresses that can be integrated with any mailbox.  </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="card icon-darky shadow-card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-2x fa-headset"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title mb-1">Day to Day Support </h5>
                <p class="card-text text-muted"> We’ll handle all of the day to day workings of your website for you. Easy peasy! </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="card icon-darky shadow-card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-2x fa-edit"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title mb-1"> Revisions & Updates </h5>
                <p class="card-text text-muted">We’ll revise, update, and redesign your website for you upon request.  </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
          <div class="card icon-darky shadow-card h-100">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-2x fa-user-cog"></i>
              </div>
              <div class="card-parts">
                <h5 class="card-title mb-1"> Client Portal Access </h5>
                <p class="card-text text-muted"> Get direct access to your personal team 24/7/365 right on your client dashboard. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section team-section">
    <div class="parallax-box">
      <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/clients-bg.jpg">
    </div>
    <div class="container py-5">
      <div class="section-title text-center mb-2 text-white text-shadow">
        <p>Our Team</p>
        <h2>Know about our <span class="text-dark">Team behind the scenes</span> </h2>
      </div>

      <div class="text-center py-4">
        <div class="tiny-slider tiny-silder-quadra">

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h6 class="card-title mb-1">Name Lastname</h6>
                <p class="card-text text-muted">Web Developer</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h6 class="card-title mb-1">Name Lastname</h6>
                <p class="card-text text-muted">Web Developer</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h6 class="card-title mb-1">Name Lastname</h6>
                <p class="card-text text-muted">Web Developer</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h6 class="card-title mb-1">Name Lastname</h6>
                <p class="card-text text-muted">Web Developer</p>
              </div>
            </div>
          </div>

          <div class="tiny-item">
            <div class="card">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h6 class="card-title mb-1">Name Lastname</h6>
                <p class="card-text text-muted">Web Developer</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="common-section gallery-section bg-white">
    <div class="container pt-5">
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="section-title text-center text-md-left">
            <p>our gallery </p>
            <h2>See all the fun <span>we can have here</span> </h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="text-center text-md-right pt-2 pt-md-5">
            <a class="btn btn-primary" href="<?php echo site_url(); ?>/gallery/"> <i class="fa fa-images"></i> View Gallery </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid pb-5">
      <div class="text-center py-4">
        <div class="tiny-slider tiny-slider-center">

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img1.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img1.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img2.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img2.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img3.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img3.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img4.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img4.jpg" alt="">
            </a>
          </div>

          <div class="tiny-item">
            <a data-fancybox="gallery" href="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img5.jpg">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery/img5.jpg" alt="">
            </a>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="common-section testmonials-section">
    <div class="parallax-box">
      <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/color-bg.jpg">
    </div>
    <div class="container py-5">
      <div class="row">
        <div class="col-md-4">
          <div class="section-title text-center text-md-left text-white text-shadow">
            <p>Testimonials</p>
            <h2><span class="text-dark">The words </span> on the street</h2>
          </div>
          <p class="lead text-center text-md-left text-white text-shadow"> From SEO to Online PR, we deliver marketing campaigns that target and convert your key customers. <br> Get in touch with us today!</p>
        </div>

        <div class="col-md-8">
          <div class="testimonial-slider">
            <div class="bd-example">
              <div id="carouselTestimonials" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">

                  <?php
                  // TO SHOW THE PAGE CONTENTS
                  $active = 1;
                  $args = array(
                    'posts_per_page' => 5,
                    'post_type' => 'testimonials',
                    'orderby' => 'date',
                    'order' => 'DESC'
                  );
                  query_posts($args);
                  while (have_posts()) : the_post();
                    ?>
                    <div class="carousel-item <?php echo ($active==1) ? 'active' : ''; ?>">
                      <div class="card testimonial-item">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="card-img" alt="">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <i class="fa fa-quote-right fa-2x"></i>
                              <h5 class="card-title mt-3"> <?php the_title(); ?> </h5>
                              <div class="card-text"><?php the_content(); ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    $active++;
                  endwhile;
                  wp_reset_query();
                  ?>

                  <!-- <div class="carousel-item active">
                    <div class="card testimonial-item">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" class="card-img" alt="">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <i class="fa fa-quote-right fa-2x"></i>
                            <h5 class="card-title mt-3"> Jack Connor </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->


                </div>
                <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
                  <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                  <span class="sr-only">Previous</span>
                  <i class="fa fa-chevron-left"></i>
                </a>
                <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
                  <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                  <span class="sr-only">Next</span>
                  <i class="fa fa-chevron-right"></i>

                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section contact-section bg-white">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-7 text-center text-md-left">
          <div class="section-title">
            <p>FOCUS ON WHAT'S IMPORTANT </p>
            <h2> <span>Let's talk about improving</span> your business marketing </h2>
          </div>
          <p class="lead">Our priorities have always remained the same: to help companies maximize their marketing ROI, accelerate customer growth, and gain a lasting competitive edge in their industries. </p>
          <p class="lead">Our background in financial mathematics and digital marketing, give us an analytical and quantitative approach to do just that. </p>
          <a class="btn btn-primary" href="<?php echo site_url(); ?>/contact/"> <i class="fa fa-paper-plane"></i> Write to us </a>
        </div>
        <div class="col-md-5 pt-4 pt-md-0 pl-md-5">
          <div class="touch-form text-center text-md-left">
            <h4 class="jesse-faden">Share your story!</h4>
            <?php echo do_shortcode('[contact-form-7 id="536" title="Contact form"]'); ?>
            <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/section2.jpg" alt=""> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-section blog-section">
    <div class="container py-5">

      <div class="row mb-4">
        <div class="col-md-6">
          <div class="section-title text-center text-md-left">
            <p>Recent Blog </p>
            <h2>Read Latest Blogs <span>& Articles from us!</span> </h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="text-center text-md-right pt-2 pt-md-5">
            <a class="btn btn-primary" href="<?php echo site_url(); ?>/blog/"> <i class="fa fa-newspaper"></i> View Blog </a>
          </div>
        </div>
      </div>

      <div class="blog-posts">
        <div class="row">
          <?php
          // TO SHOW THE PAGE CONTENTS
          $args = array(
            'posts_per_page' => 3,
            // 'category_name' => 'exercises',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          query_posts($args);
          while (have_posts()) : the_post();
            ?>
            <div class="col-md-4">
              <?php
              get_template_part('template-parts/content', 'item');
              ?>
            </div>
            <?php
          endwhile;
          wp_reset_query();
          ?>
        </div>
      </div>

    </div>
  </section>

</div>

<?php
get_footer();
