<section class="blog-section page-section">
    <div class="container">
        <div class="row">
            <?php 
            // Create a new WP_Query to fetch the latest three blog posts
            $query = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
            ));

            // Check if the query has posts
            if ($query->have_posts()) {
                // Loop through the posts
                while ($query->have_posts()) {
                    $query->the_post(); 
            ?>
                    <div class="col-lg-4">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-top">
                                    <span class="author"><i class="fa-solid fa-user"></i> <?php echo get_the_author(); ?></span>
                                    <span class="date"><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></span>
                                </div>
                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
                // Reset post data to the original query
                wp_reset_postdata(); 
            }
            ?>
        </div>
    </div>
</section>
