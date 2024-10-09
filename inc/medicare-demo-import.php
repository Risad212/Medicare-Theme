<?php

function mdicare_import_files() {
	return array(
		array(
			'import_file_name'             => 'Demo Import 1',
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo-data/medicare-content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo-data/medicare-widgets.wie',
			'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'your-textdomain' ),
			'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
            'local_import_codestar'           => [
                [
                'file_path'   => trailingslashit( get_template_directory() ) . '/demo-data/demo-content.json',
                'option_name' => 'medicare-options',
                ],
            ],
		),
	);
}
add_filter( 'ocdi/import_files', 'mdicare_import_files' );