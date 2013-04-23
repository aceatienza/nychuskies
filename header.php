<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <!-- <link rel="profile" href="http://gmpg.org/xfn/11" /> -->
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
  <![endif]-->

  <!-- start wp_head -->
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
<!-- removed hgroup -->

  <div class="navbar"><!-- navbar -->
    <div class="navbar-inner">
      <!-- TODO: change brand to logo -->
      <a class="brand" href="<?php echo site_url(); ?>" alt="<?php bloginfo('name'); ?>" >
        <img src="<?php echo get_template_directory_uri() . '/images/default-logo.jpg' ?>">
      </a>
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        
        <div class="nav-collapse collapse">
          <?php 
              wp_nav_menu( array(
                  'menu'       => 'top_menu',
                  'depth'      => 2,
                  'container'  => false,
                  'menu_class' => 'nav',
                  'fallback_cb' => 'wp_page_menu',
                  'walker' => new twitter_bootstrap_nav_walker()) // in case we add drop down menus
              );
          ?>
        </div>
      </div>
    </div>
  </div><!-- /navbar -->



		

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

<!-- recent posts carousel -->
  <?php if ( is_front_page() ) : ?>
  <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">

      <?php $the_query = new WP_Query(array(
        'category_name' => 'Featured',
        'posts_per_page' => 1 ));
        while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>

      <div class="item active" style="height: 350px;">
        <?php the_post_thumbnail('full');?>
        <div class="carousel-caption">
          <h4><?php the_title();?></h4>
          <p><?php the_excerpt();?></p>
        </div>
      </div><!-- item active -->

      <?php endwhile; 
        wp_reset_postdata();
      ?>

      <?php 
      $the_query = new WP_Query(array(
      'category_name' => 'Featured', 
      'posts_per_page' => 3, 
      'offset' => 1 
      )); 
      while ( $the_query->have_posts() ) : 
      $the_query->the_post();
      ?>

      <div class="item" style="height: 350px;">
        <?php the_post_thumbnail('full');?>
        <div class="carousel-caption">
          <h4><?php the_title();?></h4>
          <p><?php the_excerpt();?></p>
        </div>
      </div><!-- item -->

      <?php 
      endwhile; 
      wp_reset_postdata();
      ?>

    </div><!-- carousel-inner -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
  </div><!-- end carousel -->
  <?php endif; ?>

	<div id="main" class="wrapper">