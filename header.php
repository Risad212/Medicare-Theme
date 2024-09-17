<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novena
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'medicare' ); ?></a>

	<?php 
       $options = get_option( 'medicare-options' ); 
       $header_address = $options['header-address'];
       $header_hours = $options['header-hours'];
       $header_social = $options['header-social'];
     ?>


 <!--========== Topbar Section ==========-->
 <section class="topbar">
      <div class="container">
         <div class="topbar-wrap">
            <div class="topbar-left">
               <span>
                  <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64"
                     xml:space="preserve">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path fill="#1C274C"
                           d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z">
                        </path>
                     </g>
                  </svg>
                  <span><?php echo $header_address; ?></span>
               </span>
               <span><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <path
                           d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                           fill="#1C274C"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M12 7.25C12.4142 7.25 12.75 7.58579 12.75 8V11.6893L15.0303 13.9697C15.3232 14.2626 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2626 15.3232 13.9697 15.0303L11.4697 12.5303C11.329 12.3897 11.25 12.1989 11.25 12V8C11.25 7.58579 11.5858 7.25 12 7.25Z"
                           fill="white"></path>
                     </g>
                  </svg>
                  <span><?php echo $header_hours; ?></span>
               </span>
            </div>
            <div class="topbar-right">
               <ul class="socail-list">
               <?php 
                  foreach($header_social as $social){
                     $social_link = $social['header-social-url']['url'];
                     $social_icon = $social['header-social-icon'];
                  ?>
                 <li class="item">
                     <a href="<?php echo $social_link; ?>">
                       <i class="<?php echo $social_icon; ?>"></i>
                     </a>
                  </li>
                <?php
                  }
                ?>
               </ul>
            </div>
         </div>
      </div>
   </section>

   <!--========== Header Section ==========-->
   <header class="header">
      <div class="container">
         <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
               <img src="<?php echo get_template_directory_uri()?>/assets/media/common/logo.png" alt="">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbar-content">
               <div class="hamburger-toggle order-lg-1">
                  <div class="hamburger">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
               <?php 
                  wp_nav_menu( array(
                     'theme_location' => 'primary-menu',
                     'menu_id'    => 'primary-menu',
                     'menu_class' => 'navbar-nav',
                  ) );
                ?>
            </div>
         </nav>
      </div>
   </header>