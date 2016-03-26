<?php
/**
* The template for displaying class category.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php
    /*
    * Loop through Categories and Display Posts within
    */
    $post_type = 'classes';

    // Get all the taxonomies for this post type
    $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

    foreach( $taxonomies as $taxonomy ) :

      // Gets every "category" (term) in this taxonomy to get the respective posts
      $terms = get_terms( $taxonomy );

      foreach( $terms as $term ) : ?>

      <?php
      $args = array(
        'post_type' => $post_type,
        'posts_per_page' => -1,  //show all posts
        'tax_query' => array(
          array(
            'taxonomy' => $taxonomy,
            'field' => 'slug',
            'terms' => $term->slug,
          )
        )
      );
      $posts = new WP_Query($args);

      if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>

      <?php if(has_post_thumbnail()) { ?>
        <?php the_post_thumbnail(); ?>
        <?php } ?>

        <div><a href="<?php the_permalink(); ?>">See More</a></div>

        <?php endwhile; endif; ?>
      <?php endforeach;
    endforeach; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
