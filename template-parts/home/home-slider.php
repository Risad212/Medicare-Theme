<?php 
       $options = get_option( 'medicare-options' ); 
       $slider_list = $options['slider-list'];
?>

<section class="slider-section">
      <div class="carousel-single-item owl-carousel owl-theme">
         <?php 
              foreach($slider_list as $slider){
               $slider_image = $slider['slider-image'];
               $slider_title = $slider['slider-title'];
               $slider_disc = $slider['slider-disc'];
               $slider_btn_text = $slider['slider-button']['text'];
               $slider_btn_url = $slider['slider-button']['url'];
            ?>
            <div class="single-slider" style="background-image: url('<?php echo $slider_image['url'] ?>');">
            <div class="slider-overlay">
               <div class="container">
                  <div class="title">
                     <h2><?php echo $slider_title ?></h2>
                     <p><?php echo $slider_disc ?></p>
                     <div class="btn-title-home">
                        <a href="<?php echo $slider_btn_url ?>" class="btn-title"><?php echo $slider_btn_text ?></a>
                     </div><!--/.btn-title-home-->
                  </div><!--/.title-->
               </div><!--container-->
            </div><!--/.slider-overlay-->
           </div><!--/.single-slider-->
           <?php
            }
          ?>
      </div>
   </section>