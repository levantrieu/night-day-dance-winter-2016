<?php
/**
* The template for displaying archive classes.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

text from archive-class.php

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header>

					<?php $terms = get_terms( 'class-type' ); ?>
					<?php if ( ! empty( $terms ) ) : ?>
						<?php foreach ( $terms as $term) : ?>
								<h6><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></h6>
						<?php endforeach; ?>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="class-single">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
							<?php endif; ?>
							<p class="class-info-wrapper">
								<?php the_title( '<span class="class-archive-name">', '</span>' ); ?>
							</p>
						</div>
					<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
