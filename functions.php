<?php
// カスタムロゴの設定
function mytheme_setup() {
	add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mytheme_setup');

// アイキャッチ画像を有効化する
add_theme_support( 'post-thumbnails' );

// Register Navigation Menus
function custom_navigation_menus() {
	$locations = array(
		'header_menu' => __( 'Custom Header Menu', 'text_domain' ),
		'footer_menu' => __( 'Custom Footer Menu', 'text_domain' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'custom_navigation_menus' );

// Register Sidebars
function custom_sidebar() {
	$args = array(
		'id'            => 'main-sidebar',
		'name'          => __( 'Main Widget Area', 'text_domain' ),
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'text_domain' ),
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => '</h5>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_sidebar' );

// 抜粋の文字数を変更する
function twpp_change_excerpt_length( $length ) {
  return 15; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

?>