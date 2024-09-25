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
            <div class="col-lg-3">
               <div class="footer-widget-1">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                     <img class="img-fluid" src="<?php echo $footer_logo ?>" alt="">
                  </a>
                  <p><?php echo $footer_text ?></p>
                  <div class="social-list">
                     <?php 
                        foreach($footer_social as $social){
                           $link = $social['footer-link']['url'];
                           $icon = $social['footer-icon'];
                     ?>
                       <span class="item">
                        <a href="<?php echo $link ?>">
                          <i class="<?php echo $icon ?>"></i>
                        </a>
                     </span>
                     <?php
                        }
                      ?>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
              <h4 class="widget-title">Latest Post</h4>
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3">
               <h4 class="widget-title">Usefull Links</h4>
                <?php if (is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3">
               <div class="footer-widget-4">
                  <h3 class="widget-title">Contact</h3>
                  <ul class="contact-list">
                     <?php 
                        foreach($footer_contact_info as $info){
                           $icon = $info['footer-contact-icon'];
                           $text = $info['footer-contact-text'];
                     ?>
                      <li class="item">
                        <a href="#">
                           <span class="icon">
                             <i class="<?php echo $icon  ?>"></i>
                           </span>
                           <p><?php echo $text ?></p>
                        </a>
                     </li>
                     <?php
                        }
                      ?>
                  </ul>
               </div>
            </div>
         </div>
         <div class="copay-write">
            <span class="text"><?php echo $copywrite_left ?></span>
            <span class="text"><?php echo $copywrite_right ?></span>
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