<section class="home-intro">
	<inner-column>
		<svg class="homepage-image" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#FFFCE4" viewBox="0 0 256 256"><path d="M27.2,126.4a8,8,0,0,0,11.2-1.6,52,52,0,0,1,83.2,0,8,8,0,0,0,11.2,1.59,7.73,7.73,0,0,0,1.59-1.59h0a52,52,0,0,1,83.2,0,8,8,0,0,0,12.8-9.61A67.85,67.85,0,0,0,203,93.51a40,40,0,1,0-53.94,0,67.27,67.27,0,0,0-21,14.31,67.27,67.27,0,0,0-21-14.31,40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,25.6,115.2,8,8,0,0,0,27.2,126.4ZM176,40a24,24,0,1,1-24,24A24,24,0,0,1,176,40ZM80,40A24,24,0,1,1,56,64,24,24,0,0,1,80,40ZM203,197.51a40,40,0,1,0-53.94,0,67.27,67.27,0,0,0-21,14.31,67.27,67.27,0,0,0-21-14.31,40,40,0,1,0-53.94,0A67.88,67.88,0,0,0,25.6,219.2a8,8,0,1,0,12.8,9.6,52,52,0,0,1,83.2,0,8,8,0,0,0,11.2,1.59,7.73,7.73,0,0,0,1.59-1.59h0a52,52,0,0,1,83.2,0,8,8,0,0,0,12.8-9.61A67.85,67.85,0,0,0,203,197.51ZM80,144a24,24,0,1,1-24,24A24,24,0,0,1,80,144Zm96,0a24,24,0,1,1-24,24A24,24,0,0,1,176,144Z"></path></svg>

		<div class="intro-text">
			<h1 class="loud-voice intro-heading"><?= the_field('intro_heading'); ?></h1>

			<p><?= the_field('intro_text'); ?></p>
		</div>
	</inner-column>
</section>

<section class="cta-start">
	<inner-column>
		<?php 
		$rows = get_field('cta');
		include getfile('templates/components/cta.php');
		?>
	</inner-column>
</section>

<section class="info">
	<inner-column>
		<div class="info-intro">
			<h2 class="attention-voice"><?= the_field('grid_heading'); ?></h2>

			<p><?= the_field('grid_text'); ?></p>
		</div>

		<?php include getfile('templates/components/info-cards.php'); ?>	
	</inner-column>
</section>

<section class="cta-open">
	<inner-column>
		<?php 
		$rows = get_field('second_cta');
		include getfile('templates/components/cta.php');
		?>
	</inner-column>
</section>