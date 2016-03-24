<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

text from single-classes.php

<div id="primary" class="content-area site-container">
	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="class-header">
				<?php the_title( '<h1 class="class-name">', '</h1>' ); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="class-description">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div>
			<p class="class-price"><?php echo CFS()->get( 'price' ); ?></p>
			<p class="class-length"><?php echo CFS()->get( 'class_length' ); ?></p>
			<p class="class-bring"><?php echo CFS()->get( 'things_to_bring' ); ?></p>
			<!-- .entry-content -->
		</article>
	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
