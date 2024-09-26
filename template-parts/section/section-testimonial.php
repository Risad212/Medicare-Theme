<?php 
$options = get_option('medicare-options'); 
$testimonial_subtitle = isset($options['testimonial-subtitle']) ? esc_html($options['testimonial-subtitle']) : ''; 
$testimonial_title = isset($options['testimonial-title']) ? esc_html($options['testimonial-title']) : ''; 
$testimonial_list = isset($options['testimonial-list']) ? $options['testimonial-list'] : []; // Default to empty array
?>

<section class="testimonial-section">
    <div class="container">
        <div class="title-head">
            <span class="subtitle"><?php echo $testimonial_subtitle; ?></span>
            <h3 class="title"><?php echo $testimonial_title; ?></h3>
        </div>
        <div class="testimonial-slider owl-carousel owl-theme">
            <?php 
            foreach ($testimonial_list as $testimonial) {
                $testimonial_review = isset($testimonial['testimonial-review']) ? esc_html($testimonial['testimonial-review']) : ''; 
                $testimonial_img = isset($testimonial['reviewer-img']['url']) ? esc_url($testimonial['reviewer-img']['url']) : ''; 
                $testimonial_name = isset($testimonial['reviewer-name']) ? esc_html($testimonial['reviewer-name']) : ''; 
                $testimonial_designation = isset($testimonial['reviewer-designation']) ? esc_html($testimonial['reviewer-designation']) : ''; 
            ?>
                <div class="single-slider">
                    <p class="comment"><?php echo $testimonial_review; ?></p>
                    <?php if ($testimonial_img): ?>
                        <img class="img-fluid" src="<?php echo $testimonial_img; ?>" alt="<?php echo $testimonial_name; ?>'s image" />
                    <?php endif; ?>
                    <h3 class="name"><?php echo $testimonial_name; ?></h3>
                    <h4 class="job"><?php echo $testimonial_designation; ?></h4>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
