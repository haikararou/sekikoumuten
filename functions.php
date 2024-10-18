<?php
/* ---------------------------------------------------------------------
テーマでアイキャッチ機能を有効化
-------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );


/* ---------------------------------------------------------------------
ビジュアルエディタ内のテキストにCSSを適用

適用するときは、以下のコメントアウトを外してください。
この例は、テーマフォルダ内の/assets/css/editor-style.cssに
ビジュアルエディタ用のCSSを記述し、読み込んでいます。
-------------------------------------------------------------------------*/
//add_editor_style(get_template_directory_uri().'/assets/css/editor-style.css' );

/* ---------------------------------------------------------------------
正しいURLを入力しないとログイン画面を表示しないようにする
-------------------------------------------------------------------------*/
remove_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );


/* ---------------------------------------------------------------------
CSS・JSを登録する
-------------------------------------------------------------------------*/
function register_files() {
  wp_register_style( 'theme-font' , 'https://fonts.googleapis.com/css2?family=EB+Garamond&display&family=Scheherazade:wght@400;700&family=Shippori+Mincho:wght@400;500;700&display=swap', array(), null );
  wp_register_style( 'theme-common', get_template_directory_uri().'/assets/css/common.css' );

	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js');
  wp_register_script( 'theme-js', get_template_directory_uri() . '/assets/js/common.js');
  wp_register_style( 'swiper-css', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.css' );
  wp_register_script( 'swiper-js','//cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js');
  wp_register_script( 'parallax-js',get_template_directory_uri() . '/assets/js/simpleParallax.min.js');
  wp_register_script( 'font-js','//webfont.fontplus.jp/accessor/script/fontplus.js?ISugzJK~YHU%3D&box=-o3l2ow669o%3D&aa=1&ab=2&display=swap');


}
function my_enqueue_files() {
    register_files();
		wp_enqueue_script( 'swiper-js' );
    wp_enqueue_style( 'swiper-css' );
		wp_enqueue_style( 'theme-font' );
		wp_enqueue_style( 'theme-common' );
    wp_enqueue_script( 'theme-js' );
    wp_enqueue_script( 'parallax-js' );
    wp_enqueue_script( 'font-js' );
  }


add_action( 'wp_enqueue_scripts', 'my_enqueue_files' );


/**
 * scriptLoader
 * javascriptの遅延defer属性を追加
 */
function scriptLoader($script, $handle, $src) {
	if (is_admin()) {
		return $script;
	}
	$script = sprintf('<script src="%s" type="text/javascript" defer></script>' . "\n", $src);
	return $script;
}
add_filter('script_loader_tag', 'scriptLoader', 10, 5);


/* ---------------------------------------------------------------------
その他の機能
-------------------------------------------------------------------------*/


/*初期設定 マニュアルの読み込み*/
 include_once( get_template_directory().'/functions/initial-setting.php' );

/*ダッシュボードのカスタマイズ*/
 include_once( get_template_directory().'/functions/dashboard.php' );

/*メタタグ類の設定*/
include_once( get_template_directory().'/functions/meta-setting.php' );

/*カスタム投稿タイプを追加*/
include_once( get_template_directory().'/functions/custompost.php' );

/*便利な関数*/
include_once( get_template_directory().'/functions/utility.php' );


/*ContactForm7のカスタマイズ*/
include_once( get_template_directory().'/functions/contact.php' );



/*ツールバーの非表示*/
add_filter( 'show_admin_bar', '__return_false' );



/*-----------------------------------------------------------------------------------
reCAPTHAをフォームがある場所にだけ表示
-----------------------------------------------------------------------------------*/

add_action( 'wp_enqueue_scripts', function() {
    if(is_page('contact')) return;
    wp_deregister_script( 'google-recaptcha' );
}, 100, 0);


 /*
    アイキャッチ画像
  ----------------------------------- */
  add_theme_support( 'post-thumbnails' );

  // 画像サイズを追加
  // set_post_thumbnail_size(776, 549, true); // 投稿ページ用
  add_image_size('blog-thumbnail', 592, 388, true); // ブログ一覧用