<div class="contact-us-block">
      <h1 class="block-headline"><?php echo get_theme_mod('pm-footer-headline') ?></h1>
         <div class="info">
            <h1 class="contact-headline"><?php echo get_theme_mod('pm-footer-contact-headline') ?></h1>
            <div id="adress" class="text"><?php echo get_theme_mod('pm-footer-text') ?></div>
            <a class="contact-link" href="tel:<?php echo get_theme_mod('pm-footer-number') ?>"><?php echo get_theme_mod('pm-footer-number') ?></a></br>
            <a class="contact-link" href="mailto:reed@mmminvestmentgroup.com"><?php echo get_theme_mod('pm-footer-email') ?></a></br>
            <a href="tel:<?php echo get_theme_mod('pm-footer-number') ?>"><button class="call-us-btn">Call Us Now!</button></a>
         </div>
   </div>

    <?php 
    wp_footer(); 
    ?>
    
</body>
</html>