<section class="ceo-section">
<?php $hero = get_field('hero');?>
        <div class="bio-block">
            <img id="ceo" src="https://mmminvestmentgroup.com/wp-content/uploads/2022/09/image.png">
            <h1 class="bio-block-headline"><?php echo $hero['ceo_name_box'];?></h1>
            <div class="bio-block-text">
               <div class="number"><?php echo $hero['number_box'];?></div>
               <div class="e-mail"><?php echo $hero['e-mail_box'];?></div>
            </div>
        </div>

        <div class="text-block">
            <div>
               <h1 class="name"><?php echo $hero['ceo_name_bio'];?></h1>
               <h2 class="position"><?php echo $hero['subtitle'];?></h2>
            </div>
            <div class="dropdowns-component">
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-1" class="drop-icon">-</span>
                     <button onclick="Reveal1()" class="dropdown-header"><?php echo $hero['dropdown1_title'];?></button>
                  </div>
                  <div id="dropdown-text-1" class="dropdown-text dr-t">
                    <p><?php echo $hero['dropdown1_text'];?></p>
                  </div>
                </div>
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-2" class="drop-icon">-</span>
                     <button onclick="Reveal2()" class="dropdown-header"><?php echo $hero['dropdown2_title'];?></button>
                  </div>
                  <div id="dropdown-text-2" class="dropdown-text dr-t">
                    <p><?php echo $hero['dropdown2_text'];?></p>
                  </div>
                </div>
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-3" class="drop-icon">-</span>
                     <button onclick="Reveal3()" class="dropdown-header"><?php echo $hero['dropdown3_title'];?></button>
                  </div>                  
                  <div id="dropdown-text-3" class="dropdown-text dr-t">
                    <p><?php echo $hero['dropdown3_text'];?></p>
                  </div>
                </div>
            </div>
            <a id="call-now-btn" href="tel:240-994-8325"><?php echo $hero['button2'];?></a>
         </div>
     </section>

     <?php 
     wp_footer(); 
     ?>

     </body>
</html>

