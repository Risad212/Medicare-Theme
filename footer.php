<?php 
  $options = get_option( 'medicare-options' ); 
  $footer_logo = $options['footer-logo']['url'];
  $footer_text = $options['footer-disc'];
  $footer_social = $options['footer-social'];
  $footer_contact_info = $options['footer-contact-info'];
  $copywrite_left = $options['copywrite-left'];
  $copywrite_right = $options['copywrite-right'];
?>
<footer class="footer-section">
      <div class="container">
         <div class="row gy-4 footer-content">
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="footer-widget-1">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                     <img class="img-fluid" src="<?php echo esc_url($footer_logo) ?>" alt="">
                  </a>
                  <p><?php echo $footer_text ?></p>
                  <div class="social-list">
                  <?php 
                     // Check if $footer_social is defined and is an array
                     if ( ! empty( $footer_social ) && is_array( $footer_social ) ) : 
                        foreach ( $footer_social as $social ) :
                           // Ensure that the necessary keys exist before accessing them
                           $link = isset( $social['footer-link']['url'] ) ? esc_url( $social['footer-link']['url'] ) : '';
                           $icon = isset( $social['footer-icon']) ? esc_attr( $social['footer-icon']) : '';
                           ?>
                           <span class="item">
                                 <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
                                    <i class="<?php echo $icon; ?>"></i>
                                 </a>
                           </span>
                           <?php
                        endforeach; 
                     endif; 
                     ?>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <h4 class="widget-title">Latest Post</h4>
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <h4 class="widget-title">Usefull Links</h4>
                <?php if (is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
               <div class="footer-widget-4">
                  <h3 class="widget-title">Contact</h3>
                  <ul class="contact-list">
                  <?php 
                     // Check if $footer_contact_info is defined and is an array
                     if ( ! empty( $footer_contact_info ) && is_array( $footer_contact_info ) ) : 
                        foreach ( $footer_contact_info as $info ) :
                           // Ensure the necessary keys exist before accessing them
                           $icon = isset( $info['footer-contact-icon'] ) ? esc_attr( $info['footer-contact-icon']) : '';
                           $text = isset( $info['footer-contact-text']) ? esc_html( $info['footer-contact-text']) : '';
                           ?>
                           <li class="item">
                              <span class="icon">
                                       <i class="<?php echo esc_attr($icon); ?>"></i> <!-- Use esc_attr for the icon class -->
                                 </span>
                                 <p><?php echo esc_html($text); ?></p> <!-- Use esc_html for the text -->
                           </li>
                           <?php
                        endforeach; 
                     endif; 
                     ?>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copay-write">
            <span class="text"><?php echo esc_html($copywrite_left) ?></span>
            <span class="text"><?php echo esc_html($copywrite_right) ?></span>
         </div>
      </div>
   </footer>






   <!-- Back To Top -->
   <div class="scrollup">
      <span class="scroll-effects"></span>
   </div>
   <?php wp_footer(); ?>
</body>
</html>