<?php

function anaction_theme_support(){
   //adds dynamic title tag support
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('page-title');

}
add_action('after_setup_theme', 'anaction_theme_support');



function anaction_register_styles()
{
   $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('anaction-styles2', get_template_directory_uri() . "/assets/css/styles2.css", array(), $version, 'all');
    wp_enqueue_style('anaction-grid', get_template_directory_uri() . "/assets/css/images-grid.css", array(), $version, 'all');
    wp_enqueue_style('anaction-styles', get_template_directory_uri() . "/assets/css/styles.css", array(), $version, 'all');
    wp_enqueue_style('anaction-navigation', get_template_directory_uri() . "/assets/css/nav.css", array(), $version, 'all');
   
}
add_action('wp_enqueue_scripts', 'anaction_register_styles');

function pm_footer($wp_customize) {
   $wp_customize->add_section('pm-footer-section', array(
      'title' => 'Footer'
   ));

   // Headline
   $wp_customize->add_setting('pm-footer-headline', array(
      'default' => 'Example Headline Tetx'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-headline-control', array(
      'label' => 'Headline',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-headline'
   )));

   // Contact Headline
   $wp_customize->add_setting('pm-footer-contact-headline', array(
      'default' => 'Example Contact Healine'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-contact-headline-control', array(
      'label' => 'Contact Headline',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-contact-headline',
   )));

   // Adress
   $wp_customize->add_setting('pm-footer-text', array(
      'default' => 'Example Adress'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-text-control', array(
      'label' => 'Adress',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-text',
      'type' => 'textarea'
   )));

   // Number
   $wp_customize->add_setting('pm-footer-number', array(
      'default' => 'Example Number'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-number-control', array(
      'label' => 'Number',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-number'
   )));

   // Email
   $wp_customize->add_setting('pm-footer-email', array(
      'default' => 'Example e-mail'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-email-control', array(
      'label' => 'E-mail',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-email'
   )));
   
   // Image
   $wp_customize->add_setting('pm-footer-image', array(
   ));

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'pm-footer-image-control', array(
      'label' => 'Image',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-image'
   )));

 
}

add_action('customize_register', 'pm_footer');


function pm_body($wp_customize) {
   $wp_customize->add_section('pm-body-section', array(
      'title' => 'Body'
   ));

   // Main Headline
   $wp_customize->add_setting('pm-body-main-headline', array(
      'default' => 'Example Main Headline'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-body-main-headline-control', array(
      'label' => 'Main Headline',
      'section' => 'pm-body-section',
      'settings' => 'pm-body-main-headline'
   )));

 
}

add_action('customize_register', 'body');

?>

