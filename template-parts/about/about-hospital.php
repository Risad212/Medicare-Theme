<?php 
$options = get_option('medicare-options'); 
$about_page_circle_image = esc_url($options['about-circle-img']['url']);
$about_page_small_image = esc_url($options['about-small-img']['url']);
$about_page_large_image = esc_url($options['about-large-img']['url']);
$about_page_subtitle = esc_html($options['about-page-subtitle']);
$about_page_title = esc_html($options['about-page-title']);
$about_page_disc = esc_html($options['about-page-disc']);
$about_btn_text = esc_html($options['about-page-btn']['text']);
$about_btn_link = esc_url($options['about-page-btn']['url']);
?>

<div class="about-hospital page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image">
                    <div class="circle">
                        <img src="<?php echo $about_page_circle_image; ?>" alt="Circle Image">
                    </div>
                    <div class="first-img">
                        <img class="img-fluid" src="<?php echo $about_page_small_image; ?>" alt="Small Image">
                    </div>
                    <div class="second-img">
                        <img class="img-fluid" src="<?php echo $about_page_large_image; ?>" alt="Large Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h6 class="subtitle"><?php echo $about_page_subtitle; ?></h6>
                    <h2 class="title"><?php echo $about_page_title; ?></h2>
                    <p><?php echo $about_page_disc; ?></p>
                    <button class="about-btn">
                        <a href="<?php echo $about_btn_link; ?>"><?php echo $about_btn_text; ?></a>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="20" height="20" viewBox="0 0 512 512" class="">
                            <g>
                                <path d="m506.134 241.843-.018-.019-104.504-104c-7.829-7.791-20.492-7.762-28.285.068-7.792 7.829-7.762 20.492.067 28.284L443.558 236H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h423.557l-70.162 69.824c-7.829 7.792-7.859 20.455-.067 28.284 7.793 7.831 20.457 7.858 28.285.068l104.504-104 .018-.019c7.833-7.818 7.808-20.522-.001-28.314z" class=""></path>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
