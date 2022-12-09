<?php 
   get_header(); 
?>

<div class="slideshow-container">
      <div class="mySlides fade">
        <img class="bg-image" src="<?php the_post_thumbnail_url(); ?>" style="width:100%">
        <div class="text-slideshow">

         <!-- CUSTOM TITLE -->
        <?php $hero = get_field('hero');?>
   
           <span class="text-slideshow-sm"><?php echo $hero['small_title_slide1'];?></span>
           <span class="text-slideshow-xl"><?php echo $hero['main_title_slide1'];?></span>
           <a href="tel:"><button class="btn" type="button"><?php echo $hero['button1'];?></button></a>
        </div>
      </div>
      
      <div class="mySlides fade">
        <img class="bg-image" src="<?php the_post_thumbnail_url(); ?>" style="width:100%">
        <div class="text-slideshow">
            <span class="text-slideshow-sm"><?php echo $hero['small_title_slide2'];?></span>
            <span class="text-slideshow-xl"><?php echo $hero['main_title_slide2'];?></span>
            <a href="tel:"><button class="btn" type="button"><?php echo $hero['button1'];?></button></a>
         </div>
      </div>
   </div>
<section id="description-section" class="section">
        <div class="description">
           <h2 id="description-headline" class="headline"><?php echo $hero['description_title'];?></h2>
           <p id="description" class="text"><?php echo $hero['description_text'];?><br>
           </p>
           <img id="page-divider" src="http://onepage2.oxy.host/wp-content/uploads/sites/19/2017/11/Rectangle-15-Copy-6@2x.png" class="sc-image">
           <div id="new-row">
              <div class="facts-blocks">
                 <svg class="icon-fact" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>                
                 <div id="sc-img-text1" class="text-imgs"><?php echo $hero['icons_text1'];?></div>
              </div>
               <div class="facts-blocks">
                  <svg class="icon-fact" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                  </svg>                
                  <div id="sc-img-text1" class="text-imgs"><?php echo $hero['icons_text2'];?></div>
                  </div>
                  <div class="facts-blocks">
                     <svg class="icon-fact" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                     </svg>
                     <div id="sc-img-text1" class="text-imgs"><?php echo $hero['icons_text3'];?></div>
                  </div>
                  <div class="facts-blocks">
                     <svg class="icon-fact" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                     </svg>                   
                  <div id="sc-img-text1" class="text-imgs"><?php echo $hero['icons_text4'];?></div>
                  </div>

             </div>
        </div>
     </section>

<?php 
   get_footer(); 
?>