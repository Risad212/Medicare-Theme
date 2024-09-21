<?php 
   $options = get_option( 'medicare-options' ); 
   $breadcrumb_bg = $options['breadcrumb-bg']['background-image']['url'];
 ?>

<div class="breadcrumb" style="background-image: linear-gradient(rgb(0 0 0 / 68%), rgb(0 0 0 / 66%)),
    url(<?php echo $breadcrumb_bg; ?>);">
        <div class="container">
            <div class="col-xs-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-text-wrapper">
                        <h2 class="page-name">
                           <?php 
                             if(is_page('about')){
                                echo 'About Medicare';
                             }else if(is_page('service')){
                                echo 'Our Services';
                             }else if(is_page('doctor')){
                                echo 'Our Doctors';
                             }else if(is_page('blog')){
                                echo 'Our Blogs';
                             }else if(is_page('contact')){
                                echo 'Contacts us';
                             }else if(is_page('appoinment')){
                                echo 'Make an Appoinment';
                             }
                            ?>
                        </h2>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li><?php the_title(); ?></li>
                        </ul>
                    </div><!--/.breadcrumb-text-wrapper-->
                </div><!--/.breadcrumb-content-->
            </div><!--/.col-xs-12-->
        </div>
    </div>