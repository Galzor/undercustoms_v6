<?php
/**
 * Template part for displaying blog posts in pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package undercustoms
 */
?>

<div class="card blogpost-item mb-4">
  <div class="row no-gutters">
    <div class="col-md-4">
      <a href="<?php the_permalink() ?>">
        <?php if ( has_post_thumbnail() ) { ?>
          <img class="card-img cover-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <?php } else { ?>
          <img class="card-img cover-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg" alt="" />
        <?php } ?>
      </a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-category"><?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
          $cat_link = get_category_link( $categories[0]->term_id );
          $cat_name = $categories[0]->name;
          echo "<a href='$cat_link'>$cat_name</a>";
        }
        ?></h6>
        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
        <div class="card-text"><?php echo excerpt(15); ?> <a href="<?php the_permalink() ?>"><strong>Read More</strong></a> </div>
        <p class="card-text pt-2"><small class="text-muted"><?php the_time('M j, Y') ?></small></p>
        <!-- <a class="btn btn-dark btn-sm" href="<?php the_permalink() ?>">Read More</a> -->
      </div>
    </div>
  </div>
</div>
