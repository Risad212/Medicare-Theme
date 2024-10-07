<section class="doctor-section">
    <div class="container">
        <div class="title-head">
            <span class="subtitle">OUR DOCTORS</span>
            <h3 class="title">Experienced Medical Specialist</h3>
        </div>
        <div class="row g-3">
            <?php
            $query = new WP_Query(array(
                'post_type' => 'doctors',
                'posts_per_page' => 3,
            ));

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $doctors = get_post_meta(get_the_ID(), 'medicare-doctor-metabox', true);
                    $social_list = isset($doctors['doctor-social-list']) ? $doctors['doctor-social-list'] : []; // Default to empty array
                  ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="doctor-card">
                            <div class="card-img">
                                <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php esc_attr(the_title()); ?>">
                                <ul class="social-media">
                                    <?php 
                                     if($social_list){
                                      foreach ($social_list as $social) {
                                        $social_link = isset($social['social-link']['url']) ? esc_url($social['social-link']['url']) : '#'; // Default link
                                        $social_icon = isset($social['social-icon']) ? esc_attr($social['social-icon']) : ''; // Default to empty string
                                       ?>
                                       <li class="item">
                                            <a href="<?php echo $social_link; ?>" target="_blank" rel="noopener noreferrer">
                                                <i class="<?php echo $social_icon; ?>"></i>
                                            </a>
                                        </li>
                                    <?php
                                    }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="card-content">
                                <h4 class="title"><?php the_title(); ?></h4>
                                <span class="speacility">Dermatologist</span> <!-- Consider dynamically pulling the specialty -->
                                <a href="<?php the_permalink(); ?>" class="card-btn">Book Appointment</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata(); // Reset post data after custom query
            ?>
        </div>
    </div>
</section>
