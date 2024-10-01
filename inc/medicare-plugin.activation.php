<?php

function medicare_plugin_activation(){

	$plugins = array(
		array(
		  'name'   => __('Contact Form 7', 'medicare'),
		  'slug'   => 'contact-form-7',
		  'required' => true,
		),

		array(
			'name'   => __('Codestar Framework', 'medicare'),
			'slug'   => 'codestar-framework',
			'source' => get_stylesheet_directory() . '/lib/plugins/codestar-framework.zip',
			'required' => true,
		),

		array(
			'name'   => __('Medicare Custom Post', 'medicare'),
			'slug'   => 'medicare-custom-post',
			'source' => get_stylesheet_directory() . '/lib/plugins/medicare-custom-post.zip',
			'required' => true,
		),

		array(
			'name'   => __('One Click Demo Import', 'medicare'),
			'slug'   => 'one-click-demo-import',
			'required' => true,
		),

		array(
			'name'   => __('Widget Importer & Exporter', 'medicare'),
			'slug'   => 'widget-importer-exporter',
			'required' => true,
		),
	);

	
	$config = array(
		'id'           => 'medicare-plugin-active',                                  
		'menu'         => 'Medicare Plugin Activation',   
		'parent_slug'  => 'themes.php', 
		'has_notices'  => true,                   
	);

	/**
	 * call TGMPA Plugin
	 */
	tgmpa( $plugins, $config );
	
}

add_action( 'tgmpa_register', 'medicare_plugin_activation' );