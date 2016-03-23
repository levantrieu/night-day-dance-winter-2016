<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/*
** Filter archive post loops.
*/

function ndd_modify_archive_loop( $query ) {
	if ( is_post_type_archive( array ( 'instructor' ) ) && !is_admin() && $query->is_main_query() ) {
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 12 );
	}
}
add_action( 'pre_get_posts', 'ndd_modify_archive_loop' );

/*
** Filter title archive.
*/

function ndd_archive_title( $title ) {
	if ( is_post_type_archive( array( 'instructor') ) ) {
		$title = 'Meet the Team';
	} elseif ( is_tax( 'instructor-type' ) ) {
		$title = single_term_title( '', false );
	}
	return $title;
}
	add_filter( 'get_the_archive_title', 'ndd_archive_title' );
