<?php 
  $options = get_option( 'medicare-options' ); 
  $contact_info = $options['contact-info'];
?>

<section class="contact-page page-section">
  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-6 col-md-6">
        <div class="contact-info">
           <?php 
              foreach($contact_info as $contact){
                  $icon = $contact['contact-icon'];
                  $title = $contact['contact-title'];
                  $text = $contact['contact-info-text'];
              ?>
               <div class="single-info">
               <span class="icon">
                 <i class="<?php echo esc_attr($icon) ?>"></i>
               </span>
            <div class="content">
              <h4 class="title"><?php echo esc_html($title) ?></h4>
              <span><?php echo esc_html($text) ?></span>
            </div>
           </div>
            <?php
              }
            ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="04590d6" title="Contact Form"]') ?>
        </div>
      </div>
    </div>
  </div>
</section>