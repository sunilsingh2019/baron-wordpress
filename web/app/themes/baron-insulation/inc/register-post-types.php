<?php

add_action( 'init', 'baron_insulation_products' );
function baron_insulation_products() {
	$args = [
		'label'  => esc_html__( 'Products', 'boran-insulation' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Products', 'baron-insulation' ),
			'name_admin_bar'     => esc_html__( 'Product', 'baron-insulation' ),
			'add_new'            => esc_html__( 'Add Product', 'baron-insulation' ),
			'add_new_item'       => esc_html__( 'Add new Product', 'baron-insulation' ),
			'new_item'           => esc_html__( 'New Product', 'baron-insulation' ),
			'edit_item'          => esc_html__( 'Edit Product', 'baron-insulation' ),
			'view_item'          => esc_html__( 'View Product', 'baron-insulation' ),
			'update_item'        => esc_html__( 'View Product', 'baron-insulation' ),
			'all_items'          => esc_html__( 'All Products', 'baron-insulation' ),
			'search_items'       => esc_html__( 'Search Products', 'baron-insulation' ),
			'parent_item_colon'  => esc_html__( 'Parent Product', 'baron-insulation' ),
			'not_found'          => esc_html__( 'No Products found', 'baron-insulation' ),
			'not_found_in_trash' => esc_html__( 'No Products found in Trash', 'baron-insulation' ),
			'name'               => esc_html__( 'Products', 'baron-insulation' ),
			'singular_name'      => esc_html__( 'Product', 'baron-insulation' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-products',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'trackbacks',
			'custom-fields',
			'revisions',
			'page-attributes',
			'excerpt'
		],
		'rewrite' => true,
	];

	register_post_type( 'product', $args );
}


/** Application post type started */ 

add_action( 'init', 'baron_insulation_applications' );
function baron_insulation_applications() {
	$args = [
		'label'  => esc_html__( 'Applications', 'baron-insulation' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Applications', 'baron-insulation' ),
			'name_admin_bar'     => esc_html__( 'Application', 'baron-insulation' ),
			'add_new'            => esc_html__( 'Add Application', 'baron-insulation' ),
			'add_new_item'       => esc_html__( 'Add new Application', 'baron-insulation' ),
			'new_item'           => esc_html__( 'New Application', 'baron-insulation' ),
			'edit_item'          => esc_html__( 'Edit Application', 'baron-insulation' ),
			'view_item'          => esc_html__( 'View Application', 'baron-insulation' ),
			'update_item'        => esc_html__( 'View Application', 'baron-insulation' ),
			'all_items'          => esc_html__( 'All Applications', 'baron-insulation' ),
			'search_items'       => esc_html__( 'Search Applications', 'baron-insulation' ),
			'parent_item_colon'  => esc_html__( 'Parent Application', 'baron-insulation' ),
			'not_found'          => esc_html__( 'No Applications found', 'baron-insulation' ),
			'not_found_in_trash' => esc_html__( 'No Applications found in Trash', 'baron-insulation' ),
			'name'               => esc_html__( 'Applications', 'baron-insulation' ),
			'singular_name'      => esc_html__( 'Application', 'baron-insulation' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-smiley',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'trackbacks',
			'custom-fields',
			'revisions',
			'page-attributes',
			'excerpt'

		],
		'rewrite' => true
	];

	register_post_type( 'application', $args );
}


add_action( 'init', 'baron_insulation_industries' );
function baron_insulation_industries() {
	$args = [
		'label'  => esc_html__( 'Industries', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Industries', 'baron-insulation' ),
			'name_admin_bar'     => esc_html__( 'Industry', 'baron-insulation' ),
			'add_new'            => esc_html__( 'Add Industry', 'baron-insulation' ),
			'add_new_item'       => esc_html__( 'Add new Industry', 'baron-insulation' ),
			'new_item'           => esc_html__( 'New Industry', 'baron-insulation' ),
			'edit_item'          => esc_html__( 'Edit Industry', 'baron-insulation' ),
			'view_item'          => esc_html__( 'View Industry', 'baron-insulation' ),
			'update_item'        => esc_html__( 'View Industry', 'baron-insulation' ),
			'all_items'          => esc_html__( 'All Industries', 'baron-insulation' ),
			'search_items'       => esc_html__( 'Search Industries', 'baron-insulation' ),
			'parent_item_colon'  => esc_html__( 'Parent Industry', 'baron-insulation' ),
			'not_found'          => esc_html__( 'No Industries found', 'baron-insulation' ),
			'not_found_in_trash' => esc_html__( 'No Industries found in Trash', 'baron-insulation' ),
			'name'               => esc_html__( 'Industries', 'baron-insulation' ),
			'singular_name'      => esc_html__( 'Industry', 'baron-insulation' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-chart-area',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'trackbacks',
			'custom-fields',
			'revisions',
			'page-attributes',
			'excerpt'
		],
		'rewrite' => true
	];

	register_post_type( 'industry', $args );
}
