<?php 
  /*
	Template Name: Category Template
  */
  get_header();
?>

<!--========== BreadCamb Category ==========-->
<?php get_template_part('template-parts/category/category', 'breadcamb') ?>

<!--========== Blog Category ==========-->
<?php get_template_part('template-parts/category/category', 'blog') ?>

<?php get_footer() ?>