<?php
/**
* RED Starter Theme functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package RED_Starter_Theme
*/

if ( ! function_exists( 'red_starter_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*/
	function red_starter_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html( 'Primary Menu' ),

			) );

			// Switch search form, comment form, and comments to output valid HTML5.
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			) );

		}
	endif; // red_starter_setup
	add_action( 'after_setup_theme', 'red_starter_setup' );

	/**
	* Set the content width in pixels, based on the theme's design and stylesheet.
	*
	* @global int $content_width
	*/
	function red_starter_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 1024 );
	}
	add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

	/**
	* Register widget area.
	*
	* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	*/
	function red_starter_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html( 'Sidebar' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			) );
		}
		add_action( 'widgets_init', 'red_starter_widgets_init' );

		/**
		* Filter the stylesheet_uri to output the minified CSS file.
		*/
		function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
			if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
				$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
			}

			return $stylesheet_uri;
		}
		add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

		/**
		* enqueues our external fontawesome stylesheet to use for social icons and mobile menu
		*/
		function enqueue_fontawesome_stylesheets(){
			wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
		}
		add_action('wp_enqueue_scripts','enqueue_fontawesome_stylesheets');

		/**
		* enqueues our external jQuery to use for mobile menu
		*/
		if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
		function my_jquery_enqueue() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
			wp_enqueue_script('jquery');
		}
		/**
		* Enqueue custom mobile javascript
		*/
		function ndd_adding_scripts() {
			wp_register_script('mobile_script', get_template_directory_uri() . '/build/js/mobile-menu.min.js', array('jquery'),'1.1', true);
			wp_enqueue_script('mobile_script');
		}

		add_action( 'wp_enqueue_scripts', 'ndd_adding_scripts' );

		/**
		* Enqueue scripts and styles.
		*/
		function red_starter_scripts() {
			wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
			wp_enqueue_style( 'font-awesome-cdn', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');

			wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );
			}
		}
		add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

		/**
		* Custom template tags for this theme.
		*/
		require get_template_directory() . '/inc/template-tags.php';

		/**
		* Custom functions that act independently of the theme templates.
		*/
		require get_template_directory() . '/inc/extras.php';

		/**
		* Breadcrumbs
		*/

		function custom_breadcrumbs() {

			// Settings
			$separator          = '&gt;';
			$breadcrums_id      = 'breadcrumbs';
			$breadcrums_class   = 'breadcrumbs';
			$home_title         = 'Homepage';

			// If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
			$custom_taxonomy    = 'classes-type';

			// Get the query & post information
			global $post,$wp_query;

			// Do not display on the homepage
			if ( !is_front_page() ) {

				// Build the breadcrums
				echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

				// Home page

				if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

					echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';

				} else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

					// If post is a custom post type
					$post_type = get_post_type();

					// If it is a custom post type display name and link
					if($post_type != 'post') {

						$post_type_object = get_post_type_object($post_type);
						$post_type_archive = get_post_type_archive_link($post_type);
					}

					$custom_tax_name = get_queried_object()->name;
					echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';

				} else if ( is_single() ) {

					// If post is a custom post type
					$post_type = get_post_type();

					// If it is a custom post type display name and link
					if($post_type != 'post') {

						$post_type_object = get_post_type_object($post_type);
						$post_type_archive = get_post_type_archive_link($post_type);

						echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
						echo '<li class="separator"> ' . $separator . ' </li>';
					}

					// Get post category info
					$category = get_the_category();

					if(!empty($category)) {

						// Get last category post is in
						$last_category = end(array_values($category));
					}

					// If it's a custom post type within a custom taxonomy
					$taxonomy_exists = taxonomy_exists($custom_taxonomy);
					if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

						$taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
						$cat_id         = $taxonomy_terms[0]->term_id;
						$cat_nicename   = $taxonomy_terms[0]->slug;
						$cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
						$cat_name       = $taxonomy_terms[0]->name;
					}

					// Check if the post is in a category
					if(!empty($last_category)) {
						echo $cat_display;
						echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

						// Else if post is in a custom taxonomy
					} else if(!empty($cat_id)) {

						echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
						echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';

					} else {

						echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
					}

				} else if ( is_category() ) {

					// Category page
					echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';

				} else if ( is_page() ) {

					// Standard page
					if( $post->post_parent ){

						// Current page
						echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
					} else {

						// Just display current page if not parents
						echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
					}

				} else if ( get_query_var('paged') ) {

					// Paginated archives
					echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';

				} else if ( is_search() ) {

					// Search results page
					echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';

				} elseif ( is_404() ) {

					// 404 page
					echo '<li>' . 'Error 404' . '</li>';
				}
				echo '</ul>';
			}
		}
