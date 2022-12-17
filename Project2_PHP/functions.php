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

   // Main Headline
   $wp_customize->add_setting('pm-index-main-headline', array(
      'default' => 'Long & Short Term Rentals'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-main-headline-control', array(
      'label' => 'Headline',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-main-headline'
   )));

   // First Paragraph Headline
   $wp_customize->add_setting('pm-index-paragraph1-headline', array(
      'default' => 'Long Term Rentals (Over 30 Day Leases)'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-index-paragraph1-headline-control', array(
      'label' => 'Paragraph Headline',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-paragraph1-headline'
   )));

   // Second Paragraph Headline
   $wp_customize->add_setting('pm-index-paragraph2-headline', array(
      'default' => 'Short Term Rentals (Under 30 Day Leases)'
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

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-index-image-control', array(
      'label' => 'Image',
      'section' => 'pm-index-section',
      'settings' => 'pm-index-image'
   )));

}

add_action('customize_register', 'pm_index');

function pm_grid($wp_customize) {
   $wp_customize->add_section('pm-grid-section', array(
      'title' => 'Image gallery'
   ));

   $wp_customize->add_setting('pm-grid-image1', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-grid-image1-control', array(
      'label' => 'Image',
      'section' => 'pm-grid-section',
      'settings' => 'pm-grid-image1'
   )));

   $wp_customize->add_setting('pm-grid-image2', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-grid-image2-control', array(
      'label' => 'Image',
      'section' => 'pm-grid-section',
      'settings' => 'pm-grid-image2'
   )));

   $wp_customize->add_setting('pm-grid-image3', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-grid-image3-control', array(
      'label' => 'Image',
      'section' => 'pm-grid-section',
      'settings' => 'pm-grid-image3'
   )));

   $wp_customize->add_setting('pm-grid-image4', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-grid-image4-control', array(
      'label' => 'Image',
      'section' => 'pm-grid-section',
      'settings' => 'pm-grid-image4'
   )));
   $wp_customize->add_setting('pm-grid-image5', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-grid-image5-control', array(
      'label' => 'Image',
      'section' => 'pm-grid-section',
      'settings' => 'pm-grid-image5'
   )));
   $wp_customize->add_setting('pm-grid-image6', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-grid-image6-control', array(
      'label' => 'Image',
      'section' => 'pm-grid-section',
      'settings' => 'pm-grid-image6'
   )));
   $wp_customize->add_setting('pm-grid-image7', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-grid-image7-control', array(
      'label' => 'Image',
      'section' => 'pm-grid-section',
      'settings' => 'pm-grid-image7'
   )));

}

add_action('customize_register', 'pm_grid');


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