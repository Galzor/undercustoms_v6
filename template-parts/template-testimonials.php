<?php

/**
 * Template Name: Testimonials Page
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
      <div class="container py-4">
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

    <section class="common-section services-section border-top">
      <div class="container py-4">

        <div class="section-title text-center mb-4">
          <h2>Our Portfolios</h2>
          <p>Check out our quality products </p>
        </div>

        <div class="blog-posts">
          <div class="row">
            <?php
            // TO SHOW THE PAGE CONTENTS
            $args = array(
              'post_type' => 'testimonials',
              'posts_per_page' => 99,
              // 'category_name' => 'general',
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

    <!-- DISPLAY CALLTO SECTION -->
    <?php get_template_part('template-parts/content', 'callto-section'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
