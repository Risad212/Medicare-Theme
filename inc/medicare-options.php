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
    ));

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
              'title' => __('Slider Image','medicare'),
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
    ));

    // Feature Section
    CSF::createSection( $prefix, array(
      'title'  => __('Feature Section', 'medicare'),
      'icon'   => 'fa fa-rocket',
      'fields' => array (
          
        array(
          'id'     => 'feature-list',
          'type'   => 'repeater',
          'title'  => __('Feature List', 'medicare'),
          'fields' => array(
        
            array(
              'id'    => 'feature-icon',
              'type'  => 'icon',
              'title' => __('Feature Icon', 'medicare'),
            ),

            array(
              'id'    => 'feature-title',
              'type'  => 'text',
              'title' => __('Feature Title', 'medicare'),
            ),

            array(
              'id'    => 'feature-disc',
              'type'  => 'textarea',
              'title' => __('Feature Discription', 'medicare'),
            ),
        
          ),
        ),

      )
    ));

     // About Section
    CSF::createSection( $prefix, array(
      'title'  => __('About Section', 'medicare'),
      'icon'      => 'fa fa-rocket',
      'fields' => array(
        
        array(
          'id'    => 'about-title',
          'type'  => 'text',
          'title' => __('About Title','medicare'),
        ),

        array(
          'id'    => 'about-disc',
          'type'  => 'textarea',
          'title' => __('About Discription','medicare'),
        ),

        array(
          'id'    => 'about-btn',
          'type'  => 'link',
          'title' => __('About Button','medicare'),
        ),

        array(
          'id'    => 'about-large-image',
          'type'  => 'media',
          'title' => __('About Large Image','medicare'),
        ),


        array(
          'id'     => 'about-list',
          'type'   => 'repeater',
          'title'  => __('About List Image', 'medicare'),
          'fields' => array(
        
            array(
              'id'    => 'about-img',
              'type'  => 'media',
              'title' => __('About Image','medicare'),
            ),
        
          ),
        ),
  
       )
    ));

     // Services Section
     CSF::createSection($prefix, array(
      'title'  => __('Service Section', 'medicare'),
      'icon'      => 'fa fa-rocket',
      'fields' => array(
        array(
          'id'    => 'service-subtitle',
          'type'  => 'text',
          'title' => __('Service Sub Title','medicare'),
        ),
        array(
          'id'    => 'service-title',
          'type'  => 'text',
          'title' => __('Service Title','medicare'),
        ),
      )
     ));

     // Counter Section
     CSF::createSection($prefix, array(
      'title'  => __('Counter Section', 'medicare'),
      'icon'      => 'fa fa-rocket',
      'fields' => array(
        
        array(
          'id'    => 'counter-bg',
          'type'  => 'background',
          'title' => __('Counter Background Image', 'medicare'),
          'background_color' => false
        ),

        array(
          'id'     => 'counter-list',
          'type'   => 'repeater',
          'title'  => __('Counter List', 'medicare'),
          'fields' => array(
        
            array(
              'id'    => 'counter-icon',
              'type'  => 'icon',
              'title' => __('Counter Icon','medicare'),
            ),

            array(
              'id'    => 'counter-number',
              'type'  => 'number',
              'title' => __('Counter Number','medicare'),
            ),

            array(
              'id'    => 'counter-title',
              'type'  => 'text',
              'title' => __('Counter Title','medicare'),
            ),
        
          ),
        ),
        
      )
     ));

     // Doctor Section
     CSF::createSection($prefix, array(
      'title'  => __('Doctor Section', 'medicare'),
      'icon'      => 'fa fa-rocket',
      'fields' => array(
        
        array(
          'id'    => 'doctor-subtitle',
          'type'  => 'text',
          'title' => __('Doctor Subtitle', 'medicare'),
        ),

        array(
          'id'    => 'doctor-title',
          'type'  => 'text',
          'title' => __('Doctor title', 'medicare'),
        ),
        
      )
     ));
     
      // Testimonial Section
      CSF::createSection($prefix, array(
        'title'  => __('Testimonial Section', 'medicare'),
        'icon'      => 'fa fa-rocket',
        'fields' => array(
          
          array(
            'id'    => 'testimonial-subtitle',
            'type'  => 'text',
            'title' => __('testimonial SubTitle','medicare'),
          ),
  
          array(
            'id'    => 'testimonial-title',
            'type'  => 'text',
            'title' => __('testimonial Title','medicare'),
          ),
  
          array(
            'id'     => 'testimonial-list',
            'type'   => 'repeater',
            'title'  => __('testimonial List', 'medicare'),
            'fields' => array(
  
              array(
                'id'    => 'testimonial-review',
                'type'  => 'textarea',
                'title' => __('Testimonial Review','medicare'),
              ),

              array(
                'id'    => 'reviewer-img',
                'type'  => 'media',
                'title' => __('Reviewer Image','medicare'),
              ),

              array(
                'id'    => 'reviewer-name',
                'type'  => 'text',
                'title' => __('Reviewer Name','medicare'),
              ),

              array(
                'id'    => 'reviewer-designation',
                'type'  => 'text',
                'title' => __('Testimonial designation','medicare'),
              ),
            ),
          ),
          
        )
       ));


     // Sister Concern Section
     CSF::createSection($prefix, array(
      'title'  => __('Sister Concern Section', 'medicare'),
      'icon'      => 'fa fa-rocket',
      'fields' => array(
        
        array(
          'id'    => 'sister-concern-subtitle',
          'type'  => 'text',
          'title' => __('Sister Concern SubTitle','medicare'),
        ),

        array(
          'id'    => 'sister-concern-title',
          'type'  => 'text',
          'title' => __('Sister Concern Title','medicare'),
        ),

        array(
          'id'     => 'sister-concern-list',
          'type'   => 'repeater',
          'title'  => __('Sister Concern List', 'medicare'),
          'fields' => array(

            array(
              'id'    => 'sister-concern-img',
              'type'  => 'media',
              'title' => __('Sister Concern Image','medicare'),
            ),
          ),
        ),
        
      )
     ));

  
}


