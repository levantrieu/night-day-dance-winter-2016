<?php
/**
* The template for displaying archive instructors.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

text from archive-instructor.php

<header class="page-header">
	<?php
	the_archive_title( '<h1 class="page-title">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
	?>
</header>

<?php
/*
* Loop through Categories and Display Posts within
*/
$post_type = 'instructors';

// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );

foreach( $taxonomies as $taxonomy ) :

	// Gets every "category" (term) in this taxonomy to get the respective posts
	$terms = get_terms( $taxonomy );

	foreach( $terms as $term ) : ?>

	<p><?php echo $term->name; ?></p>

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
		<div><?php the_post_thumbnail(); ?></div>
		<?php }
		/* no post image so show a default img */
		else { ?>
			<img src="<?php bloginfo('template_url'); ?>/assets/img/default-img.png" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" width="110" height="110" />
			<?php } ?>

			<?php  echo get_the_title(); ?>

		<?php endwhile; endif; ?>

	<?php endforeach;

endforeach; ?>

<?php get_footer(); ?>
