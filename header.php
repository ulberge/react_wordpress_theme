<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">


<header id="header" role="banner" class="">

    <nav class="navbar navbar-default navbar-static-top">
      <span class="headerCorner"></span>
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
            <span class="logo"></span>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php 
            $defaults = array('menu_class' => 'nav navbar-nav',
                'menu' => 'main-menu');
            wp_nav_menu( $defaults );
          ?>
          <div class="nav navbar-nav navbar-right">
            <ul id="menu-main-menu" class="nav navbar-nav">
          <?php if ( is_user_logged_in() ) { ?>
              <li class="menu-item"><a href="/wp-login.php?action=logout">Log out</a></li>
          <?php } else { ?>
              <li class="menu-item"><a href="<?php echo get_site_url(); ?>/login">Login</a></li>
          <?php } ?>
            </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</header>
<div id="container">