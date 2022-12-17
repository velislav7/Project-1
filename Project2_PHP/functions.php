<?php

function anaction_theme_support(){
   //adds dynamic title tag support
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'anaction_theme_support');




function anaction_register_styles()
{
   $version = wp_get_theme()->get( 'Version' );
   wp_enqueue_style('anaction-styles', get_template_directory_uri() . "/assets/css/styles.css", array(), $version, 'all');
    wp_enqueue_style('anaction-navigation', get_template_directory_uri() . "/assets/css/nav.css", array(), $version, 'all');
    wp_enqueue_style('anaction-images-grid', get_template_directory_uri() . "/assets/css/images-grid.css", array(), $version, 'all');
    wp_enqueue_style('anaction-styles2', get_template_directory_uri() . "/assets/css/styles2.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'anaction_register_styles');



function pm_header($wp_customize) {
   $wp_customize->add_section('pm-header-section', array(
      'title' => 'Header'
   ));

   // Title
   $wp_customize->add_setting('pm-header-title', array(
      'default' => 'MMM Property Management'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-title-control', array(
      'label' => 'Title',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-title'
   )));

   // Subtitle
   $wp_customize->add_setting('pm-header-subtitle', array(
      'default' => 'We offer property management for all Short Term & Long Term Rentals Properties!'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-subtitle-control', array(
      'label' => 'Subitle',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-subtitle'
   )));

   // Number
   $wp_customize->add_setting('pm-header-number', array(
      'default' => 'Example Number'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-number-control', array(
      'label' => 'Number',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-number'
   )));

   // Image
   $wp_customize->add_setting('pm-header-image', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-header-image-control', array(
      'label' => 'Image',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-image'
   )));

}

add_action('customize_register', 'pm_header');


function pm_index($wp_customize) {
   $wp_customize->add_section('pm-index-section', array(
      'title' => 'Body'
   ));

   // Paragraph Headline
   $wp_customize->add_setting('pm-index-paragraph-headline', array(
      'default' => 'WE WANT TO BUY YOUR HOME FOR CASH'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-headline-control', array(
      'label' => 'Paragraph Headline',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-headline'
   )));

   // Paragraph Text
   $wp_customize->add_setting('pm-index-paragraph-text', array(
      'default' => 'We specialize in helping home owners who are facing hardship or special circumstances sell their property quickly. We understand the difficulties of these situations, and we have made it our goal to have a positive impact on those we work with. We truly care about people and we stand by our name: MMM Investments.'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph-text-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph-text',
      'type' => 'textarea'
   )));

   // Images Text1
   $wp_customize->add_setting('pm-index-images-text1', array(
      'default' => 'Five star service, always.'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-images-text1-control', array(
      'label' => 'Icon Text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-images-text1'
   )));

   // Images Text2
   $wp_customize->add_setting('pm-index-images-text2', array(
      'default' => '1,000s of happy customers.'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-images-text2-control', array(
      'label' => 'Icon Text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-images-text2'
   )));

   // Images Text3
   $wp_customize->add_setting('pm-index-images-text3', array(
      'default' => 'We’re your neighbors'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-images-text3-control', array(
      'label' => 'Icon Text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-images-text3'
   )));

   // Images Text4
   $wp_customize->add_setting('pm-index-images-text4', array(
      'default' => 'Quick cash quarantee.'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-images-text4-control', array(
      'label' => 'Icon Text',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-images-text4'
   )));

}

add_action('customize_register', 'pm_index');


function pm_footer($wp_customize) {
   $wp_customize->add_section('pm-footer-section', array(
      'title' => 'Footer'
   ));

   //Headline
   $wp_customize->add_setting('pm-footer-headline', array(
      'default' => 'MMM Management, LLC'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-headline-control', array(
      'label' => 'Company Name',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-headline'
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

   // E-mail
   $wp_customize->add_setting('pm-footer-email', array(
      'default' => 'example@123example.com'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-email-control', array(
      'label' => 'E-mail',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-email'
   )));

   
   // Image
   $wp_customize->add_setting('pm-footer-image', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-footer-image-control', array(
      'label' => 'Image',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-image'
   )));


 
}

add_action('customize_register', 'pm_footer');

?>