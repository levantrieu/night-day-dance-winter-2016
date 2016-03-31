<?php
/**
* The template for displaying class category.
*
* @package RED_Starter_Theme
*/

get_header(); ?>


<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
<div class="class-page-title"><h3>Weddings</h3></div>
<div class="desktop-border">
<article>
<section class="desktop-image">

    <img src="../wp-content/themes/night-day-dance/images/couple-legs.jpg" alt="Legs Dance Class" height="100%" width="100%">

  </section>
</div>
  <section>
      <?php
      global $post;
      $categories = get_the_category();
      $category = $categories[0];
      $category_name = 'wedding';
      $category_id = get_cat_ID($category_name);

      $loop = new WP_Query( array( 'post_type' => 'classes', 'cat' => $category_id ) ); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); ?>

        <div class="entry-content">
          <?php the_content(); ?>
            </div>

          <div class="category-image-loop">
            <?php the_post_thumbnail( 'large' ); ?>
          </div>
        </section>
    </article>
    <?php endwhile; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
