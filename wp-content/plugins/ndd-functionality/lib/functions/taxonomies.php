<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function register_dance_type_taxonomy() {

	$labels = array(
		'name'                       => 'Instructors Type',
		'singular_name'              => 'Instructor Type',
		'menu_name'                  => 'Instructor Type',
		'all_items'                  => 'All Instructor Types',
		'parent_item'                => 'Parent Instructor',
		'parent_item_colon'          => 'Parent Instructor:',
		'new_item_name'              => 'New Instructor',
		'add_new_item'               => 'Add Instructor',
		'edit_item'                  => 'Edit Instructor',
		'update_item'                => 'Update Instructor',
		'view_item'                  => 'View Instructor',
		'separate_items_with_commas' => 'Separate instructors with commas',
		'add_or_remove_items'        => 'Add or remove instructors',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Instructors',
		'search_items'               => 'Search Instructors',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No instructors',
		'items_list'                 => 'Instructors list',
		'items_list_navigation'      => 'Instructors list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'instructor-type', array( 'instructor' ), $args );

	$labels = array(
		'name'                       => 'Classes',
		'singular_name'              => 'Class',
		'menu_name'                  => 'Class',
		'all_items'                  => 'All Classes',
		'parent_item'                => 'Parent Classes',
		'parent_item_colon'          => 'Parent Class:',
		'new_item_name'              => 'New Class Name',
		'add_new_item'               => 'Add New Class',
		'edit_item'                  => 'Edit Class',
		'update_item'                => 'Update Class',
		'view_item'                  => 'View Class',
		'separate_items_with_commas' => 'Separate classes with commas',
		'add_or_remove_items'        => 'Add or remove classes',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Classes',
		'search_items'               => 'Search Classes',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No classes',
		'items_list'                 => 'Classes list',
		'items_list_navigation'      => 'Classes list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'class-type', array( 'class' ), $args );

}
add_action( 'init', 'register_dance_type_taxonomy', 0 );
