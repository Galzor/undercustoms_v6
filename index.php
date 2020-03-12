<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
          <h3 class="entry-title"> <?php wp_title(''); ?> </h3>
        </div>
      </div>

      <div class="container">
        <div class="row py-5">

          <div class="col-md-8 col-lg-9 content-actualxxx">

            <?php
            if ( have_posts() ) :

              if ( is_home() && ! is_front_page() ) :
                ?>
                <header>
                  <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php
              endif;

              /* Start the Loop */
              while ( have_posts() ) :
                the_post();
                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', 'blogpost' );
                // get_template_part( 'template-parts/content', get_post_type() );

              endwhile;
              the_posts_navigation()
              ;
            else :

              get_template_part( 'template-parts/content', 'none' );

            endif;
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
