<?php
/**
* The template for displaying taxonomy class type.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area site-container class-type">
	<main id="main" class="site-main" role="main">
		<article>

			<div class="desktop-border">
				<img src="<?php echo get_template_directory_uri() ?>/images/couple-legs.jpg" alt="Legs Dance Class" height="100%" width="100%">
				<h2 class="child-title">it takes two to tango</h2>
			</div>

			<section class="decor-text-block-wrapper">
					<div class="top-text-block">a dance routine just as unique as your love.
					</div>
					<div class="decoration">
					<img src="<?php echo get_template_directory_uri() ?>/images/Bitmap.png" alt="Night Day Dance Decoration" height="100%" width="100%"/>
					</div>
			</section>

			<section>
				<div class="package-loop-wrapper">
					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="package-child">
									<div class="pack-title-link-wrapper">
										<div class="category-image-loop">
											<?php the_post_thumbnail( 'large' ); ?>
										<?php endif; ?>
									</div>
									<div class="package-title-wrapper">
										<div class="pack-title">
											<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
											<a href="<?php echo get_permalink()?>" class="pack-link">read more</a>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						<?php the_posts_navigation(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</section>
		</article>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
