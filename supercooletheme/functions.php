<?php

function supercooletheme_bronnen() {
    wp_enqueue_script('jochem-scripts', get_theme_file_uri('/js/javascript.js'), NULL, '1.0', true);
    wp_enqueue_style('mijnGoogleFonts', '//fonts.googleapis.com/css?family=Montserrat|Oswald&display=swap');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'supercooletheme_bronnen');

//Registreer menu's van het theme
register_nav_menus([
  'header' => __('Hoofd menu'),
  'footer' => __('Menu in footer')
]);


// Widgets toevoegen

function supercooletheme_widgets() {
	register_sidebar( array(
		'name'          => __('Widget aside'),
		'id'            => __('widget-aside'),
		'description'   => __('Hier de widgets voor de aside'),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>'
	));
}
add_action('widgets_init', 'supercooletheme_widgets');
?>
