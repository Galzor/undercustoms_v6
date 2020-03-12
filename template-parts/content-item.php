<?php
/**
 * Template part for items in blog or category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package undercustoms
 */
?>
<div class="card blog-item mb-4">
  <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
  <div class="card-body">
    <!-- <h5> <?php //the_category( ', ' ); ?> </h5>    -->
    <h5 class="card-title"> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h5>
    <p class="card-text text-muted"><?php echo excerpt(15); ?></p>
    <a class="btn btn-primary btn-sm" href="<?php the_permalink() ?>">Read More</a>
  </div>
</div>
