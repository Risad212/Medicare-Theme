<?php 
  /*
	Template Name: Doctor Template
  */
  get_header();
?>

<!--========== BreadCamb Section ==========-->
<?php get_template_part('template-parts/doctor/doctor', 'bredcamb') ?>

<!--========== Doctors Section ==========-->
<?php get_template_part('template-parts/doctor/doctor', 'doctor') ?>

<?php get_footer() ?>