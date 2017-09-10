<?php snippet('header') ?>
	<!-- <div id='title'>Forms</div> -->
	<div id='forms-container'>
		<?php foreach($page->forms()->toStructure() as $form): ?>
		<div class='form'>
			<div class='form-inner'>
				<a href="<?php echo $form->pdffile()->toFile()->url() ?>" target='blank' class='title'> <?php echo $form->form_name(); ?></a>
				<a href="<?php echo $form->pdffile()->toFile()->url() ?>" target='blank' class='icon'  style="border: none;">
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.29 68.93"><defs><style>.cls-1,.st0, .st1,.cls-3{fill:none;}.cls-2{fill:#fff;}.cls-3{stroke:#231f20;stroke-miterlimit:10;stroke-width:0.25px;}</style></defs><polygon class="st0" points="18.1,18.1 1.2,18.1 1.2,67.7 49.1,67.7 49.1,1.2 18.1,1.2 "/> <polygon class="st1" points="16.8,2.1 2.1,16.8 16.8,16.8 "/> <path d="M17.2,0L0,17.2v51.7h50.3V0H17.2z M16.8,2.1v14.8H2.1L16.8,2.1z M49.1,67.7H1.2V18.1H18V1.2h31L49.1,67.7L49.1,67.7z"/> <rect x="6.7" y="61.3" width="36.8" height="1"/> <rect x="6.7" y="55.7" width="36.8" height="1"/> <rect x="6.7" y="50.1" width="36.8" height="1"/> <rect x="6.7" y="44.5" width="36.8" height="1"/> <rect x="6.7" y="38.9" width="36.8" height="1"/> <rect x="6.7" y="33.3" width="36.8" height="1"/> <rect x="16.9" y="11" width="26.6" height="1"/> <rect x="16.9" y="16.6" width="26.6" height="1"/> <rect x="6.7" y="22.2" width="36.8" height="1"/> <rect x="6.7" y="27.8" width="36.8" height="1"/></svg>	
				</a>
				<div class='description'><?php echo $form->form_description(); ?></div>
				<a class='view' href="<?= $form->pdffile()->toFile()->url() ?>">view form &rarr;</a>
			</div>
		</div>
	<?php endforeach ?>
	</div>

<?php snippet('footer') ?>