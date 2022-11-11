<?php 
//creating custom blocks
add_action('acf/init', 'baron_insulation_acf_init');

function baron_insulation_acf_init() {
	// check function exists

	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'header-module',
			'title'				=> __('Header Module'),
			'description'		=> __('Header Module for header section'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'heading',
			'keywords'          => array( 'hero image', 'header', 'banner' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'cards-module',
			'title'				=> __('Cards Module'),
			'description'		=> __('Cards Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'index-card',
			'keywords'          => array( 'list', 'content', 'CARDS' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',

		));

		acf_register_block(array(
			'name'				=> 'products-module',
			'title'				=> __('Products Module'),
			'description'		=> __('Products Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'products',
			'keywords'          => array( 'list', 'content', 'CARDS' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'left-right-image-text-module',
			'title'				=> __('Left or Right Image and Text Module'),
			'description'		=> __('Left or Right Image and Text Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'embed-photo',
			'keywords'          => array( 'left', 'right', 'left right' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'get-in-touch-module',
			'title'				=> __('Get in Touch Module'),
			'description'		=> __('Get in Touch Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'get in touch', 'form', 'enquiry' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'cta-module',
			'title'				=> __('CTA Module'),
			'description'		=> __('CTA Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'cta', 'call to action', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'parallax-banner-module',
			'title'				=> __('Parallax Banner Module'),
			'description'		=> __('Parallax Banner Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'cta', 'call to action', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));
		

		/** FOOTER WIDGET STARTS HERE */
		acf_register_block(array(
			'name'				=> 'intro-widget-module',
			'title'				=> __('Intro Widget Module'),
			'description'		=> __('Introduction Widget Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'widget', 'intro', 'footer 1' ),
			'mode'				=> 'edit',
			'category'			=> 'widgets',

		));

		acf_register_block(array(
			'name'				=> 'menu-widget-module',
			'title'				=> __('Menu Widget Module'),
			'description'		=> __('Menu Widget Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'menu', 'widgets', 'footer' ),
			'mode'				=> 'edit',
			'category'			=> 'widgets',
		));
		/** END FOOTER WEIGHT HERE */



		acf_register_block(array(
			'name'				=> 'applications-cards-module',
			'title'				=> __('Applications Cards Module'),
			'description'		=> __('Applications Cards Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'applications', 'cards', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',

			
		));

		acf_register_block(array(
			'name'				=> 'industry-cards-module',
			'title'				=> __('Industry Cards Module'),
			'description'		=> __('Industry Cards Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'industry', 'industies', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'products-with-filter-module',
			'title'				=> __('Products with Filter Module'),
			'description'		=> __('Products with Filter Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'filter', 'product filter', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'product-inner-header-module',
			'title'				=> __('Product Inner Header Module'),
			'description'		=> __('Product Inner Header Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'filter', 'product filter', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'related-products-module',
			'title'				=> __('Related Products Module'),
			'description'		=> __('Related Products Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'related', 'related products', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'news-module',
			'title'				=> __('News Module'),
			'description'		=> __('News Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'news', 'blog', 'post' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'product-listing-module',
			'title'				=> __('Product Listing Module'),
			'description'		=> __('Product Listing Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'product', 'product listing', 'archive product' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'image-cards-module',
			'title'				=> __('Image Cards Module'),
			'description'		=> __('Image Cards Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'product', 'product listing', 'archive product' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));
		acf_register_block(array(
			'name'				=> 'free-text-module',
			'title'				=> __('Free Text Module'),
			'description'		=> __('Free Text Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'text', 'Free text', 'archive product' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));
		acf_register_block(array(
			'name'				=> 'left-or-right-image-text-inner-module',
			'title'				=> __('Left or Right Image and Text Inner Module'),
			'description'		=> __('Left or Right Image and Text Inner Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'text', 'Free text', 'archive product' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'our-history-module',
			'title'				=> __('Our History Module'),
			'description'		=> __('Our History Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'our history', 'history', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'technical-product-info-module',
			'title'				=> __('Technical Products Module'),
			'description'		=> __('Technical Products Module Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'technical info', 'tab', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'calculators-module',
			'title'				=> __('Calculators Module'),
			'description'		=> __('Calculators Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'calculators', 'calc', 'module' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
		));

		acf_register_block(array(
			'name'				=> 'parent-module-for-core-module',
			'title'				=> __('Parent module for core Blocks Module'),
			'description'		=> __('Parent module for core Blocks Module'),
			'render_callback'	=> 'baron_insulation_acf_module_template_block_render_callback',
			'icon'              => 'forms',
			'keywords'          => array( 'technical info', 'tab', 'module' ),
			'mode'				=> 'preview',
			'category'			=> 'custom_modules',
			'supports'		=> [
				'align'			=> false,
				'anchor'		=> true,
				'customClassName'	=> true,
				'jsx' 			=> true,
			]
		));

	}
}


function baron_insulation_acf_module_template_block_render_callback($block) {
	$slug = str_replace('acf/', '', $block['name']);
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}

