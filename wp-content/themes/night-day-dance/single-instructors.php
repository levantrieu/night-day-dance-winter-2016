<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
	      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-header instructor-single-name-top">
						<?php the_title( '<h1 class="instructor-entry">', '</h1>' ); ?>
					</div>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="instructor-pic-frame">
							<div class="instructor-single-pic"><?php the_post_thumbnail( 'large' ); ?></div>
						</div>	
					<?php endif; ?>
					<div class="instructor-name-bio">
						<div class="entry-header instructor-single-name">
							<?php the_title( '<h1 class="instructor-entry">', '</h1>' ); ?>
						</div>
	      		<div class="instructor-info">
	      			<?php the_content(); ?>
							<div class="contact">
								<button class="contact-instructor"><?php echo CFS()->get( 'contact' ); ?></button>
							</div>
	      		</div>
					</div>
				</article>
				<div class="instructor-extra">
					<div class="lifestyle-pic"><img src="<?php echo CFS()->get( 'lifestyle_image' ); ?>"></div>
					<div class="dance-pic"><img src="<?php echo CFS()->get( 'dance_image' ); ?>"></div>
					<div class="instructor-quote"><div><?php echo CFS()->get( 'instructor_quote' ); ?></div></div>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
