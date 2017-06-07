<?php snippet('header') ?>
	<div id='about-text'>
		<div id='about-graphic'>
			<img src="<?php echo $page->contentUrl() . '/' . $page->photo() ?>">
		</div>
		<?php echo $page->text()->kirbytext();?>
	</div>

<?php snippet('footer') ?>