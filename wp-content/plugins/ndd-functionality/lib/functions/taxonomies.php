<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function register_dance_type_taxonomy() {

	$labels = array(
		'name'                       => 'Instructors City',
		'singular_name'              => 'Instructor City',
		'menu_name'                  => 'Instructor City',
		'all_items'                  => 'All Instructor Cities',
		'parent_item'                => 'Parent Instructor City',
		'parent_item_colon'          => 'Parent Instructor City:',
		'new_item_name'              => 'New Instructor City',
		'add_new_item'               => 'Add Instructor City',
		'edit_item'                  => 'Edit Instructor City',
		'update_item'                => 'Update Instructor City',
		'view_item'                  => 'View Instructor City',
		'separate_items_with_commas' => 'Separate instructors with commas',
		'add_or_remove_items'        => 'Add or remove instructor city',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Instructor Cities',
		'search_items'               => 'Search Instructor Cities',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No instructor cities',
		'items_list'                 => 'Instructor cities list',
		'items_list_navigation'      => 'Instructor cities list navigation',
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
	register_taxonomy( 'instructor-city', array( 'instructors' ), $args );

	$labels = array(
		'name'                       => 'Class Types',
		'singular_name'              => 'Class Type',
		'menu_name'                  => 'Class Type',
		'all_items'                  => 'All Class Types',
		'parent_item'                => 'Parent Class Type',
		'parent_item_colon'          => 'Parent Class Type:',
		'new_item_name'              => 'New Class Type Name',
		'add_new_item'               => 'Add New Class Type',
		'edit_item'                  => 'Edit Class Type',
		'update_item'                => 'Update Class Type',
		'view_item'                  => 'View Class Type',
		'separate_items_with_commas' => 'Separate class types with commas',
		'add_or_remove_items'        => 'Add or remove class types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Class Types',
		'search_items'               => 'Search Class Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No class types',
		'items_list'                 => 'Class types list',
		'items_list_navigation'      => 'Class types list navigation',
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
	register_taxonomy( 'class-type', array( 'classes' ), $args );

}
add_action( 'init', 'register_dance_type_taxonomy', 0 );
