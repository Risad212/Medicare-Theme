<?php 
  /*
	Template Name: Home Template
  */
  get_header();
?>


<!--============== START SLIDER SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'slider') ?>


<!--============== FEATURE SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'feature') ?>

<!--============== ABOUT SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'about') ?>

<!--============== SERVICE SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'service') ?>

<!--============== COUNTER SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'counter') ?>

<!--============== DOCTORS SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'doctor') ?>

<!--============== TESTIMONIAL SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'testimonial') ?>

<!--============== BLOG SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'blog') ?>

<!--============== SISTER AND CONCERNS SECTION ===============-->
<?php get_template_part('template-parts/home/home', 'sister-concern') ?>

<?php get_footer()?>