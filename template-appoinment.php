<?php 
  /*
	Template Name: Appoinment Template
  */
  get_header();
?>

<!--========== BreadCamb Section ==========-->
<?php get_template_part('template-parts/appoinment/appoinment', 'bredcamb') ?>

<!--========== Appoinment Section ==========-->
<?php get_template_part('template-parts/appoinment/appoinment', 'appoinment') ?>

<?php get_footer() ?>