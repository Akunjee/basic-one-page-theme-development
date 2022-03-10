<?php

	add_action('after_setup_theme','one_page');
	function one_page(){
		add_theme_support('title-tag');
		register_nav_menu('main-menu','Main Menu');
	}

	add_action('wp_enqueue_scripts','theme_styles');
	function theme_styles(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts','one_scripts');
	function one_scripts(){
		wp_enqueue_script('custom',get_template_directory_uri().'/js/scripts.js',array('jquery'), '', true);
	}

	add_shortcode('about-us','about_us_content');
	function about_us_content(){
		ob_start();
		$extract=shortcode_atts(array(
			'title'	=>	'The Title',
			'id'	=>	'',
			'content'	=>	'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet'
			),$attr);

			extract($extract);
		?>

		<article id="<?php echo $id; ?>" class="content">
			<h2><?php echo $title; ?></h2>
			<p><?php echo $content; ?></p>
		</article>

		<?php ob_get_clean();
	}