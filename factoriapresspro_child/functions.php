<?php

/**
 * Factoriapress pro  tema child. Hoja de funciones y definiciones.
 *
 *Agrega php personalizado para el tema factoriapress pro
 */
function enqueue_styles_child_theme() {

	$parent_style = 'parent-style';
	$child_style  = 'child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme', 11);





//estilos tipografia    


// add_action('wp_enqueue_scripts', 'factoriapresspro_styles', 11);
// function factoriapresspro_styles(){
//   wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;700;900&display=swap', array(), '1.0');
    
//  }



  //personalizacion de login de wp

  function factoriapresspro_admin_estilos(){
wp_enqueue_style('admin_estilos', get_stylesheet_directory_uri() . '/login/login.css');

  }
add_action('login_enqueue_scripts', 'factoriapresspro_admin_estilos');
    


