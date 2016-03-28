<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area classes site-container">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="class-header">
				text from single-classes.php
				<?php the_title( '<h1 class="class-name">', '</h1>' ); ?>
				<div class="class-description">
				<?php the_content(); ?>
				</div>
			</header><!-- .entry-header -->

			<section>
				<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</section>

			<section class="book-now">
				<p class="class-price"><?php echo CFS()->get( 'price' ); ?></p>
				<p class="class-length"><?php echo CFS()->get( 'class_length' ); ?></p>
			</section>

			<section class="class-bring">
			  <p><?php echo CFS()->get( 'things_to_bring' ); ?></p>
			</section>
			<!-- .entry-content -->
		</article>
	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
