<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
// Register Custom Post Type
function lrb_register_product() {

	$labels = array(
		'name'                => 'products',
		'singular_name'       => 'product',
		'menu_name'           => 'Products',
		'name_admin_bar'      => 'Products',
		'parent_item_colon'   => '',
		'all_items'           => 'product',
		'add_new_item'        => 'product',
		'add_new'             => 'New Product',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Item',
		'update_item'         => 'Update Item',
		'view_item'           => 'View Item',
		'search_items'        => 'Search Item',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found in Trash',
	);
	$args = array(
		'label'               => 'product',
		'description'         => 'Post Type Description',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'lrb_register_product', 0 );




