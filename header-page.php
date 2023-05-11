<?php
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header class="header header-page">
    <div class="container">
        <div class="header__inner">  
        <?php
            wp_nav_menu([
              'theme_location' => 'mobile-menu',
              'container' => '',
              'menu_class' => 'mobile-menu'
            ]);
          ?>
        <div class="nav-icon">
          <div class="nav-icon__middle"></div>
        </div>

        <nav class="menu">
          <?php
            wp_nav_menu([
              'theme_location' => 'menu-header-left',
              'container' => '',
              'menu_class' => 'menu__list'
            ]);
          ?>
        </nav>
        <a href="/" class="logo">
            <img src="<?php echo  get_template_directory_uri()?>./assets/images/home/logo.png" alt="img">
        </a>

        <nav class="menu">
          <?php
            wp_nav_menu([
              'theme_location' => 'menu-header-right',
              'container' => '',
              'menu_class' => 'menu__list'
            ]);
          ?>
        </nav>
        <div class="header__contact">
          <a href="<?php the_field('ssylka_na_telefon_v_shapke', 'options')?>" class="header__contact-phone">
            <?php the_field('telefon_v_shapke', 'options')?>
          </a>
            <button class="header__contact-btn">ЗАКАЗАТЬ ЗВОНОК</button>
        </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
        </div>
    </div>
</header>