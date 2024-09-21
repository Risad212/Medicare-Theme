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

      // breadcrumb section
      CSF::createSection($prefix, array(
        'title'  => __('breadcrumb Section', 'medicare'),
        'icon'      => 'fa fa-rocket',
        'fields' =>  array(
          array(
            'id'    => 'breadcrumb-bg',
            'type'  => 'background',
            'title' => __('breadcrumb Background', 'medicare'),
             'background_color' => false
          ),
        )
      ));

      /*=========================== About Page ==========================*/

      // About Hospital Section 
      CSF::createSection($prefix, array(
         'title'  => __('About Hospital Section', 'medicare'),
         'icon'      => 'fa fa-rocket',
         'fields' =>  array(

            array(
              'id'    => 'about-circle-img',
              'type'  => 'media',
              'title' => __('About Circle Image','medicare'),
            ),

            array(
              'id'    => 'about-small-img',
              'type'  => 'media',
              'title' => __('About Small Image','medicare'),
            ),

            array(
              'id'    => 'about-large-img',
              'type'  => 'media',
              'title' => __('About Large Image','medicare'),
            ),

            array(
              'id'    => 'about-page-subtitle',
              'type'  => 'text',
              'title' => __('About Page Subtitle','medicare'),
            ),

            array(
              'id'    => 'about-page-title',
              'type'  => 'text',
              'title' => __('About Page Title','medicare'),
            ),

            array(
              'id'    => 'about-page-disc',
              'type'  => 'textarea',
              'title' => __('About Page Discription','medicare'),
            ),

            array(
              'id'    => 'about-page-btn',
              'type'  => 'link',
              'title' => __('About Page Button','medicare'),
            ),
  
         )
      ));

      // About Mission 
      CSF::createSection($prefix, array(
        'title'  => __('About Mission Section', 'medicare'),
        'icon'      => 'fa fa-rocket',
        'fields' => array(
          array(
            'id'     => 'about-mission',
            'type'   => 'repeater',
            'title'  => __('About Mission Card', 'medicare'),
            'fields' => array(
          
              array(
                'id'    => 'about-mission-title',
                'type'  => 'text',
                'title' => __('About Mission Title', 'medicare')
              ),

              array(
                'id'    => 'about-mission-disc',
                'type'  => 'textarea',
                'title' => __('About Mission Discription', 'medicare')
              ),
          
            ),
          ),
          )
        ));


       // Emergency section
      CSF::createSection($prefix, array(
        'title'  => __('Emergency Section', 'medicare'),
        'icon'      => 'fa fa-rocket',
        'fields' => array(
          array(
            'id'    => 'emergency-img',
            'type'  => 'media',
            'title' => __('Emergency Image', 'medicare')
           ),

           array(
            'id'    => 'emergency-subtitle',
            'type'  => 'text',
            'title' => __('Emergency SubTitle', 'medicare')
           ),

           array(
            'id'    => 'emergency-title',
            'type'  => 'text',
            'title' => __('Emergency Title', 'medicare')
           ),

           array(
            'id'    => 'emergency-disc',
            'type'  => 'textarea',
            'title' => __('Emergency Discription', 'medicare')
           ),

           array(
            'id'     => 'emergency-info',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'fields' => array(
          
              array(
                'id'    => 'emergency-info-icon',
                'type'  => 'icon',
                'title' => __('Emergency Icon', 'medicare')
              ),

              array(
                'id'    => 'emergency-info-title',
                'type'  => 'text',
                'title' => __('Emergency Title', 'medicare')
              ),

              array(
                'id'    => 'emergency-info-text',
                'type'  => 'text',
                'title' => __('Emergency Info Text', 'medicare')
              ),
          
            ),
          ),

          )
        ));

         // Prevention section
         CSF::createSection($prefix, array(
          'title'  => __('Prevention Section', 'medicare'),
          'icon'      => 'fa fa-rocket',
          'fields' =>   array(
            array(
              'id'    => 'prevention-subtitle',
              'type'  => 'text',
              'title' => __('Prevention SubTitle', 'medicare')
             ),
  
             array(
              'id'    => 'prevention-title',
              'type'  => 'text',
              'title' => __('Prevention Title', 'medicare')
             ),

             array(
              'id'     => 'prevention-list',
              'type'   => 'repeater',
              'title'  => __('Prevention List', 'medicare'),
              'fields' => array(
            
                array(
                  'id'    => 'prevention-icon',
                  'type'  => 'icon',
                  'title' => __('Prevention Icon', 'medicare'),
                ),

                array(
                  'id'    => 'prevention-title',
                  'type'  => 'text',
                  'title' => __('Prevention Title', 'medicare'),
                ),

                array(
                  'id'    => 'prevention-disc',
                  'type'  => 'textarea',
                  'title' => __('Prevention Discription', 'medicare'),
                ),
            
              ),
            ),

          )
         ));


        // Contact section
        CSF::createSection($prefix, array(
           'title'  => __('Contact Section', 'medicare'),
          'icon'      => 'fa fa-rocket',
          'fields' =>   array(

            array(
              'id'     => 'contact-info',
              'type'   => 'repeater',
              'title'  => __('Contact Information', 'medicare'),
              'fields' => array(
            
                array(
                  'id'    => 'contact-icon',
                  'type'  => 'icon',
                  'title' => __('Contact icon', 'medicare'),
                ),

                array(
                  'id'    => 'contact-title',
                  'type'  => 'text',
                  'title' => __('Contact Title', 'medicare'),
                ),

                array(
                  'id'    => 'contact-info-text',
                  'type'  => 'text',
                  'title' => __('Contact Info Text', 'medicare'),
                ),
            
              ),
            ),
            array(
              'id'    => 'contact-map',
              'type'  => 'map',
              'title' => __('Contact Map', 'medicare'),
            ),
          ) 
        ));

        // Blog Details Social links
        CSF::createSection($prefix, array(
          'title'  => __('Blog Details Social link', 'medicare'),
         'icon'      => 'fa fa-rocket',
         'fields' =>   array(

           array(
             'id'     => 'blog-details-social',
             'type'   => 'repeater',
             'title'  => __('Blog Details Social', 'medicare'),
             'fields' => array(
  
               array(
                 'id'    => 'blog-details-social-icon',
                 'type'  => 'icon',
                 'title' => __('Social icon', 'medicare'),
               ),

               array(
                'id'    => 'blog-details-social-link',
                'type'  => 'link',
                'title' => __('Social link', 'medicare'),
              ),
           
             ),
           ),
         ) 
       ));

}


