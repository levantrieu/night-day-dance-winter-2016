<?php
/**
* The template for displaying archive instructors.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area-instructors">
	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
	</header>
	<main id="main" class="site-main" role="main">

		<!-- Loop through Categories and Display Posts within -->
		<?php $post_type = 'instructors'; ?>

		<!-- Get all the taxonomies for this post type -->
		<?php
			$taxonomies = get_object_taxonomies( array('post_type' => $post_type) );
		?>

		<?php foreach( $taxonomies as $taxonomy ) : ?>

			<!-- // Gets every "category" (term) in this taxonomy to get the respective posts -->
			<?php $terms = get_terms( $taxonomy, array( 'order' => 'DESC', 'orderby' => 'label' ) ); ?>

			<?php foreach( $terms as $term ) : ?>

				<div class="instructor-location"><?php echo $term->name; ?></div>

					<?php
					$args = array(
						'post_type' => $post_type,
						'posts_per_page' => -1,  //show all posts
						'hide_empty' => 0,
						'post_status' => 'publish',
						'order' => 'ASC',
						'orderby' => 'title',
						'tax_query' => array(
							array(
								'taxonomy' => $taxonomy,
								'field' => 'slug',
								'terms' => $term->slug,
							))); ?>

							<?php $posts = new WP_Query($args); ?>
							<div class="location-group">
							<?php if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); ?>

								<div class="instructor-single">
									<a href="<?php the_permalink(); ?>">
										<div class="instructor-wrapper">
											<?php if( has_post_thumbnail() ) : ?>
												<div class="instructor-pic"><?php the_post_thumbnail( 'large' ); ?></div>
											<?php endif; ?>
											<?php the_title( '<div class="instructor-name">', '</div>' ); ?>
										</div>
									</a>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; ?>
						</div>
					<?php endforeach; ?>
			<?php endforeach; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_footer(); ?>
