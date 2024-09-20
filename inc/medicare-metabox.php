<?php

if(class_exists('CSF')){

    $prefix = 'medicare-metabox';

    // Create a Services Metabox
    CSF::createMetabox(  $prefix, array(
        'title'  => __('Services', 'medicare'),
        'post_type' => 'services',
    ) );

    // Create a section for Services
    CSF::createSection(  $prefix, array(
        'title'  => __('Services Single', 'medicare'),
        'fields' => array(
            array(
                'id'    => 'service-icon',
                'type'  => 'icon',
                'title' => __('Service Icon', 'medicare'),
            ),
        )
    ) );


}
