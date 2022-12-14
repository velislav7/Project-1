<?php

function anaction_theme_support(){
   //adds dynamic title tag support
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('page-title');

}
add_action('after_setup_theme', 'anaction_theme_support');


function images_setup(){
   add_theme_support('post-thumbnails');
   add_image_size('small-thumbnail', 180, 120, true);
   add_image_size('banner-image', 1024, 1024, true);
}
add_action('after_setup_theme', 'images_setup_setup');



function anaction_register_styles()
{
   $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('anaction-styles2', get_template_directory_uri() . "/assets/css/styles2.css", array(), $version, 'all');
    wp_enqueue_style('anaction-grid', get_template_directory_uri() . "/assets/css/images-grid.css", array(), $version, 'all');
    wp_enqueue_style('anaction-styles', get_template_directory_uri() . "/assets/css/styles.css", array(), $version, 'all');
    wp_enqueue_style('anaction-navigation', get_template_directory_uri() . "/assets/css/nav.css", array(), $version, 'all');
   
}
add_action('wp_enqueue_scripts', 'anaction_register_styles');

function pm_header($wp_customize) {
   $wp_customize->add_section('pm-header-section', array(
      'title' => 'Header'
   ));

   // Title
   $wp_customize->add_setting('pm-header-title', array(
      'default' => 'Example Title'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-title-control', array(
      'label' => 'Headline',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-title'
   )));

   // Subtitle
   $wp_customize->add_setting('pm-header-subtitle', array(
      'default' => 'Example Subtitle'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-subtitle-control', array(
      'label' => 'Headline',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-subtitle'
   )));
}

add_action('customize_register', 'pm_header');


function pm_index($wp_customize) {
   $wp_customize->add_section('pm-index-section', array(
      'title' => 'Body'
   ));

   // Main Headline
   $wp_customize->add_setting('pm-index-main-headline', array(
      'default' => 'Example Headline'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-main-headline-control', array(
      'label' => 'Headline',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-main-headline'
   )));

   // First Paragraph Headline
   $wp_customize->add_setting('pm-index-paragraph1-headline', array(
      'default' => 'Example Paragraph Headline'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph1-headline-control', array(
      'label' => 'Paragraph Headline',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph1-headline'
   )));

   // Second Paragraph Headline
   $wp_customize->add_setting('pm-index-paragraph2-headline', array(
      'default' => 'Example Paragraph Headline'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph2-headline-control', array(
      'label' => 'Paragraph Headline',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph2-headline'
   )));

   // Paragraph1 Text
   $wp_customize->add_setting('pm-index-paragraph-row1', array(
      'default' => 'Example Paragraph Text'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row1-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row1'
   )));

   $wp_customize->add_setting('pm-index-paragraph-row2', array(
      'default' => 'Example Paragraph Text'
   ));
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row2-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row2'
   )));

   $wp_customize->add_setting('pm-index-paragraph-row3', array(
      'default' => 'Example Paragraph Text'
   ));
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row3-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row3'
   )));

   $wp_customize->add_setting('pm-index-paragraph-row4', array(
      'default' => 'Example Paragraph Text'
   ));
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row4-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row4'
   )));
   

   // Paragraph2 Text
   $wp_customize->add_setting('pm-index-paragraph-row5', array(
      'default' => 'Example Paragraph Text'
   ));
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row5-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row5'
   )));

   $wp_customize->add_setting('pm-index-paragraph-row6', array(
      'default' => 'Example Paragraph Text'
   ));
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row6-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row6'
   )));
   
   $wp_customize->add_setting('pm-index-paragraph-row7', array(
      'default' => 'Example Paragraph Text'
   ));
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row7-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row7'
   )));
   
   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-row8-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-row8'
   )));
   $wp_customize->add_setting('pm-index-paragraph-row8', array(
      'default' => 'Example Paragraph Text'
   ));

   // Image
   $wp_customize->add_setting('pm-index-image', array(
   ));

   $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'pm-index-image-control', array(
      'label' => 'Image',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-image'
   )));

}

add_action('customize_register', 'pm_index');


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




?>

