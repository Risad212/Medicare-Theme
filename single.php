<?php
/*
  Template name: Blog Details Page
*/
get_header();
?>

	
<!--========== Breadcamb Section ==========-->
<?php get_template_part('template-parts/blogdetails/blogdetails', 'breadcamb')?>


<!--========== Service Details Section ==========-->
<?php get_template_part('template-parts/blogdetails/blogdetails', 'details')?>

<?php get_footer();