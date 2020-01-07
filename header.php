<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Michiel Theelen">

    <?php wp_head();?>

    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
</head>

<body <?php body_class(); ?>>
    <div class="viewport">

            <!-- Header with logo -->
            <header class="logo-container">
                <a href="<?php bloginfo('wpurl');?>">
                    <div class="logo" style="background-image:
                    url(<?php echo get_template_directory_uri(); ?>/images/ic_chroma+voordevorm_24px.svg);"></div>
                </a>
            </header>

            <!-- Responsive Navigation Bar -->
            <nav id="main-nav" class="sticky shadow">

              <!-- Hamburger icon mobile layout -->
              <button class="hamburger">
                <span>
                  <span></span>
                </span> <!-- nth-last-child(3) -->
                <span>
                  <span></span>
                </span> <!-- nth-last-child(2) -->
                <span>
                  <span></span>
                </span> <!-- nth-last-child(1) -->
              </button>

              <!-- Navigation menu loaded from wordpress -->
              <?php wp_nav_menu( array( 'theme_location' => 'main-nav') ); ?>



            </nav>
