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
	      	<header class="entry-header">
	          <?php the_title( '<h1 class="instructor-entry">', '</h1>' ); ?>
	      		<?php if ( has_post_thumbnail() ) : ?>
	      			<?php the_post_thumbnail( 'large' ); ?>
	      		<?php endif; ?>
					</header><!-- .entry-header -->

	      	<div class="instructor-info">
	      		<?php the_content(); ?>
						<button class="contact-instructor"><?php echo CFS()->get( 'contact' ); ?></button>
	      	</div><!-- .entry-content -->
				</article>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
