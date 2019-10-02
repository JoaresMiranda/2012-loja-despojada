<?php

//Menu Estilizado
add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
register_nav_menu('custom_menu', __('Custom Menu'));
}

add_theme_support("post-thumbnails");

// Tamanhos das Imagens
add_image_size( 'destaquecapa', 150, 225, true );
add_image_size( 'destaquepequeno', 150, 150, true );


//Excerpt nas paginas
add_post_type_support( 'page', 'excerpt' );


//Nome da pagina no body
function page_bodyclass() {  // add class to <body> tag
	global $wp_query;
	$page = '';
	if (is_front_page() ) {
    	   $page = 'home';
	} elseif (is_page()) {
   	   $page = $wp_query->query_vars["pagename"];
	}
	if ($page)
		echo 'class= "'. $page. mwd_get_parent_class(). '"';
}

?>