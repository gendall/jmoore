<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up  to the content
 *
 * @package jmoore
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="Content-Type" content="text/html; <?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>

  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
  <link type="img/png" rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

</head>
<body <?php body_class(); ?>>
<!--[if lt IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <header>

    <div class="row-one row">
      <div class="container">

        <h1 class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Jennifer Moore</a>
        </h1>

      </div> <!-- /.container -->
    </div> <!-- /.row-one -->

    <div class="row-two row">
      <div class="container">

        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav' ) ); ?>

      </div> <!-- /.container -->
    </div> <!-- /.row-two -->

  </header>

  <div class="main-content-wrapper">

