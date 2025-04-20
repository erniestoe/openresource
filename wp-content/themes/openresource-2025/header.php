<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=wp_get_document_title();?></title>

	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<header class="site-header">
		<inner-column id="top">
			<a class="attention-voice logo" href="<?=get_site_url();?>">
				<?= wp_get_document_title(); ?>		
			</a>
			
			<nav class="site-navigation">
				<?php include('templates/components/site-menu.php'); ?>
			</nav>
		</inner-column>
	</header>

	<main>