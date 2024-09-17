<?php

if(class_exists('CSF')){

    $prefix = 'medicare-options';

    /*---- options ----*/
    CSF::createOptions( $prefix, array(
        'menu_title' => __('Medicare Options', 'medicare'),
        'menu_slug'  => 'medicare-options',
        'framework_title' => __('Medicare Options', 'medicare'),
    ) );


    // header section
    CSF::createSection( $prefix, array(
        'title'  => __('Header Section', 'medicare'),
        'icon'      => 'fa fa-rocket',
        'fields' => array(

        array(
            'id'    => 'header-address',
            'type'  => 'text',
            'title' => __('header address', 'medicare'),
        ),

        array(
            'id'    => 'header-hours',
            'type'  => 'text',
            'title' => __('Header Hours ', 'medicare'),
        ),

        array(
            'id'     => 'header-social',
            'type'   => 'repeater',
            'title'  => __('Header Social Icon','medicare'),
            'fields' => array(
          
              array(
                'id'    => 'header-social-url',
                'type'  => 'link',
                'title' => __('Header Social Icon Link','medicare'),
              ),

              array(
                'id'    => 'header-social-icon',
                'type'  => 'icon',
                'title' => __('Select Social Icon','medicare'),
              ),
          
            ),
          ),
    
        )
    ) );


    // Hero Slider Section
    CSF::createSection( $prefix, array(
      'title'  => __('Slider Section', 'medicare'),
      'icon'      => 'fa fa-rocket',
      'fields' => array(
        
      array(
          'id'     => 'slider-list',
          'type'   => 'repeater',
          'title'  => __('Slider Single','medicare'),
          'fields' => array(
        
            array(
              'id'    => 'slider-image',
              'type'  => 'media',
              'title' => __('Slider Title','medicare'),
            ),

            array(
              'id'    => 'slider-title',
              'type'  => 'text',
              'title' => __('Slider Title','medicare'),
            ),

            array(
              'id'    => 'slider-disc',
              'type'  => 'textarea',
              'title' => __('Slider Discription','medicare'),
            ),

            array(
              'id'    => 'slider-button',
              'type'  => 'link',
              'title' => __('Slider Button','medicare'),
            ),
        
          ),
        ),
  
      )
  ) );


}