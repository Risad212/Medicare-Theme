<?php 
       $options = get_option( 'medicare-options' ); 
       $slider_list = $options['slider-list'];
?>

<section class="slider-section">
    <div class="carousel-single-item owl-carousel owl-theme">
        <?php 
        if ( ! empty( $slider_list ) && is_array( $slider_list ) ) : // Check if the slider list is not empty and is an array
            foreach ( $slider_list as $slider ) :
                $slider_image = isset( $slider['slider-image']) ? $slider['slider-image'] : '';
                $slider_title = isset( $slider['slider-title']) ? $slider['slider-title'] : '';
                $slider_disc = isset( $slider['slider-disc']) ? $slider['slider-disc'] : '';
                $slider_btn_text = isset( $slider['slider-button']['text']) ? $slider['slider-button']['text'] : '';
                $slider_btn_url = isset( $slider['slider-button']['url']) ? $slider['slider-button']['url'] : '';
                ?>
                <div class="single-slider" style="background-image: url('<?php echo esc_url( $slider_image['url'] ); ?>');">
                    <div class="slider-overlay">
                        <div class="container">
                            <div class="title">
                                <h2><?php echo esc_html( $slider_title ); ?></h2>
                                <p><?php echo esc_html( $slider_disc ); ?></p>
                                <div class="btn-title-home">
                                    <a href="<?php echo esc_url( $slider_btn_url ); ?>" class="btn-title"><?php echo esc_html( $slider_btn_text ); ?></a>
                                </div><!-- /.btn-title-home -->
                            </div><!-- /.title -->
                        </div><!-- /.container -->
                    </div><!-- /.slider-overlay -->
                </div><!-- /.single-slider -->
                <?php
            endforeach;
        endif; 
        ?>
    </div><!-- /.carousel-single-item -->
</section><!-- /.slider-section -->
