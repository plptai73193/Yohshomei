<?php

// メインコンテンツの幅を指定
if ( ! isset( $content_width ) ) $content_width = 980;

// 管理画面用のオリジナルCSSファイル
add_action('admin_enqueue_scripts', 'custom_enqueue');
function custom_enqueue() {
    wp_enqueue_style('custom_css', get_template_directory_uri() . '/common/css/admin.css');
}

// RSS2 の feed リンクを出力
//add_theme_support( 'automatic-feed-links' );

// <head>内のWordPressのバージョンを消す
remove_action('wp_head','wp_generator');

// EditURIを非表示にする
remove_action('wp_head', 'rsd_link');

// wlwmanifestを非表示にする
remove_action('wp_head', 'wlwmanifest_link');

// 不要なタグの削除
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rel_canonical' ); //canonical属性

remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('template_redirect', 'rest_output_link_header', 11 );


function remove_menus () {
	global $menu;
	unset($menu[5]);  // 投稿
}
add_action('admin_menu', 'remove_menus');

// カスタムメニューを設定
add_theme_support( 'menus' );
register_nav_menu( 'schedule-menu', 'スケジュールメニュー' );

register_nav_menu( 'footer-menu1', 'フッターメニュー1' );
register_nav_menu( 'footer-menu2', 'フッターメニュー2' );
register_nav_menu( 'footer-menu3', 'フッターメニュー3' );
register_nav_menu( 'footer-menu4', 'フッターメニュー4' );
register_nav_menu( 'footer-menu5', 'フッターメニュー5' );
register_nav_menu( 'footer-menu6', 'フッターメニュー6' );
register_nav_menu( 'footer-menu7', 'フッターメニュー7' );
register_nav_menu( 'footer-menu8', 'フッターメニュー8' );
register_nav_menu( 'footer-menu9', 'フッターメニュー9' );
register_nav_menu( 'footer-menu10', 'フッターメニュー10' );

// 投稿フォーマットを設定
//add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );

// excerptを設定
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_length($length) {
	return 180;
}
add_filter('excerpt_length', 'new_excerpt_length');

// ウィジェット有効
if (function_exists('register_sidebar')) {

	register_sidebar(array(
	'name' => 'サイドバーウィジェット',
	'id' => 'sidebar1',
	'description' => 'サイドエリアに表示するウィジェット',
	'before_widget' => '<nav id="%1$s" class="sideMenu %2$s">',
	'after_widget' => '</nav>',
	'before_title' => '<h4 class="sideTtl"><section><span><i class="fa fa-angle-right" aria-hidden="true"></i></span><span>',
	'after_title' => '</span></section></h4>'
	));

}

/**
 * 不要なページを無効化します。(404扱い)
 */
add_filter( 'author_rewrite_rules', '__return_empty_array' );
function disable_author_archive() {
	if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
		wp_redirect( home_url() );
		exit;
	}
}
add_action('init', 'disable_author_archive');

function custom_handle_404() {
	if (is_search() || is_tag() || is_attachment() ) {
		wp_redirect( home_url());
		exit;
		// Put your redirect code here;
		// Redirect to home_url(), or 
		// return a 404, or whatever
	}
}
add_action( 'template_redirect', 'custom_handle_404' );


// サムネイル画像
add_theme_support( 'post-thumbnails' );

// 説明欄でhtmlタグを保存可能にする
remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter('term_description','wpautop');

// 自動置換を無効化
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
	global $post;
	$remove_filter = false;
	$arr_types = array('page'); //自動整形を無効にする投稿タイプを記述
	$post_type = get_post_type( $post->ID );
	if (in_array($post_type, $arr_types)) $remove_filter = true;
	if ( $remove_filter ) {
		remove_filter('the_content', 'wpautop');
		remove_filter('the_excerpt', 'wpautop');
	}
	return $content;
}


// 子ページかどうかをチェックする
function is_subpage() {
	global $post; // $post には現在の固定ページの情報があります
	if ( is_page() && $post->post_parent ){ // 現在の固定ページが親ページを持つかどうかをチェックします
		$parentID = $post->post_parent; // 親ページの ID を取得します
		return $parentID; // 親ページの ID を返します
	} else { // 親ページを持っていない場合
		return false; // false を返します
	};
};


// ショートコードを使ってテーマ内の画像URLを簡単に指定する
add_shortcode( 'tp', 'shortcode_tp' );
function shortcode_tp( $atts, $content = '' ) {
	return get_template_directory_uri().$content;
}
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
	return get_bloginfo('url');
}

add_filter('widget_text', 'do_shortcode' );


//ビジュアルエディタを利用できないようにする
function disable_visual_editor_in_page(){
	global $typenow;
	$post_id = $_GET['post'];
	if( $typenow == 'page' || $typenow == 'exhibition' || $typenow == 'event' ){
		add_filter('user_can_richedit', 'disable_visual_editor_filter');
	}
}
function disable_visual_editor_filter(){
	return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );


//自動保存を停止
function disable_autosave() {
 wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disable_autosave' );


function mytheme_redirect_canonical( $redirect_url, $requested_url ) {
	return $requested_url;
}
add_filter( 'redirect_canonical', 'mytheme_redirect_canonical', 10, 2 );


//固定ページ内にPHPファイルをインクルード(挿入/実行)させる
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'Include_my_php');
//ここまで




add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {

	$labels = array(
		"name" => __( '展覧会', '' ),
		"singular_name" => __( '展覧会', '' ),
		);

	$args = array(
		"label" => __( '展覧会', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "exhibition", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "revisions" ),
		"taxonomies" => array( "exhibition_cat" ),
			);
	register_post_type( "exhibition", $args );

	$labels = array(
		"name" => __( 'イベント情報', '' ),
		"singular_name" => __( 'イベント情報', '' ),
		);

	$args = array(
		"label" => __( 'イベント情報', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "event", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "revisions" ),
		"taxonomies" => array( "event_cat" ),
			);
	register_post_type( "event", $args );

}


add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes() {

	$labels = array(
		"name" => __( '展覧会カテゴリ', '' ),
		"singular_name" => __( '展覧会カテゴリ', '' ),
		);

	$args = array(
		"label" => "展覧会カテゴリ",
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'with_front' => false ),
		"show_admin_column" => false,
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "exhibition_cat", array( "exhibition" ), $args );

	$labels = array(
		"name" => __( 'イベントカテゴリ', '' ),
		"singular_name" => __( 'イベントカテゴリ', '' ),
		);

	$args = array(
		"label" => "イベントカテゴリ",
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'event_cat', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => false,
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "event_cat", array( "event" ), $args );

}

// ＵＲＬカスタマイズ
define( '_DEF_POSTTYPE_EXHIBITION_', 'exhibition' );
define( '_DEF_TAXONOMY_EXHIBITION_', 'exhibition_cat' );
define( '_DEF_POSTTYPE_EVENT_', 'event' );
define( '_DEF_TAXONOMY_EVENT_', 'event_cat' );
function my_add_rewrite_rule(){
	global $wp_rewrite;
	//$wp_rewrite->use_trailing_slashes = false;
	$wp_rewrite->add_permastruct( _DEF_POSTTYPE_EXHIBITION_, 'exhibition'.'/%exhibition%.html', false );
	$wp_rewrite->add_permastruct( _DEF_TAXONOMY_EXHIBITION_, 'exhibition/category'.'/%exhibition_cat%.html', false );
	$wp_rewrite->add_permastruct( _DEF_POSTTYPE_EVENT_, 'event'.'/%event%.html', false );
	$wp_rewrite->add_permastruct( _DEF_TAXONOMY_EVENT_, 'event/category'.'/%event_cat%.html', false );
}
add_action( 'init', 'my_add_rewrite_rule' );

/*【出力カスタマイズ】固定ページの拡張子を .html にする */
add_action( 'init', 'mytheme_init' );
  if ( ! function_exists( 'mytheme_init' ) ) {
    function mytheme_init() {
    global $wp_rewrite;
    $wp_rewrite->use_trailing_slashes = false;
    $wp_rewrite->page_structure = $wp_rewrite->root . '%pagename%.html';
  }
}

// WordPress の管理画面に独自 class を出力する
function add_admin_body_class( $classes ) {
    global $blog_id;
    if ( $blog_id == 1 ) {
        $classes .= 'wpSiteMulti1';
    } elseif ( $blog_id == 2 ) {
        $classes .= 'wpSiteMulti2';
    } elseif ( $blog_id == 3 ) {
        $classes .= 'wpSiteMulti3';
    } elseif ( $blog_id == 4 ) {
        $classes .= 'wpSiteMulti4';
    } else {
        $classes .= '';
    }
    return $classes;
}
add_filter( 'admin_body_class', 'add_admin_body_class' );


?>