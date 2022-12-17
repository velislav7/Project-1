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
</head>


<body class = "home-page-template">
   <header class="page-header">
      
      <div class="header-left">
          <?php
         if(function_exists('the_custom_logo')){

            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);

         }
         ?>
         <?php
         if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'custom-size' );
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

    <div id="upper-page">
         <style>  
         {  
            background: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url("<?php echo get_theme_mod('pm-footer-image') ?>");
            background-repeat: no-repeat;
            background-size: cover;  
         }  
         </style>
        <div id="image-block">
           <a id="number-link" href="tel:<?php echo get_theme_mod('pm-header-number') ?>"><?php echo get_theme_mod('pm-header-number') ?></a>
           <h1 id="headline"><?php echo get_theme_mod('pm-header-title') ?></h1>
           <h4 id="subtitle"><?php echo get_theme_mod('pm-header-subtitle') ?></h4>
           <a href="#exactline"><button class="about-us-btn">ABOUT US</button></a>
        </div>
    </div>