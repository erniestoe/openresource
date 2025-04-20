<cta>
	<?php
	if ($rows === get_field('cta')) {
		if ($rows) {
			foreach( $rows as $row){
				$heading = $row['cta_heading'];
				$text = $row['cta_text'];
				$button = $row['cta_button'];
				?>
				<h3 class="attention-voice"><?= $heading ;?></h3>
				<p> <?= $text; ?> </p>
				<a href="https://github.com/erniestoe/resource-theme" class="button"><?= $button; ?></a>
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
				<h3 class="attention-voice"><?= $heading ;?></h3>
				<p> <?= $text; ?> </p>
				<a href="https://github.com/erniestoe/resource-theme" class="button"><?= $button; ?></a>
				<?php 
			}
		}
	}
	?>
</cta>