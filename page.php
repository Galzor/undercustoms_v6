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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="titlemon">
        <div class="title text-center">
          <h3 class="entry-title"> <?php the_title(); ?> </h3>
        </div>
      </div>

      <div class="container">
        <div class="row py-5">

          <div class="col-md-8 col-lg-9 content-actual">

            <?php
            while ( have_posts() ) :
              the_post();
              get_template_part( 'template-parts/content', 'page' );
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            endwhile; // End of the loop.
            ?>

          </div>

          <div class="col-md-4 col-lg-3 sidebar">
            <!-- sidebar.php heavily modified -->
            <?php get_sidebar(); ?>
          </div>

        </div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
