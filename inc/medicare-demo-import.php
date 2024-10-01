<?php

function ocdi_import_files() {
	return array(
		array(
			'import_file_name'           => 'Medicare Demo Import',
			// 'categories'                 => array( 'Category 1', 'Category 2' ),
			'import_file_url'            => 'http://www.your_domain.com/ocdi/demo-content.xml',
			'import_widget_file_url'     => 'http://www.your_domain.com/ocdi/widgets.json',
			'import_customizer_file_url' => 'http://www.your_domain.com/ocdi/customizer.dat',
			'import_redux'               => array(
				array(
					'file_url'    => 'http://www.your_domain.com/ocdi/redux.json',
					'option_name' => 'redux_option_name',
				),
			),
			'import_preview_image_url'   => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
			'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
			'preview_url'                => 'http://www.your_domain.com/my-demo-1',
		),
	);
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );