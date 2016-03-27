<?php
/**
* The template for displaying taxonomy class type.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

text from taxonomy-class-type.php

<div id="primary" class="content-area site-container class-type">
	<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div>
					<div>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</div>
					<div>
						<a href="<?php the_permalink(); ?>"><?php the_title( '<h4>', '</h4>' ); ?></a>
						<?php the_content(); ?>
						<p class="class-price">Price: <?php echo CFS()->get( 'price' ); ?></p>
					</div>
				</div>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
