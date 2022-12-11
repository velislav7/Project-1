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
         <!-- CUSTOM LOGO -->
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
            
            <?php $hero = get_field('hero');?>
            <div class="nav-links">
              <a class="active" href="index.html"><?php echo $hero['home_page_name'];?></a>
            </div>
         </div>

         <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">☰</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="index.html"><?php echo $hero['home_page_name'];?></a>
            </div>
         </div> 
      </div>
      <a class="header-right-link" href="tel:<?php echo $hero['button1_tel'];?>">
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
      <?php
      $image = get_field('image1');
      $picture = $image['sizes']['large'];
      ?>
        <img class="bg-image" src="<?php echo $picture['url'];?>" style="width:100%">
        <div class="text-slideshow">   
           <span class="text-slideshow-sm"><?php echo $hero['small_title_slide1'];?></span>
           <span class="text-slideshow-xl"><?php echo $hero['main_title_slide1'];?></span>
           
           <a href="tel:<?php echo $hero['button1_tel'];?>"><button class="btn" type="button"><?php echo $hero['button1'];?></button></a>
        </div>
      </div>
      
      <div class="mySlides fade">
        <img class="bg-image" src="" style="width:100%">
        <div class="text-slideshow">
            <span class="text-slideshow-sm"><?php echo $hero['small_title_slide2'];?></span>
            <span class="text-slideshow-xl"><?php echo $hero['main_title_slide2'];?></span>
            <a href="tel:<?php echo $hero['button1_tel'];?>"><button class="btn" type="button"><?php echo $hero['button1'];?></button></a>
         </div>
      </div>
   </div>