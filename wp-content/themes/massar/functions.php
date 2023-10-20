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
add_theme_support('title-tag');
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

// add_filter( 'get_custom_logo', 'change_logo_class' );


// function change_logo_class( $html ) {

//     $html = str_replace( 'custom-logo-link', 'header__logo-link', $html );
//     $html = str_replace( 'custom-logo', 'header__logo-img', $html );

//     return $html;
// }


// // 2.1 - Заменой подстроки
// function add_class_to_list( $content ) {

//     // Находим <ul> и меняем на <ul class="list2">
//     $content = str_replace( '<ul>', '<ul class="list2">', $content );

//     return $content;
// }
// add_filter( 'the_content', 'add_class_to_list' );



add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'post_type_name', [
		'label'  => null,
		'labels' => [
			'name'               => 'Наши преимущества', // основное название для типа записи
			'singular_name'      => 'Преимущество', // название для одной записи этого типа
			'add_new'            => 'Добавить преимущество', // для добавления новой записи
			'add_new_item'       => 'Добавление преимущества', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование преимущества', // для редактирования типа записи
			'new_item'           => 'Новое преимущество', // текст новой записи
			'view_item'          => 'Смотреть преимущество', // для просмотра записи этого типа.
			'search_items'       => 'Искать преимущество', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Наши преимущества', // название меню
		],
		'description'            => '',
		'public'                 => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'           => null, // показывать ли в меню админки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-thumbs-up',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail', 'page-attributes' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );

}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'nav-header', 'Меню в хедере' );
}

// Убираем редактор тем
function disable_mytheme_action() {
	define('DISALLOW_FILE_EDIT', TRUE);
  }
add_action('init','disable_mytheme_action');


add_image_size( 'post-image', 200, 200, true );

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}

?>