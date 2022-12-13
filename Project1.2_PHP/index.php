<?php 
get_header(); 
?>

<div class="rentals">
      <div class="first-grid">
         <img class="title-image" src="<?php echo wp_get_attachment_url(get_theme_mod('pm-index-image')) ?>" style="width: 100%; height: 100%; object-fit:cover;">
         <div class="text-box">
            <h1 class="headline-rentals"><?php echo get_theme_mod('pm-index-paragraph1-headline') ?></h1>
            <ul class="text-rentals">
               <li><?php echo get_theme_mod('pm-index-paragraph-row1') ?></li>
               <li><?php echo get_theme_mod('pm-index-paragraph-row2') ?></li>
               <li><?php echo get_theme_mod('pm-index-paragraph-row3') ?></li>
               <li><?php echo get_theme_mod('pm-index-paragraph-row4') ?></li>

            </ul>
            <a href="<?php echo get_theme_mod('pm-footer-number') ?>"><button class="descr-btn" class="rental-btns" >Find out more</button></a>
         </div>
      </div>
      <div class="second-grid">
         <h1 class="title title-grid"><?php echo get_theme_mod('pm-index-main-headline') ?><br></h1>
         <div class="text-box">
            <h1 class="headline-rentals"><?php echo get_theme_mod('pm-index-paragraph2-headline') ?></h1> 
            <ul class="text-rentals">
               <li><?php echo get_theme_mod('pm-index-paragraph-row5') ?></li>
               <li><?php echo get_theme_mod('pm-index-paragraph-row6') ?></li>
               <li><?php echo get_theme_mod('pm-index-paragraph-row7') ?></li>
               <li><?php echo get_theme_mod('pm-index-paragraph-row8') ?></li>

            </ul>
            <a href="<?php echo get_theme_mod('pm-footer-number') ?>"><button class="descr-btn" class="rental-btns">CONTACT US</button></a>
         </div>
   </div>
   <div class="grid-wrapper">
      <div class="tall">
         <img src="https://images.unsplash.com/photo-1541845157-a6d2d100c931?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" alt="" />
      </div>
      <div class="normal">
         <img src="https://images.unsplash.com/photo-1588282322673-c31965a75c3e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1351&amp;q=80" alt="" />
      </div>
      <div class="normal">
         <img src="https://images.unsplash.com/photo-1588282322673-c31965a75c3e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1351&amp;q=80" alt="" />
      </div>
      <div class="tall2">
         <img src="https://images.unsplash.com/photo-1588117472013-59bb13edafec?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="">
      </div>
      <div class="normal">
         <img src="https://images.unsplash.com/photo-1587588354456-ae376af71a25?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" />
      </div>
      <div class="normal">
         <img src=" https://images.unsplash.com/photo-1558980663-3685c1d673c4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=60" alt="" />
      </div>
      <div class="normal">
         <img src="https://images.unsplash.com/photo-1588499756884-d72584d84df5?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2134&amp;q=80" alt="" />
      </div>
   </div >

<?php 
get_footer(); 
?>