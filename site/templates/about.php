<?php snippet('header') ?>
	
	<div id='about-graphic'>
		<img src="<?php echo $page->contentUrl() . '/' . $page->photo() ?>">
	</div>

	<div id='about-text'>
		<div id='about-title'>About Pat</div>
		<?php echo $page->text()->kirbytext();?>
	</div>

<?php snippet('footer') ?>