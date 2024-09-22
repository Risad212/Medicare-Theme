<?php

if(class_exists('CSF')){

    $prefix = 'medicare-metabox';
    $doctor_prefix = 'medicare-doctor-metabox';


    // Create a Services Metabox
    CSF::createMetabox(  $prefix, array(
        'title'  => __('Medicare Metabox', 'medicare'),
        'post_type' => array('services'), 
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

    
    /*----------- Doctor Metabox -----------*/

    CSF::createMetabox(  $doctor_prefix, array(
        'title'  => __('Medicare Metabox', 'medicare'),
        'post_type' => 'doctors', 
    ) );


    CSF::createSection(  $doctor_prefix, array(
        'title'  => __('Doctor Single', 'medicare'),
        'fields' => array(
            array(
                'id'     => 'doctor-social-list',
                'type'   => 'repeater',
                'title'  => __('Social List', 'medicare'),
                'fields' => array(
                  array(
                    'id'    => 'social-icon',
                    'type'  => 'icon',
                    'title' => __('Social Icon', 'medicare'),
                  ),
                  array(
                    'id'    => 'social-link',
                    'type'  => 'link',
                    'title' => __('Social Link', 'medicare'),
                  ),
                ),
            ),
        ),
    ) );
}
