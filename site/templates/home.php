<?php snippet('header') ?>
	<div id='slider-wrapper' current-position='0'>
		<?php 
		foreach($page->photos()->toStructure() as $key=>$photo):
			// var_dump($photo)
		?>

		<div class="slider-image" index='<?= $key; ?>'>
		   <img src="<?= $page->url() . '/content/home/' . $photo->photo()->tofile()->uri(); ?>">
		</div>

		<?php 
		    endforeach
		?>
		<div id='slider-nav'>
		<?php foreach($page->photos()->toStructure() as $key=>$photo): 
			if ($key == 0){
				echo "<div class='slider-nav-button current' index='" . $key . "'></div>";
			} else {
				echo "<div class='slider-nav-button' index='" . $key . "'></div>";
			}
		endforeach ?>
		</div>
		<div id='home-description'>
			<?php echo $page->email_info()->kirbytext() ?>
			<a href="@mailto:<?php echo $page->email() ?>"><?php echo $page->email() ?></a>
		</div>
	</div>
	<div id='locations'>
		<div id='title'>Locations</div>
    	<?php  foreach($pages->find('contact')->addresses()->toStructure() as $location): 
    		$address = str_replace([',',' '], '+', $location->address());
    		$src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyBAE64xZLlf3WfbwBTIEsSjwYjHltLCZWU &q=";
		?>
			<div class='location'>
				<div class='location-title'><?php echo $location->name() ?></div>
                <div class='address'><?php echo $location->address() ?></div>
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