<?php snippet('header') ?>
	<div id='slider-wrapper' current-position='0'>
		<?php foreach($page->photos()->toStructure() as $key=>$photo):?>
			<div class="slider-image" index='<?= $key; ?>'>
			   <img src="<?= $page->url() . '/content/home/' . $photo->photo()->tofile()->uri(); ?>">
			</div>
		<?php endforeach?>
		<div id='slider-nav'>
			<?php foreach($page->photos()->toStructure() as $key=>$photo): 
				if ($key == 0){
					echo "<div class='slider-nav-button current' index='" . $key . "'></div>";
				} else {
					echo "<div class='slider-nav-button' index='" . $key . "'></div>";
				}
			endforeach ?>
		</div>
		<div id='slider-tagline'>
			<span>Health</span>
			<div class='circle'></div>
			<span>Acupuncture</span>
			<div class='circle'></div>
			<span>Herbs</span>
		</div>
	</div>
	<div id='home-intro'>
		<div id='home-intro-description'>
			<?php echo $page->email_info()->kirbytext() ?>
		</div>
		<div id='home-intro-contact'>
			<a href="@mailto:<?php echo $page->email() ?>"><span><?php echo $page->email() ?></span></a>
			<a href="tel:1-[917]-202-7418"><span>1-[917]-202-7418</span></a>
		</div>
	</div>
	<div id='locations'>
		<!-- <div id='title'>Locations</div> -->
    	<?php  foreach($pages->find('contact')->addresses()->toStructure() as $location): 
    		$address = str_replace([',',' '], '+', $location->address());
    		$src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyBAE64xZLlf3WfbwBTIEsSjwYjHltLCZWU &q=";
		?>
			<div class='location'>
				<div class='location-title'><?php echo $location->name() ?></div>
                <!-- <div class='address'><?php echo $location->address() ?></div> -->
	    		<iframe
	    			scrollwheel="false"
	    			zoom="false"
					frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBAE64xZLlf3WfbwBTIEsSjwYjHltLCZWU
				&q=<?php echo $address; ?>" allowfullscreen>
				</iframe>
	    	</div>
		<?php endforeach; ?>		
    </div>

<?php snippet('footer') ?>