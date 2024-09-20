<?php 
   $options = get_option( 'medicare-options' );
   $counter_bg = $options['counter-bg']['background-image']['url'];
   $counter_list = $options['counter-list'];
?>

<section id="counter" style="background-image: linear-gradient(
      rgba(41, 41, 41, 0.752),
      rgba(29, 29, 29, 0.73)
    ),
    url('<?php echo $counter_bg ?>');" class="parallax100">
      <div class="container">
         <!-- Counter Items-->
         <div class="row">
            <?php 
               foreach($counter_list as $counter){
                  $icon = $counter['counter-icon'];
                  $number = $counter['counter-number'];
                  $title = $counter['counter-title'];
               ?>
              <div class="col-md-3">
               <!-- Item -->
               <div class="item text-center wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".5s">
                  <span class="icon">
                     <i class="<?php echo $icon ?>"></i>
                  </span>
                  <h3 class="count"><?php echo $number ?></h3>
                  <h6><?php echo $title ?></h6>
               </div>
             </div>
            <?php
               }
             ?>
         </div>
      </div>
   </section>