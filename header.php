<?php
/*
	Template Name: One Page
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="header-area">
		<div class="main-menu">
			<?php 
				wp_nav_menu(array(

					'theme_location'	=> 'main-menu'

				))
			?>
		</div>
	</div>