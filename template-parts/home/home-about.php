<?php 
$options = get_option( 'medicare-options' ); 
$about_title = isset( $options['about-title'] ) ? $options['about-title'] : '';
$about_disc = isset( $options['about-disc'] ) ? $options['about-disc'] : '';
$about_btn_text = isset( $options['about-btn']['text'] ) ? $options['about-btn']['text'] : '';
$about_btn_link = isset( $options['about-btn']['url'] ) ? $options['about-btn']['url'] : '';
$about_image_list = isset( $options['about-list'] ) ? $options['about-list'] : [];
$about_large_image = isset( $options['about-large-image'] ) ? $options['about-large-image'] : '';
?>

<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="story-content"> <!-- Corrected the typo from "sotry-content" to "story-content" -->
                    <h3 class="title"><?php echo esc_html( $about_title ); ?></h3>
                    <p class="mb-2"><?php echo esc_html( $about_disc ); ?></p>
                    <a class="about-btn" href="<?php echo esc_url( $about_btn_link ); ?>"><?php echo esc_html( $about_btn_text ); ?></a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row no-gutters">
                    <div class="col-6">
                        <?php 
                        if ( ! empty( $about_image_list ) && is_array( $about_image_list ) ) : // Check if the image list is not empty and is an array
                            foreach ( $about_image_list as $image ) :
                                ?>
                                <div class="single-thumb wow fadeInUp" data-wow-delay="1.2s" data-wow-duration=".9s">
                                    <img class="lazy img-fluid" src="<?php echo esc_url( $image['about-img']['url'] ); ?>" alt="">
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="col-6">
                        <div class="single-thumb wow fadeInUp" data-wow-delay="1.2s" data-wow-duration=".9s">
                            <?php if ( ! empty( $about_large_image ) ) : // Check if the large image is not empty ?>
                                <img class="lazy img-fluid" src="<?php echo esc_url( $about_large_image['url'] ); ?>" alt="">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
