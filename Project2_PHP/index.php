<?php 
	get_header(); 
	?>

	<div class="rentals">
		  <div class="first-grid"><a name="exactline">
			 <img class="title-image" src="<?php echo get_theme_mod('pm-index-image') ?>" style="width: 100%; height: 100%; object-fit:cover;">
			 <div class="text-box">
				<h1 class="headline-rentals"><?php echo get_theme_mod('pm-index-paragraph1-headline') ?></h1>
				<ul class="text-rentals">
				   <li><?php echo get_theme_mod('pm-index-paragraph-row1') ?></li>
				   <li><?php echo get_theme_mod('pm-index-paragraph-row2') ?></li>
				   <li><?php echo get_theme_mod('pm-index-paragraph-row3') ?></li>
				   <li><?php echo get_theme_mod('pm-index-paragraph-row4') ?></li>

				</ul>
				<a href="tel:<?php echo get_theme_mod('pm-footer-number') ?>"><button class="descr-btn" class="rental-btns" >Find out more</button></a>
			 </div>
		  </a></div>
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
				<a href="tel:<?php echo get_theme_mod('pm-footer-number') ?>"><button class="descr-btn" class="rental-btns">CONTACT US</button></a>
			 </div>
	</div>
	   <div class="grid-wrapper">
		  <div class="tall">
			 <img src="<?php echo get_theme_mod('pm-grid-image1') ?>" alt="" />
		  </div>
		  <div class="normal">
		  <img src="<?php echo get_theme_mod('pm-grid-image2') ?>" alt="" />
		  </div>
		  <div class="normal">
		  <img src="<?php echo get_theme_mod('pm-grid-image3') ?>" alt="" />
		  </div>
		  <div class="tall2">
		  <img src="<?php echo get_theme_mod('pm-grid-image4') ?>" alt="" />
		  </div>
		  <div class="normal">
		  <img src="<?php echo get_theme_mod('pm-grid-image5') ?>" alt="" />
		  </div>
		  <div class="normal">
		  <img src="<?php echo get_theme_mod('pm-grid-image6') ?>" alt="" />
		  </div>
		  <div class="normal">
		  <img src="<?php echo get_theme_mod('pm-grid-image7') ?>" alt="" />
		  </div>
	   </div >

	<?php 
	get_footer(); 
	?>