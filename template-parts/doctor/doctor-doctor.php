<section class="doctor-section page-section">
      <div class="container">
      <div class="row gy-4">
            <?php
               $query = new WP_Query(array(
                  'post_type' => 'doctors',
                  'posts_per_page' => 6,
                ));
                if($query->have_posts()){
                  while($query->have_posts()){
                     $query->the_post();
                     $doctors = get_post_meta( get_the_ID(), 'medicare-doctor-metabox', true );
                     $social_list = $doctors['doctor-social-list'];
                ?>
                 <div class="col-lg-4">
                   <div class="doctor-card">
                    <div class="card-img">
                     <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="">
                      <ul class="social-media">
                        <?php 
                           foreach($social_list as $social){
                            $social_link = $social['social-link']['url'];
                            $social_icon = $social['social-icon'];
                           ?>
                             <li class="item"><a href="<?php echo esc_url($social_link); ?>">
                               <i class="<?php echo esc_attr($social_icon) ?>"></i>
                             </a></li>
                         <?php
                           }
                         ?>
                     </ul>
                  </div>
                  <div class="card-content">
                     <h4 class="title"><?php the_title();?></h4>
                     <span class="speacility">Dermatologist</span>
                     <a href="<?php the_permalink() ?>" class="card-btn">Book Appoinment</a>
                  </div>
               </div>
              </div>
               <?php
                  }
                }
             ?>
         </div>
      </div>
   </section>