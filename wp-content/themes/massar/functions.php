<?php

// константы
define( 'STYLE_PATH', get_template_directory_uri() . '/assets/css/' );
define( 'SCRIPT_PATH', get_template_directory_uri() . '/assets/js/' );

// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', function() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'vendor', STYLE_PATH . 'vendor.min.css' );
	wp_enqueue_style( 'style', STYLE_PATH . 'style.min.css' );

	// подключаем js файл темы
    wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'vendor', SCRIPT_PATH . 'vendor.min.js', array(), 'null', true );
	wp_enqueue_script( 'main', SCRIPT_PATH . 'main.min.js', array('vendor'), 'null', true );
} );

add_theme_support('post-thumbnails');
// add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'header__logo-link', $html );
    $html = str_replace( 'custom-logo', 'header__logo-img', $html );

    return $html;
}


// // 2.1 - Заменой подстроки
// function add_class_to_list( $content ) {

//     // Находим <ul> и меняем на <ul class="list2">
//     $content = str_replace( '<ul>', '<ul class="list2">', $content );

//     return $content;
// }
// add_filter( 'the_content', 'add_class_to_list' );



?>