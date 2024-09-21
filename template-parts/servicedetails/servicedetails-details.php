<section class="custom-service-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1><?php the_title()?></h1>
                <?php the_content()?>
            </div>
            <div class="col-lg-4">
             <div class="service-post-wrap">
                <?php if ( is_active_sidebar( 'service-sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'service-sidebar' ); ?>
                <?php endif; ?>
             </div>
        </div>
    </div>
</section>
