<?php 
  /*
	Template Name: Contact Template
  */
  get_header();
?>


<!--========== BreadCamb Section ==========-->
<?php get_template_part('template-parts/contact/contact', 'bredcamb') ?>

<!--========== Contact Section ==========-->
<?php get_template_part('template-parts/contact/contact', 'contact') ?>

<!--========== Google Map Section ==========-->
<?php get_template_part('template-parts/contact/contact', 'map') ?>


<?php get_footer()?>