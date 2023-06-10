<?php
/**
 * @package lozko24.pl
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;700&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
    defer></script>
  <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
    crossorigin="anonymous">

  <?php wp_head(); ?>


<body <?php body_class();?>>
  <div class="nav__top">
    <div class="nav__top-links">
      <a href="mailto:biuro@lozko24.pl" class="nav__top-link">
        <i class='bx bx-envelope'></i>
        biuro@lozko24.pl
      </a>
      <a href="tel:+48500148500" class="nav__top-link">
        <i class='bx bx-phone'></i>
        +48 500 148 500
      </a>
      <a href="/koszyk" class="nav__top-link">
        <i class='bx bx-cart'></i>
        Koszyk
      </a>
      <a href="/moje-konto" class="nav__top-link">
        <i class='bx bx-user'></i>
        Konto
      </a>
    </div>
  </div>
  <nav class="nav">
    <a href="/" class="nav__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lozko24-logo.png" alt="łóżko24.pl logo"
        class="nav__logo-img">
    </a>

    <?php wp_nav_menu(
                            array(
                                'theme_location' => 'lozko24_main_menu'
                            )
                        );
                    ?>
    <button class="nav__btn">
      <div class="nav__btn-box">
        <span class="nav__btn-span"></span>
      </div>
    </button>

  </nav>
  <main class="main">