<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage Lumen
 */

// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
 }
add_action('admin_head', 'fix_svg');

include('incl/settings.php');
 
add_action( 'init', 'service' ); // Использовать функцию только внутри хука init
function service() {
	$labels1 = array(
		'name' => 'Концерты',
		'singular_name' => 'Концерт', // админ панель Добавить->Функцию
		'add_new' => 'Добавить концерт',
		'add_new_item' => 'Добавить новый концерт', // заголовок тега <title>
		'edit_item' => 'Редактировать концерт',
		'new_item' => 'Новый концерт',
		'all_items' => 'Все концерт',
		'view_item' => 'Просмотр концерта на сайте',
		'search_items' => 'Искать концерт',
		'not_found' =>  'Концерты не найдены.',
		'not_found_in_trash' => 'В корзине нет концертов.',
		'menu_name' => 'Концерты' // ссылка в меню в админке
	);
	$args1 = array(
		'labels' => $labels1,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('concert', $args1);
	
	$labels2 = array(
		'name' => 'Новости',
		'singular_name' => 'Новость', // админ панель Добавить->Функцию
		'add_new' => 'Добавить новость',
		'add_new_item' => 'Добавить новость', // заголовок тега <title>
		'edit_item' => 'Редактировать новость',
		'new_item' => 'Новая новость',
		'all_items' => 'Все новости',
		'view_item' => 'Просмотр новости на сайте',
		'search_items' => 'Искать новость',
		'not_found' =>  'Новости не найдены.',
		'not_found_in_trash' => 'В корзине нет новостей.',
		'menu_name' => 'Новости' // ссылка в меню в админке
	);
	$args2 = array(
		'labels' => $labels2,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('news_item', $args2);
	
	$labels3 = array(
		'name' => 'Фотографии',
		'singular_name' => 'Фотография', // админ панель Добавить->Функцию
		'add_new' => 'Добавить фото',
		'add_new_item' => 'Добавить новое фото', // заголовок тега <title>
		'edit_item' => 'Редактировать фото',
		'new_item' => 'Новое фото',
		'all_items' => 'Все фото',
		'view_item' => 'Просмотр фото на сайте',
		'search_items' => 'Искать фото',
		'not_found' =>  'Фото не найдены.',
		'not_found_in_trash' => 'В корзине нет фотографий.',
		'menu_name' => 'Фотографии' // ссылка в меню в админке
	);
	$args3 = array(
		'labels' => $labels3,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('photo', $args3);
	
	$labels4 = array(
		'name' => 'Видео',
		'singular_name' => 'Видео', // админ панель Добавить->Функцию
		'add_new' => 'Добавить видео',
		'add_new_item' => 'Добавить новое видео', // заголовок тега <title>
		'edit_item' => 'Редактировать видео',
		'new_item' => 'Новое видео',
		'all_items' => 'Все видео',
		'view_item' => 'Просмотр видео на сайте',
		'search_items' => 'Искать видео',
		'not_found' =>  'Видео не найдены.',
		'not_found_in_trash' => 'В корзине нет видео.',
		'menu_name' => 'Видео' // ссылка в меню в админке
	);
	$args4 = array(
		'labels' => $labels4,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('video', $args4);
	
	$labels5 = array(
		'name' => 'Все видео',
		'singular_name' => 'Видео', // админ панель Добавить->Функцию
		'add_new' => 'Добавить видео',
		'add_new_item' => 'Добавить новое видео', // заголовок тега <title>
		'edit_item' => 'Редактировать видео',
		'new_item' => 'Новое видео',
		'all_items' => 'Все видео',
		'view_item' => 'Просмотр видео на сайте',
		'search_items' => 'Искать видео',
		'not_found' =>  'Видео не найдены.',
		'not_found_in_trash' => 'В корзине нет видео.',
		'menu_name' => 'Все видео' // ссылка в меню в админке
	);
	$args5 = array(
		'labels' => $labels5,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => 'dashicons-tablet', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields')
	);	
	register_post_type('video_from_all', $args5);		
	
}
if ( 'service' != $screen->post_type )
	return;
?>