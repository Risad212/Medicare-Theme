<section class="blog-section page-section">
    <div class="container">
        <div class="row g-3">
            <?php 
            $query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            ));
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); 
               ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-card">
                            <div class="blog-img">
                            <a href="<?php the_permalink(); ?>">
                                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                            </div>
                            <div class="card-body">
                            <div class="cart-top">
                                <span class="author"><i class="fa-solid fa-user"></i> <?php echo esc_html(get_the_author()); ?></span>
                                <span class="date"><i class="fa-solid fa-calendar-days"></i> <?php echo esc_html(get_the_date()); ?></span>
                            </div>
                            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata(); 
            }
            ?>
        </div>
    </div>
</section>
