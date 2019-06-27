<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('the_title'); ?></title>
    <meta name="author" content="Jochem de Wit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body lang="nl">
  <header class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/afb/strand.jpg')">
      <div class="wrapper">
        <nav>
          <?php $argumenten = ['theme_location' => 'header', ]; ?>
          <?php wp_nav_menu($argumenten); ?>
        </nav>
          <a href="<?= home_url()?>"><h1><?php bloginfo('name'); ?></h1></a>
          <p><?php bloginfo('description'); ?></p>
      </div>
  </header>
