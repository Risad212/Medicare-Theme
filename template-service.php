<?php 
  /*
	Template Name: Service Template
  */
  get_header();
?>

<!--========== BreadCamb Section ==========-->
<?php get_template_part('template-parts/header/header', 'bredcamb') ?>


<!--========== Services Section ==========-->
<?php get_template_part('template-parts/service/service', 'service') ?>


<!--========== Emargency Section ==========-->
<?php get_template_part('template-parts/service/service', 'emargency') ?>


<!--========== Prevention Section ==========-->
<?php get_template_part('template-parts/service/service', 'prevention') ?>


<?php get_footer()?>