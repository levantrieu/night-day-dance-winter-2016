<?php
/**
* The template for displaying archive instructors.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

text from archive-instructor.php

<?php
/*
* Loop through Categories and Display Posts within
*/
$post_type = 'instructors';

// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array('post_type' => $post_type) );

foreach( $taxonomies as $taxonomy ) :

	// Gets every "category" (term) in this taxonomy to get the respective posts
	$terms = get_terms( $taxonomy );

	foreach( $terms as $term ) : ?>

	<p><?php echo $term->name; ?></p>

	<?php
	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => -1,  //show all posts
		'hide_empty' => 0,
		'post_status' => 'publish',
		'order' => 'DESC',
		'tax_query' => array(
			array(
				'taxonomy' => $taxonomy,
				'field' => 'slug',
				'terms' => $term->slug,
	)));

	$posts = new WP_Query($args);

	if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>

	<?php if(has_post_thumbnail()) { ?>
		<div><?php the_post_thumbnail(); ?></div>
		<?php } ?>

			<?php  echo get_the_title(); ?>

		<?php endwhile; endif; ?>

	<?php endforeach;

endforeach; ?>

	<?php get_footer(); ?>
