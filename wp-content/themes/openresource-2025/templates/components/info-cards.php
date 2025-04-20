<info-cards>
<?php
// Check value exists.
if( have_rows('grid_card') ):

	// Loop through rows.
   while ( have_rows('grid_card') ) : the_row();
      if( get_row_layout() == 'info_cards' ):
        	$rows = get_sub_field('info_card');
        	if ($rows) :
        		foreach( $rows as $row) {
        			$heading = $row['info_card_heading'];
					$text = $row['info_card_text'];
					?>
					<div class="info-card">
						<h3 class="attention-voice"><?= $heading ;?></h3>

						<p><?= $text; ?></p>
					</div>
					<?php
        		}
        	endif;
		
      elseif( get_row_layout() == 'features_card' ): 
         $heading = get_sub_field('features_card_heading');
         $list = get_sub_field('features_card_list');
         $extraMessage = get_sub_field('features_card_extra_message');
         ?>
         <div class="features-card">
				<h3 class="attention-voice"><?= $heading; ?></h3>

				<?= $list; ?>

				<p class="extra-message"><?= $extraMessage; ?></p>
			</div>
         <?php
      endif;

   // End loop.
   endwhile;

// No value.
else :
// Do something...
endif;
?>
</info-cards>