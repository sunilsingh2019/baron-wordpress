
<?php
function taxonomies_list_product() {
	$labels = array(
	  'name'              => _x( 'products Categories', 'taxonomy general name' ),
	  'singular_name'     => _x( 'products Category', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search List products Cat' ),
	  'all_items'         => __( 'All List products Cat' ),
	  'parent_item'       => __( 'Parent List products Category' ),
	  'parent_item_colon' => __( 'Parent List products Category:' ),
	  'edit_item'         => __( 'Edit List products Category' ), 
	  'update_item'       => __( 'Update List products Category' ),
	  'add_new_item'      => __( 'Add New List products Category' ),
	  'new_item_name'     => __( 'New List products Category' ),
	  'menu_name'         => __( 'products Categories' ),
	);
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	  'show_in_rest' => true,
	  'show_ui' => true,
	  "rewrite" => true
	);
	register_taxonomy( 'product_category', 'product', $args );
  }
  add_action( 'init', 'taxonomies_list_product', 0 );


  
function taxonomies_list_application() {
	$labels = array(
	  'name'              => _x( 'applications Categories', 'taxonomy general name' ),
	  'singular_name'     => _x( 'applications Category', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search List applications Cat' ),
	  'all_items'         => __( 'All List applications Cat' ),
	  'parent_item'       => __( 'Parent List applications Category' ),
	  'parent_item_colon' => __( 'Parent List applications Category:' ),
	  'edit_item'         => __( 'Edit List applications Category' ), 
	  'update_item'       => __( 'Update List applications Category' ),
	  'add_new_item'      => __( 'Add New List applications Category' ),
	  'new_item_name'     => __( 'New List applications Category' ),
	  'menu_name'         => __( 'applications Categories' ),
	);
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	  'show_in_rest' => true,

	  //"rewrite" => true
	);
	register_taxonomy( 'application_category', 'product', $args );
  }
  add_action( 'init', 'taxonomies_list_application', 0 );


  function taxonomies_list_industry() {
	$labels = array(
	  'name'              => _x( 'Industries Categories', 'taxonomy general name' ),
	  'singular_name'     => _x( 'Industries Category', 'taxonomy singular name' ),
	  'search_items'      => __( 'Search List Industries Cat' ),
	  'all_items'         => __( 'All List Industries Cat' ),
	  'parent_item'       => __( 'Parent List Industries Category' ),
	  'parent_item_colon' => __( 'Parent List Industries Category:' ),
	  'edit_item'         => __( 'Edit List Industries Category' ), 
	  'update_item'       => __( 'Update List Industries Category' ),
	  'add_new_item'      => __( 'Add New List Industries Category' ),
	  'new_item_name'     => __( 'New List Industries Category' ),
	  'menu_name'         => __( 'Industries Categories' ),
	);
	$args = array(
	  'labels' => $labels,
	  'hierarchical' => true,
	  'show_in_rest' => true,
	  //"rewrite" => true
	);
	register_taxonomy( 'industry_category', 'industry', $args );
  }
  add_action( 'init', 'taxonomies_list_industry', 0 );