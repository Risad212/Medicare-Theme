<?php

function medicare_import_files() {
	return array(
		array(
			'import_file_name'           => 'Medicare Demo Import',
			// 'categories'                 => array( 'Category 1', 'Category 2' ),
			'local_import_file'          => trailingslashit( get_template_directory() ) . '/medicare-demo/medicare-content.xml',
			'import_widget_file_url'     => trailingslashit( get_template_directory() ) . '/medicare-demo/medicare-widgets.wie',
			'import_preview_image_url'   => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
			'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'medicare' ),
			'preview_url'                => 'http://www.your_domain.com/my-demo-1',
		),
	);
}
add_filter( 'ocdi/import_files', 'medicare_import_files' );