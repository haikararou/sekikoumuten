<?php
/*-----------------------------------------------------------------------------------
 メニューに「更新マニュアル」を追加
-----------------------------------------------------------------------------------*/
function admin_top_setting_menu() {
	add_menu_page( '更新マニュアル', '更新マニュアル', 'edit_posts', 'manual','', '', 3 );
}
add_action('admin_menu', 'admin_top_setting_menu', 1000);


function admin_manual_link() {
?><script>
jQuery(function($) {
  var menu_slug = 'manual';
  $('a.toplevel_page_' + menu_slug).prop({
    href: "<?php bloginfo('template_directory'); ?>/manual/index.php", //マニュアルのURLを変更するときはここを修正
    target: '_blank'
  });
});
</script><?php
}
// メニューに表示しないときはここをコメントアウト
add_action('admin_print_footer_scripts', 'admin_manual_link');


/*-----------------------------------------------------------------------------------
 投稿の記事一覧ページのURLを取得
-----------------------------------------------------------------------------------*/
function get_allpost_page_link() {
	$allpost_page = 'posts'; //記事一覧ページのスラッグ
	return get_permalink( get_page_by_path($allpost_page)->ID );
}