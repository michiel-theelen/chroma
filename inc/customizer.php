<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('quote', array(
      'title'   => __('quote', 'chroma'),
      'description' => sprintf(__('Options for quote.','wpbootstrap')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('quote_image', array(
      'default'   => get_bloginfo('template_directory').'/images/schelp.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'quote_image', array(
      'label'   => __('Quote background image:', 'chroma'),
      'section' => 'quote',
      'settings' => 'quote_image',
      'priority'  => 1
    )));

    $wp_customize->add_setting('quote_text', array(
      'default'   => get_bloginfo('template_directory').'/images/schelp.jpg',
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'quote_text', array(
      'label'   => __('Quote background image:', 'chroma'),
      'section' => 'quote',
      'settings' => 'quote_image',
      'priority'  => 1
    )));
  }
  add_action('customize_register', 'wpb_customize_register');
