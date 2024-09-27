<?php 
$options = get_option('medicare-options');
$counter_bg = isset($options['counter-bg']['background-image']['url']) ? esc_url($options['counter-bg']['background-image']['url']) : ''; // Safely output URL
$counter_list = isset($options['counter-list']) ? $options['counter-list'] : []; // Default to an empty array if not set
?>

<section id="counter" style="background-image: linear-gradient(
      rgba(41, 41, 41, 0.752),
      rgba(29, 29, 29, 0.73)
    ),
    url('<?php echo $counter_bg; ?>');" class="parallax100">
    <div class="container">
        <div class="row">
            <?php 
            foreach ($counter_list as $counter) {
                $icon = isset($counter['counter-icon']) ? esc_attr($counter['counter-icon']) : ''; // Safely output icon class
                $number = isset($counter['counter-number']) ? esc_html($counter['counter-number']) : ''; // Safely output number
                $title = isset($counter['counter-title']) ? esc_html($counter['counter-title']) : ''; // Safely output title
            ?>
                <div class="col-md-3">
                    <!-- Item -->
                    <div class="item text-center wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".5s">
                        <span class="icon">
                            <i class="<?php echo esc_attr($icon); ?>"></i>
                        </span>
                        <h3 class="count"><?php echo esc_html($number); ?></h3>
                        <h6><?php echo esc_html($title); ?></h6>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
