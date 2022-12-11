<section class="ceo-section">
<?php $footer = get_field('footer');?>
        <div class="bio-block">
            <img id="ceo" src="https://mmminvestmentgroup.com/wp-content/uploads/2022/09/image.png">
            <h1 class="bio-block-headline"><?php echo $footer['ceo_name_box'];?></h1>
            <div class="bio-block-text">
               <div class="number"><?php echo $footer['number_box'];?></div>
               <div class="e-mail"><?php echo $footer['e-mail_box'];?></div>
            </div>
        </div>

        <div class="text-block">
            <div>
               <h1 class="name"><?php echo $footer['ceo_name_bio'];?></h1>
               <h2 class="position"><?php echo $footer['subtitle'];?></h2>
            </div>
            <div class="dropdowns-component">
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-1" class="drop-icon">-</span>
                     <button onclick="Reveal1()" class="dropdown-header"><?php echo $footer['dropdown1_title'];?></button>
                  </div>
                  <div id="dropdown-text-1" class="dropdown-text dr-t">
                    <p><?php echo $footer['dropdown1_text'];?></p>
                  </div>
                </div>
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-2" class="drop-icon">-</span>
                     <button onclick="Reveal2()" class="dropdown-header"><?php echo $footer['dropdown2_title'];?></button>
                  </div>
                  <div id="dropdown-text-2" class="dropdown-text dr-t">
                    <p><?php echo $footer['dropdown2_text'];?></p>
                  </div>
                </div>
               <div class="dropdown">
                  <div class="drop-btn">
                     <span id="dr-i-3" class="drop-icon">-</span>
                     <button onclick="Reveal3()" class="dropdown-header"><?php echo $footer['dropdown3_title'];?></button>
                  </div>                  
                  <div id="dropdown-text-3" class="dropdown-text dr-t">
                    <p><?php echo $footer['dropdown3_text'];?></p>
                  </div>
                </div>
            </div>
            <a id="call-now-btn" href="tel:<?php echo $footer['button1_tel'];?>"><?php echo $footer['button2'];?></a>
         </div>
     </section>

     <?php 
     wp_footer(); 
     ?>

     </body>
</html>

