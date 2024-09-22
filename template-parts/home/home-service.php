<?php 
  $options = get_option( 'medicare-options' );
  $service_subtitle = $options['service-subtitle'];
  $service_title = $options['service-title'];
?>

<section class="service-section">
      <div class="container">
         <div class="title-head">
            <span class="subtitle"><?php echo $service_subtitle ?></span>
            <h3 class="title"><?php echo $service_title ?></h3>
         </div>
         <div class="row gy-4">
            <?php 
              $query = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => 6,
              ));
              if($query->have_posts()){
                 while($query->have_posts()){
                     $query->the_post();
                     $services = get_post_meta( get_the_ID(), 'medicare-service-metabox', true );
                     $service_icon = $services['service-icon'];
                ?>
                <div class="col-lg-4">
                 <div class="service-card">
                  <span class="icon">
                     <i class="<?php echo $service_icon ?>"></i>
                  </span>
                  <h3 class="title"><?php the_title();?></h3>
                  <p><?php the_excerpt() ?></p>
                  <a class="card-btn" href="<?php the_permalink() ?>">Read more</a>
               </div>
              </div>
               <?php
                 }
              }
             ?>
         </div>
      </div>
   </section>