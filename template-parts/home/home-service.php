<?php 
$options = get_option('medicare-options');
$service_subtitle = isset($options['service-subtitle']) ? esc_html($options['service-subtitle']) : '';
$service_title = isset($options['service-title']) ? esc_html($options['service-title']) : '';
?>

<section class="service-section">
    <div class="container">
        <div class="title-head">
            <span class="subtitle"><?php echo $service_subtitle; ?></span>
            <h3 class="title"><?php echo $service_title; ?></h3>
        </div>
        <div class="row gy-4">
            <?php 
            $query = new WP_Query(array(
                'post_type' => 'services',
                'posts_per_page' => 6,
            ));
            
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $services = get_post_meta(get_the_ID(), 'medicare-service-metabox', true);
                    $service_icon = isset($services['service-icon']) ? esc_attr($services['service-icon']) : ''; // Ensure safe output
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-card">
                            <span class="icon">
                                <i class="<?php echo $service_icon; ?>"></i>
                            </span>
                            <h3 class="title"><?php the_title(); ?></h3>
                            <p><?php echo esc_html(get_the_excerpt()); ?></p>
                            <a class="card-btn" href="<?php echo esc_url(get_permalink()); ?>">Read more</a>
                        </div>
                    </div>
               <?php
                }
                wp_reset_postdata(); // Reset post data after custom query
            }
            ?>
        </div>
    </div>
</section>
