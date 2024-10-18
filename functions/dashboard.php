<?php
// ウィジェットを更新する
function add_custom_widget() { ?>


<h2 class="ttl-dashboard">ブログ</h2>
<dl class="action-wrap">
  <dt>ブログ</dt>
  <dd>
    <ul class="list-action">
      <li><a href="<?php echo admin_url(); ?>post-new.php?post_type=blog" class="dashicons dashicons-edit btn"><span>ブログ記事を追加する</span></a>
        <a href="<?php bloginfo('template_directory'); ?>/manual/index.php" class="manuallink" target="_blank">記事の追加方法</a>
      </li>
      <li><a href="<?php echo admin_url(); ?>edit.php?post_type=blog" class="dashicons dashicons-media-document btn"><span>ブログ記事を修正・削除する</span></a>
        <a href="<?php bloginfo('template_directory'); ?>/manual/index.php#edit" class="manuallink" target="_blank">記事の修正・削除方法</a>
      </li>
    </ul>
  </dd>
</dl>

<?php
}
function add_my_widget() {
	wp_add_dashboard_widget( 'custom_widget', 'クイックアクセス', 'add_custom_widget' );
}

add_action( 'wp_dashboard_setup', 'add_my_widget' );


add_action( 'wp_enqueue_scripts', 'load_dashicons' );
function load_dashicons() {
  wp_enqueue_style( 'dashicons' );
}


// 管理画面内で自作CSSを適用させる
add_action('admin_head', 'admin_css');

function admin_css() {
   echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/assets/css/dashboard.css">';
}