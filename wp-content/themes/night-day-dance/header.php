	<?php
	/**
	 * The header for our theme.
	 *
	 * @package RED_Starter_Theme
	 */

	?><!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
		</head>

		<body <?php body_class(); ?>>
			<div id="page" class="hfeed site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
				<header id="masthead" class="site-header" role="banner">

					<div class="logo-menu-wrapper">

					<div class="site-branding">
						<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<div class="ndd-logo">
							<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/night-day-dance-logo.jpg"alt="Night and Day Dance Logo"></a>
						</div>
						</div><!-- .site-branding -->
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
							</button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<div id="ndd-search" class="ndd-search">
								<form  role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
									<input class="ndd-search-input" placeholder="Enter your search term..." type="text" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="search">
									<input class="ndd-search-submit" type="submit" value="">
									<span class="ndd-icon-search"><i class="fa fa-search"></i></span>
								</form>
							</div>
							<script src="<?php echo get_template_directory_uri() ?>/build/js/classie.min.js"></script>
							<script src="<?php echo get_template_directory_uri() ?>/build/js/uisearch.min.js"></script>
				<script>
					new UISearch( document.getElementById( 'ndd-search' ) );
				</script>
						</nav><!-- #site-navigation -->
				</div> <!-- wraps logo and  menu -->
				</header><!-- #masthead -->

				<?php custom_breadcrumbs(); ?>

				<div id="content" class="site-content">
