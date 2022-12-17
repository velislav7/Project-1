<section class="ceo-section">
        <div class="bio-block">
            <img id="ceo" src="<?php echo get_theme_mod('pm-footer-image') ?>">
            <h1 class="bio-block-headline"><?php echo get_theme_mod('pm-footer-headline') ?></h1>
            <div class="bio-block-text">
               <div class="number"><?php echo get_theme_mod('pm-header-number') ?></div>
               <div class="e-mail"><?php echo get_theme_mod('pm-footer-email') ?></div>
            </div>
        </div>
        <div class="text-block">
            <div>
               <h1 class="name"><?php echo get_theme_mod('pm-footer-headline') ?></h1>
               <h2 class="position"><?php echo get_theme_mod('pm-footer-position') ?></h2>
            </div>
            <div class="dropdowns-component">
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-1" class="drop-icon">-</span>
                     <button onclick="Reveal1()" class="dropdown-header"><?php echo get_theme_mod('pm-footer-pheadline1') ?></button>
                  </div>
                  <div id="dropdown-text-1" class="dropdown-text dr-t">
                    <p><?php echo get_theme_mod('pm-footer-ptext1') ?></p>
                  </div>
                </div>
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-2" class="drop-icon">-</span>
                     <button onclick="Reveal2()" class="dropdown-header"><?php echo get_theme_mod('pm-footer-pheadline2') ?></button>
                  </div>
                  <div id="dropdown-text-2" class="dropdown-text dr-t">
                    <p><?php echo get_theme_mod('pm-footer-ptext2') ?></p>
                  </div>
                </div>
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-3" class="drop-icon">-</span>
                     <button onclick="Reveal3()" class="dropdown-header"><?php echo get_theme_mod('pm-footer-pheadline3') ?></button>
                  </div>                  
                  <div id="dropdown-text-3" class="dropdown-text dr-t">
                    <p><?php echo get_theme_mod('pm-footer-ptext3') ?></p>
                  </div>
                </div>
            </div>
            <a id="call-now-btn" href="tel:<?php echo get_theme_mod('pm-header-number') ?>">CALL NOW</a>
         </div>
     </section>

     <?php 
     wp_footer(); 
     ?>

     </body>
</html>

