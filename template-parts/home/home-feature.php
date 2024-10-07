<?php 
  $options = get_option( 'medicare-options'); 
  $feature_list = $options['feature-list'];
?>

<section class="feature-section">
      <div class="container">
         <div class="row g-3">
            <?php
              foreach($feature_list as $feature){
               $feature_icon = $feature['feature-icon'];
               $feature_title = $feature['feature-title'];
               $feature_disc = $feature['feature-disc'];
            ?>
              <div class="col-lg-4 col-md-6 col-sm-12">
               <div class="feature-card">
                  <span class="icon">
                     <i class="<?php echo esc_attr($feature_icon) ?>"></i>
                  </span>
                  <h4 class="title"><?php echo esc_html($feature_title) ?></h4>
                  <p><?php echo esc_html($feature_disc) ?></p>
               </div>
            </div>
            <?php
              }
             ?>
         </div>
      </div>
   </section>