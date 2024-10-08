<?php 
  $options = get_option( 'medicare-options' ); 
  $emergency_img = $options['emergency-img']['url'];
  $emergency_subtitle = $options['emergency-subtitle'];
  $emergency_title = $options['emergency-title'];
  $emergency_disc = $options['emergency-disc'];
  $emergency_info = $options['emergency-info'];
?>

<section class="emargency-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="emargency-image">
                        <img class="img-fluid" src="<?php echo esc_url($emergency_img) ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="emargency-content">
                        <h5 class="subtitle"><?php echo esc_html($emergency_subtitle) ?></h5>
                        <h2 class="title"><?php echo esc_html($emergency_title) ?></h2>
                        <p><?php echo esc_html($emergency_disc) ?></p>
                        <div class="emarency-wrap">
                            <?php
                              foreach($emergency_info as $info){
                                $info_icon = esc_attr($info['emergency-info-icon']);
                                $info_title = esc_html($info['emergency-info-title']);
                                $info_text = esc_html($info['emergency-info-text']);
                             ?>
                               <div class="box">
                                <span class="icon">
                                   <i class="<?php echo $info_icon; ?>"></i>
                                </span>
                                <div>
                                    <span><?php echo $info_title; ?></span>
                                    <h5><?php echo $info_text; ?></h5>
                                </div>
                            </div>
                             <?php
                              }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>