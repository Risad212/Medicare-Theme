<?php 
$options = get_option('medicare-options'); 
$about_mission = $options['about-mission'];
?>

  <section class="our-vission">
        <div class="container">
            <div class="row">
                <?php
                  foreach($about_mission as $card){
                    $title = esc_html($card['about-mission-title']);
                    $disc = esc_html($card['about-mission-disc']);
                 ?>
                   <div class="col-lg-4">
                    <div class="single-vission-box">
                        <div class="icon">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M4.89163 13.2687L9.16582 17.5427L18.7085 8" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </div>
                        <h4 class="title"><?php echo $title ?></h4>
                        <p><?php echo $disc ?></p>
                    </div>
                </div>
                 <?php
                  }
                 ?>
            </div>
        </div>
    </section>