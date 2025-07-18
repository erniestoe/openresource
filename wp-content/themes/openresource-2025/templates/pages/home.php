<section class="home-intro">
	<inner-column>
		<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="#0c0c01" viewBox="0 0 256 256"><path d="M29.6,123.2a4,4,0,0,0,5.6-.8,56,56,0,0,1,89.6,0,3.93,3.93,0,0,0,6.38,0h0a56,56,0,0,1,89.6,0,4,4,0,1,0,6.4-4.8,63.55,63.55,0,0,0-32.5-22.85,36,36,0,1,0-37.4,0,63.39,63.39,0,0,0-29.3,19,63.34,63.34,0,0,0-29.3-19,36,36,0,1,0-37.4,0A63.61,63.61,0,0,0,28.8,117.6,4,4,0,0,0,29.6,123.2ZM148,64a28,28,0,1,1,28,28A28,28,0,0,1,148,64ZM52,64A28,28,0,1,1,80,92,28,28,0,0,1,52,64ZM194.7,198.75a36,36,0,1,0-37.4,0A63.39,63.39,0,0,0,128,217.7a63.34,63.34,0,0,0-29.3-18.95,36,36,0,1,0-37.4,0A63.61,63.61,0,0,0,28.8,221.6a4,4,0,0,0,6.4,4.8,56,56,0,0,1,89.6,0,3.93,3.93,0,0,0,6.38,0h0a56,56,0,0,1,89.6,0,4,4,0,0,0,6.4-4.8A63.55,63.55,0,0,0,194.7,198.75ZM52,168a28,28,0,1,1,28,28A28,28,0,0,1,52,168Zm96,0a28,28,0,1,1,28,28A28,28,0,0,1,148,168Z"></path></svg>

		<div class="intro-text">
			<h1 class="intro-heading"><?= the_field('intro_heading'); ?></h1>

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

<section class="info" id="info">
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