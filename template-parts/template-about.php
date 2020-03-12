<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="title text-center">
        <h3 class="entry-title"> <?php the_title(); ?> </h3>
      </div>
    </div>

    <section class="common-section about-section bg-white">
      <div class="container py-5">
        <div class="lead">
          <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post();
              the_content();
            endwhile;
            wp_reset_query();
          ?>
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
          <h2>Know about our Team<span class="text-dark"> behind the scenes</span> </h2>
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

    <section class="common-section about-section d-none">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-3">
            <div class="sidebar">
              <aside id="tertiary" class="widget-area">
                <div class="widget custom-widget-subpages">
                  <div class="custom-fields-right text-white text-center text-md-left">
                    <?php echo get_post_meta($post->ID, 'content-left', true); ?>
                  </div>
                </div>
              </aside>
            </div>
          </div>
          <div class="col-md-9">
            <div class="custom-fields-right card-items  text-center text-md-left">
              <?php echo get_post_meta($post->ID, 'content-right', true); ?>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="common-section about-section">
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <div class="sidebar">
              <aside id="tertiary" class="widget-area">
                <div class="widget custom-widget-subpages">
                  <h3 class="widget-title text-uppercase"> Our Strengths </h3>
                  <p class="text-white"> Our strengths are our people, processes and professionalism. Well structured teams with domain specialization are guided by visionary leaders who possess expertise and experience and are present to ensure excellent client service. </p>
                </div>
              </aside>
            </div>
          </div>

          <div class="col-md-9">
            <div class="row">

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">GREAT PASSION FOR UNPARALLED SERVICES</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">SIMPLIFICATION OF COMPLEX FITNESS MODELS</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">FINANCIAL STRATEGY FOR YOUR PLANS</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="card-title">VISIBLE RESULTS FOR YOUR GROWTH & FITNESS</h5>
                    <p class="card-text"> </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- DISPLAY CALLTO SECTION -->
    <?php get_template_part('template-parts/content', 'callto-section'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
