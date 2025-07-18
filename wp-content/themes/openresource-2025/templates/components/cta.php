<cta>
	<?php
	if ($rows === get_field('cta')) {
		if ($rows) {
			foreach( $rows as $row){
				$heading = $row['cta_heading'];
				$text = $row['cta_text'];
				$button = $row['cta_button'];
				?>
				<h3 class="strong-voice"><?= $heading ;?></h3>
				<p class="quiet-voice"> <?= $text; ?> </p>
				<a href="https://github.com/erniestoe/resource-theme" class="button"><?= $button; ?>
					
				<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#0c0c01" viewBox="0 0 256 256"><path d="M196,64V168a4,4,0,0,1-8,0V73.66L66.83,194.83a4,4,0,0,1-5.66-5.66L182.34,68H88a4,4,0,0,1,0-8H192A4,4,0,0,1,196,64Z"></path></svg>
				</a>
				<?php 
			}
		}
	}

	if ($rows === get_field('second_cta')) {
		if ($rows) {
			foreach( $rows as $row){
				$heading = $row['cta_heading'];
				$text = $row['cta_text'];
				$button = $row['cta_button'];
				?>
				<h3 class="strong-voice"><?= $heading ;?></h3>
				<p class="quiet-voice"> <?= $text; ?> </p>
				<a href="https://github.com/erniestoe/resource-theme" class="button"><?= $button; ?> 

				<svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="#0c0c01" viewBox="0 0 256 256"><path d="M196,64V168a4,4,0,0,1-8,0V73.66L66.83,194.83a4,4,0,0,1-5.66-5.66L182.34,68H88a4,4,0,0,1,0-8H192A4,4,0,0,1,196,64Z"></path></svg>
				</a>
				<?php 
			}
		}
	}
	?>
</cta>