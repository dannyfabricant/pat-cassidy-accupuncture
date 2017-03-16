<?php 
	$items = $pages->visible();
	$count = $items->count();
	$index = 0;
	foreach($items as $item): $index++
?>
<div class="menu-item">
	<a class="<?= r($item->isOpen(), ' is-active') ?>" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
	<?php if($count != $index): 
	endif;
	?>
</div>
<?php endforeach ?>