<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Vidaloka" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Qwigley&family=Vidaloka&display=swap" rel="stylesheet"> 
    <?php 
    wp_head(); 
    ?>

<body class = "home-page-template">
   <header class="page-header">
      <div class="header-left">
          <?php
         if(function_exists('the_custom_logo')){

            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);

         }
         ?>
         <img class="logo" src="<?php echo $logo[0] ?>">

         <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-btn" onclick="myFunction()">
              <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
              </label>
            </div>

       

            <div class="nav-links">
              <a class="active" href="/">Home</a>
            </div>
         </div>

         <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">☰</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="/">Home</a>
            </div>
         </div> 
      </div>
      <a class="header-right-link" href="tel:<?php echo get_theme_mod('pm-header-number') ?>">
         <div class="header-right">
            <span class="text-book">
               book
               <br>
               now
            </span>
         </div>
      </a>
    </header>
    
   <div class="slideshow-container">
      <div class="mySlides fade">
        <img class="bg-image" src="<?php echo wp_get_attachment_url(get_theme_mod('pm-header-image1')) ?>" style="object-fit:cover;width:100%;height:500px;">
        <div class="text-slideshow">
           <span class="text-slideshow-sm"><?php echo get_theme_mod('pm-header-subtitle1') ?></span>
           <span class="text-slideshow-xl"><?php echo get_theme_mod('pm-header-title') ?></span>
           <a href="tel:<?php echo get_theme_mod('pm-header-number') ?>"><button class="btn" type="button">get cash offer now</button></a>
        </div>
      </div>
      
      <div class="mySlides fade">
        <img class="bg-image" src="<?php echo wp_get_attachment_url(get_theme_mod('pm-header-image2')) ?>" style="object-fit:cover;width:100%;height:500px;">
        <div class="text-slideshow">
            <span class="text-slideshow-sm"><?php echo get_theme_mod('pm-header-subtitle2') ?></span>
            <span class="text-slideshow-xl"><?php echo get_theme_mod('pm-header-title') ?></span>
            <a href="tel:<?php echo get_theme_mod('pm-header-number') ?>"><button class="btn" type="button">get cash offer now</button></a>
         </div>
      </div>
   </div>