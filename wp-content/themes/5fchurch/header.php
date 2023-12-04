<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/60b352a9e9.js" ></script>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <!-- slick slider -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
    <!--site fonts-->
    <style>
      @font-face {
          font-family: 'Proxima Nova Rg';
          src: url('<?php echo get_template_directory_uri(); ?>/fonts/ProximaNova-Regular.woff2') format('woff2'),
              url('<?php echo get_template_directory_uri(); ?>/fonts/ProximaNova-Regular.woff') format('woff');
          font-weight: normal;
          font-style: normal;
          font-display: swap;
      }
      @font-face {
          font-family: 'Adobe Garamond Pro';
          src: url('<?php echo get_template_directory_uri(); ?>/fonts/AGaramondPro-Bold.woff2') format('woff2'),
              url('<?php echo get_template_directory_uri(); ?>/fonts/AGaramondPro-Bold.woff') format('woff'),
          font-weight: bold;
          font-style: normal;
          font-display: swap;
      }
      @font-face {
          font-family: 'Adobe Garamond Pro';
          src: url('<?php echo get_template_directory_uri(); ?>/fonts/AGaramondPro-Regular.woff2') format('woff2'),
              url('<?php echo get_template_directory_uri(); ?>/fonts/AGaramondPro-Regular.woff') format('woff'),
          font-weight: normal;
          font-style: normal;
          font-display: swap;
      }
      @font-face {
          font-family: 'Adobe Garamond Pro';
          src: url('AGaramondPro-Semibold.woff2') format('woff2'),
              url('AGaramondPro-Semibold.woff') format('woff'),
          font-weight: 600;
          font-style: normal;
          font-display: swap;
      }
    </style>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
        <!--<img src="images/header-logo.png" style="width: 100px; height: 100px;">-->
        THE GREATER WORKS MINISTRY
        </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu( array('menu' => 'Header_Menu', 'container' => '', 'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>' )); ?>
      <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="mission.php">About Us</a>

          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visitus.php">Visit Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="good-news.php">The Good News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testimonials.php">Testimonials / miracles</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="event.php">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        
      </ul> -->
        <a href="<?php echo get_site_url(); ?>/donation" class="btn btn-outline-success">donate</a>
    </div>
  </div>
</nav>
</header>
