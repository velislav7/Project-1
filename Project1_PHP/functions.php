<?php

function anaction_theme_support(){
   //adds dynamic title tag support
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
   add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'anaction_theme_support');



function anaction_register_styles()
{
   $version = wp_get_theme()->get( 'Version' );
   wp_enqueue_style('anaction-styles', get_template_directory_uri() . "/assets/css/styles.css", array(), $version, 'all');
    wp_enqueue_style('anaction-navigation', get_template_directory_uri() . "/assets/css/nav.css", array(), $version, 'all');
    wp_enqueue_style('anaction-slideshow', get_template_directory_uri() . "/assets/css/slideshow.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'anaction_register_styles');


function anaction_register_scripts()
{
   wp_enqueue_script('anaction-script', get_template_directory_uri() . "/assets/js/script.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'anaction_register_scripts');



function pm_header($wp_customize) {
   $wp_customize->add_section('pm-header-section', array(
      'title' => 'Header'
   ));

   // Title
   $wp_customize->add_setting('pm-header-title', array(
      'default' => 'NO-OBLIGATION CASH OFFERS'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-title-control', array(
      'label' => 'Slideshow Title',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-title'
   )));

   // Subtitle1
   $wp_customize->add_setting('pm-header-subtitle1', array(
      'default' => 'LIGHTNING FAST'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-subtitle1-control', array(
      'label' => 'Slideshow Subitle 1',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-subtitle1'
   )));

   // Subtitle2
   $wp_customize->add_setting('pm-header-subtitle2', array(
      'default' => 'WE SPECIALIZE IN BUYING HOMES FOR A FAIR, CASH PRICE – QUICKLY AND EASILY.'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-header-subtitle2-control', array(
      'label' => 'Slideshow Subitle 2',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-subtitle2'
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

   // Image1
   $wp_customize->add_setting('pm-header-image1', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-header-image1-control', array(
      'label' => 'Slideshow Image 1',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-image1'
   )));

   // Image2
   $wp_customize->add_setting('pm-header-image2', array(
   ));

   $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'pm-header-image2-control', array(
      'label' => 'Slideshow Image 2',
      'section' => 'pm-header-section',
      'settings' => 'pm-header-image2'
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

   // CEO Block Headline
   $wp_customize->add_setting('pm-footer-headline', array(
      'default' => 'Fareed Abedini'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-headline-control', array(
      'label' => 'Name',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-headline'
   )));

   // E-mail
   $wp_customize->add_setting('pm-footer-email', array(
      'default' => 'reed@mmminvestmentgroup.com'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-email-control', array(
      'label' => 'E-mail',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-email'
   )));

   // Subtitle
   $wp_customize->add_setting('pm-footer-subtitle', array(
      'default' => 'CEO / Founder'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-subtitle-control', array(
      'label' => 'Subtitle',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-subtitle',
   )));

   // CEO Parahraph Headline
   $wp_customize->add_setting('pm-footer-pheadline1', array(
      'default' => 'Young & Brave'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-pheadline1-control', array(
      'label' => 'Paragraph Headline',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-pheadline1'
   )));

   // CEO Parahraph Headline
   $wp_customize->add_setting('pm-footer-pheadline2', array(
      'default' => 'Deal Closer'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-pheadline2-control', array(
      'label' => 'Paragraph Headline',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-pheadline2'
   )));

   // CEO Parahraph Headline
   $wp_customize->add_setting('pm-footer-pheadline3', array(
      'default' => 'Motivation'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-pheadline3-control', array(
      'label' => 'Paragraph Headline',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-pheadline3'
   )));

   // Paragraph Text
   $wp_customize->add_setting('pm-footer-ptext1', array(
      'default' => 'Reed started his real estate journey when he was 19, at that age he found out he’s passionate about real estate!
      '
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-ptext1-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-ptext1',
      'type' => 'textarea'
   )));

   // Paragraph Text
   $wp_customize->add_setting('pm-footer-ptext2', array(
      'default' => 'In his first year he closed over 20 deals so buying and selling properties became his life, by the time he was 20 he had more connections and knew more like minded people than people older than him.'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-ptext2-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-ptext2',
      'type' => 'textarea'
   )));

   // Paragraph Text
   $wp_customize->add_setting('pm-footer-ptext3', array(
      'default' => 'Reed’s primary focus is making an impact on the team members and the clients they serve by providing a customized solution that best addresses the client’s individual needs.'
   ));

   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pm-footer-ptext3-control', array(
      'label' => 'Paragraph text',
      'section' => 'pm-footer-section',
      'settings' => 'pm-footer-ptext3',
      'type' => 'textarea'
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




function my_custom_sizes_setup() {
   add_image_size( 'custom-size1', 1024, 1024, true);
   add_image_size( 'custom-size2', 620, 280, false);
}
add_action( 'after_setup_theme', 'my_custom_sizes_setup' );

function wpdocs_setup_theme() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 620, 280, false);
}
add_action( 'after_setup_theme', 'wpdocs_setup_theme' );



?>

