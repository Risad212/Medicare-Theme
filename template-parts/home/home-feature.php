<?php 
  $options = get_option( 'medicare-options'); 
  $feature_list = $options['feature-list'];
?>

<section class="feature-section">
      <div class="container">
         <div class="row">
            <?php
              foreach($feature_list as $feature){
               $feature_icon = $feature['feature-icon'];
               $feature_title = $feature['feature-title'];
               $feature_disc = $feature['feature-disc'];
            ?>
              <div class="col-lg-4">
               <div class="feature-card">
                  <span class="icon">
                     <i class="<?php echo $feature_icon ?>"></i>
                  </span>
                  <h4 class="title"><?php echo $feature_title ?></h4>
                  <p><?php echo $feature_disc ?></p>
               </div>
            </div>
            <?php
              }
             ?>
         </div>
      </div>
   </section>