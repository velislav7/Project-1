<div class="contact-us-block">

         <style>  
         {  
            background: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url("<?php echo get_theme_mod('pm-footer-image') ?>");
            background-repeat: no-repeat;
            background-size: cover;  
         }  
         </style> 
      <h1 class="block-headline">Contact Us</h1>
         <div class="info">
            <h1 class="contact-headline"><?php echo get_theme_mod('pm-footer-headline') ?></h1>
            <div id="adress" class="text"><?php echo get_theme_mod('pm-footer-adress') ?></div>
            <a class="contact-link" href="tel:<?php echo get_theme_mod('pm-header-number') ?>"><?php echo get_theme_mod('pm-header-number') ?></a></br>
            <a class="contact-link" href="mailto:<?php echo get_theme_mod('pm-footer-email') ?>"><?php echo get_theme_mod('pm-footer-email') ?></a></br>
            <a href="tel:<?php echo get_theme_mod('pm-header-number') ?>"><button class="call-us-btn">Call Us Now!</button></a>
         </div>
   </div>

   <?php 
     wp_footer(); 
     ?>

</body>

</html>