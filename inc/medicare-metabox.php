<?php

if(class_exists('CSF')){

    $prefix = 'medicare-metabox';


   // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'  => __('Services', 'medicare'),
    'post_type' => 'services',
  ) );


  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => __('Services Single', 'medicare'),
    'fields' => array(

        array(
            'id'    => 'service-icon',
            'type'  => 'icon',
            'title' => 'Service Icon',
          ),

    )
  ) );
}
