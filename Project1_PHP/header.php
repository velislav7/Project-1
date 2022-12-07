<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            
            <div class="nav-links">
              <a class="active" href="hex.html">Home</a>
              <a class="" href="index.html">Property Management</a>
            </div>
         </div>

         <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">☰</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="hex.html">Home</a>
              <a href="index.html">Property Managment</a>
            </div>
         </div> 
      </div>
      <a class="header-right-link" href="">
         <div class="header-right">
            <span class="text-book">
               book
               <br>
               now
            </span>
         </div>
      </a>
    </header>