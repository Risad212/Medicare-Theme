<?php 
  $options = get_option( 'medicare-options' ); 
  $about_title = $options['about-title'];
  $about_disc = $options['about-disc'];
  $about_btn_text = $options['about-btn']['text'];
  $about_btn_link = $options['about-btn']['url'];
  $about_image_list = $options['about-list'];
  $about_large_image = $options['about-large-image'];
?>

<section class="about-section">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-12 col-lg-6">
               <div class="sotry-content">
                  <h3 class="title"><?php echo $about_title?? '' ?></h3>
                  <p class="mb-2"><?php echo $about_disc ?></p>
                  <a class="about-btn" href="<?php echo $about_btn_link ?>"><?php echo $about_btn_text ?></a>
               </div>
            </div>
            <div class="col-12 col-lg-6">
               <div class="row no-gutters">
                  <div class="col-6">
                     <?php 
                        foreach($about_image_list as $image){
                       ?>
                          <div class="single-thumb wow fadeInUp" data-wow-delay="1.2s" data-wow-duration=".9s">
                             <img class="lazy img-fluid" src="<?php echo $image['about-img']['url'] ?>" alt="">
                          </div>
                       <?php
                        }
                      ?>
                  </div>
                  <div class="col-6">
                     <div class="single-thumb wow fadeInUp" data-wow-delay="1.2s" data-wow-duration=".9s">
                        <img class="lazy img-fluid" src="<?php echo $about_large_image['url'] ?>" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>