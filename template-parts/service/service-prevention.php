<?php 
  $options = get_option( 'medicare-options' ); 
  $prevention_subtitle = esc_html($options['prevention-subtitle']);
  $prevention_title = esc_html($options['prevention-title']);
  $prevention_list = $options['prevention-list'];
?>

<section class="prevention-section">
        <div class="container">
            <div class="title-head">
                <span class="subtitle"><?php echo $prevention_subtitle ?></span>
                <h3 class="title"><?php echo $prevention_title ?></h3>
            </div>
            <div class="row gx-4">
                <?php 
                    foreach($prevention_list as $item){
                    $icon = esc_attr($item['prevention-icon']);
                    $title = esc_html($item['prevention-title']);
                    $discription = esc_html($item['prevention-disc']);
                  ?>
                  <div class="col-lg-6 col-md-12">
                    <div class="single-prevention">
                        <span class="icon">
                            <i class="<?php echo $icon ?>"></i>
                        </span>
                        <div class="content">
                            <h4 class="title"><?php echo $title ?></h4>
                            <p><?php echo $discription ?></p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                 ?>
            </div>
        </div>
    </section>
