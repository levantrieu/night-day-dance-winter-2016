<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area classes site-container">
	<main id="main" class="site-main" role="main">
		<article>
		<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="header-feature-img">
					<header class="class-header">
						<?php the_title( '<h1 class="class-name">', '</h1>' ); ?>
						<div class="class-description">
						<?php the_content(); ?>
						</div>
					</header><!-- .entry-header -->

					<section class="class-feature-img">
						<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</section>
			</div>
			<?php endwhile; // End of the loop. ?>
		</div>

			<div class="book-beatles-bring">
					<section class="book-now">
								<p class="class-price"><?php echo CFS()->get( 'price' ); ?></p>
								<p class="class-length"><?php echo CFS()->get( 'class_length' ); ?></p>
						<div class="persian-wrapper">
							<button class="book-now-btn">Book Now</button>
						</div>
					</section>

					<section class="class-beatles">
						<i class="fa fa-quote-left"></i>
					  <p>There is nothing else I'd rather do cos I am happy just to dance with you<span>Beatles</span></p>
						<i class="fa fa-quote-right"></i>
					</section>

					<section class="class-bring">
					  <p><?php echo CFS()->get( 'things_to_bring' ); ?></p>
					</section>
			</div>

			<section class="class-quote">
				<i class="fa fa-quote-left"></i>
				<p>I would, without hesitation, recommend Night and Day if you are thinking about dance lessons. David and Diane are excellent teachers and will make you feel comfortable and at ease right away. If they can teach me to dance, they can teach anybody!Let me repeat I would, without hesitation, recommend Night and Day if you are thinking about dance lessons. David and Diane are excellent teachers and will make you feel comfortable and at ease right away. If they can teach me to dance, they can teach anybody!</p>
				<i class="fa fa-quote-right"></i>
			</section>

			<!-- our other products loop -->

				<section>
					<div class="single-related-title">
						Our Other Packages
					</div>
						<div class="related-loop-wrapper">
							<?php	global $post;
							 $terms = get_the_terms( $post->ID , 'class-type', 'string');
							 $do_not_duplicate[] = $post->ID;

					 	 if(!empty($terms)){
								//  echo '<div class="single-related-title">Our Other Packages</div>';

								 foreach ($terms as $term) {
										 query_posts( array(
										 'post_type' => 'classes',
										 'class-type' => $term->slug,
										 'posts_per_page' => 3,
										 'ignore_sticky_posts' => 1,
										 'orderby' => 'rand',
										 'post__not_in' => $do_not_duplicate) );
										 if(have_posts()) {
											 while ( have_posts() ) : the_post(); $do_not_duplicate[] = $post->ID; ?>

											 <div class="related-child"> <!-- categorypackages.scss -->
												 <div class="related-title-link-wrapper">
												<div class="related-image-loop">
											 	<?php if (has_post_thumbnail()) { ?>
													<?php the_post_thumbnail( 'medium', array('alt' => get_the_title()) ); ?>
												</div>
																<div class="related-title-wrapper">
																	<div class="related-title">
																		<?php the_title('<h3 class="related-page-title">','</h3>');?>
																				<a href="<?php the_permalink() ?>" class="pack-link" title="<?php the_title(); ?>">read more</a>
																					</div>
																				<?php } else { ?>
																		<div>
																		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
													 		</div>
												 	 <?php } ?>
											 	</div>
											</div>
										</div>
											 <?php endwhile; wp_reset_query();
									 }
							 	}
					 		}
					 ?>
 			 				</div> <!-- single related parent div -->
				 		</div>
				 	</div>
				</section>
		</article>
	</main><!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>
