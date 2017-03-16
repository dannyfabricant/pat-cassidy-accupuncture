<?php snippet('header') ?>
	<div id='title'>Forms</div>
	<?php foreach($page->forms()->toStructure() as $form): ?>
		<div class='form'>
			<div class='form-inner'>
				<a href="<?php echo $form->pdffile()->toFile()->url() ?>" target='blank' class='icon'  style="border: none;">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.29 68.93"><defs><style>.cls-1,.cls-3{fill:none;}.cls-2{fill:#fff;}.cls-3{stroke:#231f20;stroke-miterlimit:10;stroke-width:0.25px;}</style></defs><line class="cls-3" x1="6.75" y1="61.79" x2="43.55" y2="61.79"/><line class="cls-3" x1="6.75" y1="56.2" x2="43.55" y2="56.2"/><line class="cls-3" x1="6.75" y1="50.61" x2="43.55" y2="50.61"/><line class="cls-3" x1="6.75" y1="45.02" x2="43.55" y2="45.02"/><line class="cls-3" x1="6.75" y1="39.43" x2="43.55" y2="39.43"/><line class="cls-3" x1="6.75" y1="33.84" x2="43.55" y2="33.84"/><line class="cls-3" x1="16.92" y1="11.48" x2="43.55" y2="11.48"/><line class="cls-3" x1="16.92" y1="17.07" x2="43.55" y2="17.07"/><line class="cls-3" x1="6.75" y1="22.66" x2="43.55" y2="22.66"/><line class="cls-3" x1="6.75" y1="28.25" x2="43.55" y2="28.25"/><line class="cls-3" x1="16.92" y1="5.89" x2="43.55" y2="5.89"/><polygon class="cls-1" points="18.07 18.07 1.23 18.07 1.23 67.7 49.07 67.7 49.07 1.23 18.07 1.23 18.07 18.07"/><polygon class="cls-2" points="16.85 2.09 2.09 16.85 16.85 16.85 16.85 2.09"/><path d="M17.21,0L0,17.21V68.93H50.29V0H17.21ZM16.85,2.09V16.85H2.09ZM49.07,67.7H1.23V18.07H18.07V1.23h31V67.7Z"/></svg>	
				</a>
				<a href="<?php echo $form->pdffile()->toFile()->url() ?>" target='blank' class='title'> <?php echo $form->form_name(); ?></a>
				<div class='description'><?php echo $form->form_description(); ?></div>
			</div>
		</div>
	<?php endforeach ?>

<?php snippet('footer') ?>