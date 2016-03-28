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
// get all the categories from the database
$cats = get_categories('taxonomy=types');

// loop through the categries
foreach ($cats as $cat) {
	// setup the cateogory ID
	$cat_id= $cat->term_id;
	// Make a header for the cateogry
	echo "<h2>".$cat->name."</h2>";
	// create a custom wordpress query

	$args = array(
		'tax_query' => array(
			array(
				'taxonomy' => 'types',
				'field' => 'slug',
				'terms' => ".$cat->name."
			)
		)
	);
	$query = query_posts( $args );
	// start the wordpress loop!
	if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php
	$custom = get_post_custom($post->ID);
	$price = $custom["price"][0];
	$short_text = $custom["short_text"][0];
	?>

	<div id="gallery" class="one_column">

		<ul class="portfolio">

			<li class="clearfix">
				<div class="clearfix">
					<span class="image-border"><a class="image-wrap" href="<?php the_permalink() ?>" title="<?php _e('Permanent Link to', 'theme1512');?> <?php the_title_attribute(); ?>" ><?php the_post_thumbnail( 'portfolio-post-thumbnail-xl' ); ?></a></span>
					<div class="folio-desc">
						<?php // create our link now that the post is setup ?>
						<a href="<?php the_permalink();?>"><?php the_title(); ?> | <?php echo $price; ?></a><br />
						<p><?php echo $short_text; ?></p>
						<p><a href="<?php the_permalink(); ?>">View Details</a></p>

					</div>
				</div>
			</li>
		</div>

	<?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
	<?php wp_reset_query(); ?>
	<?php } // done the foreach statement ?>

	<?php get_footer(); ?>
