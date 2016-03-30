<?php
/**
* The template for displaying archive instructors.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
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
		$taxonomies = get_object_taxonomies( array('post_type' => $post_type) );

		foreach( $taxonomies as $taxonomy ) :

			// Gets every "category" (term) in this taxonomy to get the respective posts
			$terms = get_terms( $taxonomy );

			foreach( $terms as $term ) : ?>

			<div class="instructor-location"><?php echo $term->name; ?></div>
			<div class="location-group">
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

						<div class="instructor-single">
							<a href="<?php the_permalink(); ?>">
								<div>
									<?php if(has_post_thumbnail()) { ?>
										<div class="instructor-pic"><?php the_post_thumbnail( 'large' ); ?></div>
										<?php } ?>
											<div class="instructor-name">
												<?php echo get_the_title(); ?>
											</div>
									</div>
							</div>
						<?php endwhile; endif; ?>
					<?php endforeach; ?>
					</div>
				<?php endforeach; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
