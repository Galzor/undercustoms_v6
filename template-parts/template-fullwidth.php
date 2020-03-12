<?php
/**
 * Template Name: Full-width(no sidebar)
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */

get_header(); ?>

<div id="content" class="site-content full-width">
  <main id="primary" class="content-area main-inner">

    <div class="container-fluid titlemon">
      <div class="title text-center">
        <h3 class="entry-title"> <?php the_title(); ?> </h3>
        <span class="line"></span>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-sm-12 col-md-12 content-actual pt-0 bg-white">
          <?php
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content', 'page' );
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            endwhile; // End of the loop.
          ?>
        </div>

      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
