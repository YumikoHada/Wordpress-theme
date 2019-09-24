<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">

    <title><?php wp_title(''); echo ' | ';  bloginfo( 'name' ) ?></title>
<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrapper">
    <div class="container-fluid">
      <div class="row sticky-top" id="header">
        <div class="col-4" id="logo">
          <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-fluid rounded">
          </a>  
          <h1 id="sitetitle"><?php bloginfo('name'); ?></h1> -->
          <?php
          // Display the Custom Logo
          if (has_custom_logo()) {
          echo the_custom_logo(); ?> 
          <h1><a id="logotitle" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
          <?php }
          // No Custom Logo, just display the site's name
          else {
          ?>
          <h1><a id="logotitle" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
          <?php
          }
          ?>
          <!-- サイトのキャッチフレーズ -->
          <div class="site-tagline">
            <?php bloginfo( 'description' ); ?>
          </div>
          <!-- サイトのキャッチフレーズ -->
        </div>
        <div class="col-8 text-right" id="menu">
          <?php wp_nav_menu( array(
          'theme_location' => 'header_menu'
          ) ); ?>

<!--           <ul>
            <li><a href="#">menu1</a></li>
            <li><a href="#">menu2</a></li>
            <li><a href="#">menu3</a></li>
          </ul> -->
        </div>
      </div>
    <div class="row" id="main">
      <div class="col-9" id="contents">