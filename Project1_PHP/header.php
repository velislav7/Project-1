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
              <a class="" href="index.html">
                  <?php echo get_blockinfo('name'); ?>
              </a>
            </div>
         </div>

         <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">☰</button>
            <div id="myDropdown" class="dropdown-content">
              <a href="hex.html">
                  <?php echo get_blockinfo('name'); ?>
              </a>
              <a href="index.html">
                  <?php echo get_blockinfo('name2'); ?>
              </a>
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