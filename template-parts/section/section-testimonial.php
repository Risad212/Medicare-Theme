<?php 
  $options = get_option( 'medicare-options' ); 
  $testimonial_subtitle = $options['testimonial-subtitle'];
  $testimonial_title = $options['testimonial-title'];
  $testimonial_list = $options['testimonial-list'];
?>

<section class="testimonial-section">
      <div class="container">
         <div class="title-head">
            <span class="subtitle"><?php echo $testimonial_subtitle ?></span>
            <h3 class="title"><?php echo $testimonial_title ?></h3>
         </div>
         <div class="testimonial-slider owl-carousel owl-theme">
            <?php 
               foreach($testimonial_list as $testimonial){
                  $testimonial_review = $testimonial['testimonial-review'];
                  $testimonial_img = $testimonial['reviewer-img']['url'];
                  $testimonial_name = $testimonial['reviewer-name'];
                  $testimonial_designation = $testimonial['reviewer-designation'];
            ?>
              <div class="single-slider">
               <p class="comment">
                 <?php echo $testimonial_review ?>
               </p>
               <img class="img-fluid" src="<?php echo $testimonial_img ?>" />
               <h3 class="name"><?php echo $testimonial_name ?></h3>
               <h4 class="job"><?php echo $testimonial_designation ?></h4>
             </div>
            <?php
               }
             ?>
         </div>
      </div>
   </section>