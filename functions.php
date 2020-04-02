<?php
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( 
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');

/* CSSの読み込み */
function my_script_init()
{
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

/* 子テーマのstyle.cssを読み込む */
add_action( 'wp_enqueue_scripts', 'my_enqueue_style_child' ); 
function my_enqueue_style_child() { 
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
} 