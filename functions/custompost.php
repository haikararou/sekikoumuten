<?php
	/*-----------------------------------------------------------------------------------
	 カスタム投稿タイプの追加
	 例)この例ではnews(ニュース)を作成しています。
	     投稿タイプ名、スラッグなどを変更したい時は、コメントのある箇所を変更してください。
	-----------------------------------------------------------------------------------*/
	add_action('init', 'create_post_type' );
	function create_post_type() {


		//カスタム投稿タイプを追加
		register_post_type( 'blog', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'ブログ' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'BLOG' )// 投稿タイプ名(表示名)
		),
		'menu_icon' => 'dashicons-clipboard', //管理画面で表示するアイコン　(変える場合は https://developer.wordpress.org/resource/dashicons/ から選ぶ)
		'public' => true,
		'menu_position' =>5,
		'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
		'has_archive' => true,
		'show_in_rest' => true,
		'rewrite' => array(
					'slug' => 'blog',//投稿タイプ名(スラッグ) アーカイブページのURLになります
					'with_front' => false)
		)
		);
				register_taxonomy(
		'blog-cat', //タクソノミー名
		'blog', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'ブログカテゴリー',// タクソノミー名（表示名）
			'singular_label' => 'ブログカテゴリー',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true
		)
		);



		}






	/*-----------------------------------------------------------------------------------
	 カスタム投稿のアーカイブページの記事数を設定する。
	 投稿と表示数を変えたいときのみ。
	 投稿の表示数は、WP管理画面の[設定]-[表示設定]-[1ページに表示する最大投稿数]
	-----------------------------------------------------------------------------------*/
	// add_action('pre_get_posts', 'my_pre_get_posts');
	// function my_pre_get_posts($query) {
	// 	if(!is_admin() && $query->is_main_query()) {
	// 		if (is_post_type_archive('news')) {//newsの表示数を3に設定
	// 			$query->set('posts_per_page', 2);
	// 		}
	// 	}
	// }

	/*-----------------------------------------------------------------------------------
	ページネーション設定
	-----------------------------------------------------------------------------------*/

function change_posts_per_page($query) { //WP設定では100件になっている
    if ( is_admin() || ! $query->is_main_query() )
        return;
    if ( $query->is_archive('blog') ) { //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '9' ); //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


	/*-----------------------------------------------------------------------------------
	 投稿にYoutubeが埋め込まれたときにdivで囲む
	-----------------------------------------------------------------------------------*/

function iframe_in_div($the_content) {
if ( is_singular() ) {
$the_content = preg_replace('/<iframe/i', '<div class="u-iframe"><iframe', $the_content);
$the_content = preg_replace('/<\/iframe>/i', '</iframe></div>', $the_content);
}
return $the_content;
}
add_filter('the_content','iframe_in_div');

	/*-----------------------------------------------------------------------------------
	 SearchFilter：検索対象にカスタム投稿を追加
	-----------------------------------------------------------------------------------*/
	// add_action( 'pre_get_posts','SearchFilter' );
	function SearchFilter($query) {
		if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
		$query->set('post_type', array('post', 'page')); // arrayの中にカスタム投稿タイプ名を追加する。
		}
	}

	/*-----------------------------------------------------------------------------------
	 SearchFilter：抜粋文の最後を変更
	-----------------------------------------------------------------------------------*/

	function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );