<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function register_dance_post_type() {

	$labels = array(
		'name'                  => 'Instructors',
		'singular_name'         => 'Instructor',
		'menu_name'             => 'Instructors',
		'name_admin_bar'        => 'Instructor',
		'archives'              => 'Instructor Archives',
		'parent_item_colon'     => 'Parent Instructor:',
		'all_items'             => 'All Instructors',
		'add_new_item'          => 'Add New Instructor',
		'add_new'               => 'Add New',
		'new_item'              => 'New Instructor',
		'edit_item'             => 'Edit Instructor',
		'update_item'           => 'Update Instructor',
		'view_item'             => 'View Instructor',
		'search_items'          => 'Search Instructor',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into instructor',
		'uploaded_to_this_item' => 'Uploaded to this instructor',
		'items_list'            => 'Instructors list',
		'items_list_navigation' => 'Instructors list navigation',
		'filter_items_list'     => 'Filter instructors list',
	);
	$args = array(
		'label'                 => 'Instructor',
		'description'           => 'Dance Instructors for Night and Day Dance',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'instructors',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'instructors', $args );

	$labels = array(
		'name'                  => 'Classes',
		'singular_name'         => 'Class',
		'menu_name'             => 'Classes',
		'name_admin_bar'        => 'Class',
		'archives'              => 'Class Archives',
		'parent_item_colon'     => 'Parent Class:',
		'all_items'             => 'All Classes',
		'add_new_item'          => 'Add New Class',
		'add_new'               => 'Add New',
		'new_item'              => 'New Class',
		'edit_item'             => 'Edit Class',
		'update_item'           => 'Update Class',
		'view_item'             => 'View Class',
		'search_items'          => 'Search Class',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into class',
		'uploaded_to_this_item' => 'Uploaded to this class',
		'items_list'            => 'Classes list',
		'items_list_navigation' => 'Classes list navigation',
		'filter_items_list'     => 'Filter classes list',
	);
	$args = array(
		'label'                 => 'Class',
		'description'           => 'Dance Classes for Night and Day Dance',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'classes',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'classes', $args );

}
add_action( 'init', 'register_dance_post_type', 0 );

// Register Custom Post Type
// function register_class_post_type() {
//
// 	$labels = array(
// 		'name'                  => 'Classes',
// 		'singular_name'         => 'Class',
// 		'menu_name'             => 'Classes',
// 		'name_admin_bar'        => 'Class',
// 		'archives'              => 'Class Archives',
// 		'parent_item_colon'     => 'Parent Class:',
// 		'all_items'             => 'All Classes',
// 		'add_new_item'          => 'Add New Class',
// 		'add_new'               => 'Add New',
// 		'new_item'              => 'New Class',
// 		'edit_item'             => 'Edit Class',
// 		'update_item'           => 'Update Class',
// 		'view_item'             => 'View Class',
// 		'search_items'          => 'Search Class',
// 		'not_found'             => 'Not found',
// 		'not_found_in_trash'    => 'Not found in Trash',
// 		'featured_image'        => 'Featured Image',
// 		'set_featured_image'    => 'Set featured image',
// 		'remove_featured_image' => 'Remove featured image',
// 		'use_featured_image'    => 'Use as featured image',
// 		'insert_into_item'      => 'Insert into class',
// 		'uploaded_to_this_item' => 'Uploaded to this class',
// 		'items_list'            => 'Classes list',
// 		'items_list_navigation' => 'Classes list navigation',
// 		'filter_items_list'     => 'Filter classes list',
// 	);
// 	$args = array(
// 		'label'                 => 'Class',
// 		'description'           => 'Dance Classes for Night and Day Dance',
// 		'labels'                => $labels,
// 		'supports'              => array('title', 'editor', 'author', 'thumbnail', 'revisions', ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-tickets-alt',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => 'classes',
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'post',
// 	);
// 	register_post_type( 'classes', $args );
//
// }
// add_action( 'init', 'register_class_post_type', 0 );
