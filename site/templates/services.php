<?php snippet('header') ?>
	<!-- <div id='title'>Services</div> -->
	<div id='services-container'>
			<?php  foreach($page->services()->toStructure() as $service): ?>
			<div class='service'>
				<div class='title'><?php echo $service->service(); ?></div>
				<div class='description'><?php echo $service->description(); ?></div>
			</div>
			<?php endforeach;  ?>
	</div>

	<div id='services-photo' style='background-image: url(<?php echo $page->contentUrl() . '/' . $page->photo() ?>);'></div>

	<div id='ailments'>
		<div class='bowl-image'>
			<img src="<?php echo kirby()->urls()->assets() . '/images/bowl-1.svg' ?>">	
		</div>
		<div id='ailments-description' class='large-text'>
			<?php echo $page->ailment_description(); ?>
			<?php foreach ($page->ailments()->toStructure() as $ailment): ?>
				<div class='ailment'>
					<?php echo $ailment->ailment_name(); ?>
				</div>
			<?php endforeach; ?>
		</div>
		<div class='bowl-image'>
			<img src="<?php echo kirby()->urls()->assets() . '/images/bowl-2.svg' ?>">	
		</div>
		<!-- <div id='ailments-container'>
			<?php foreach ($page->ailments()->toStructure() as $ailment): ?>
				<div class='ailment'>
					<?php echo $ailment->ailment_name(); ?>
				</div>
			<?php endforeach; ?>
		</div> -->
	</div>


<?php snippet('footer') ?>