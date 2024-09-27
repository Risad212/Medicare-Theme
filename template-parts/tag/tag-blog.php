<section class="blog-section">
        <div class="container">
           <div class="row">
           <?php
                if (have_posts()) : 
                while (have_posts()) : the_post(); 
                ?>
                    <div class="col-lg-4">
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
                endwhile;
                else :
                echo '<p>No posts found under this category.</p>';
                endif;
                ?>
           </div>
        </div>
     </section> 