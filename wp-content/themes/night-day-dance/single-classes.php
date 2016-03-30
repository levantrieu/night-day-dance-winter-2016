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
<div class="class-page-title"><?php the_title( '<h3>', '</h3>' ); ?></div>
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

			<div class="book-beatles-bring">
					<section class="book-now">
						<p class="class-price"><?php echo CFS()->get( 'price' ); ?></p>
						<p class="class-length"><?php echo CFS()->get( 'class_length' ); ?></p>
						<div class="persian-wrapper"><button class="book-now-btn">Book Now</button></div>
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
			<div><i class="fa fa-quote-right"></i>
			</section>

			<div class="class-double-dance">
			  <h1>Last Minute Double Dance</h1>
			</div>

			<!-- .entry-content -->
		</article>
	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
