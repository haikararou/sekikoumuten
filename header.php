<?php
/**
 * ヘッダーテンプレート
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri()); ?>/favicon.ico">


  <?php wp_head(); ?>

  <!-- OGP -->
  <meta property="og:locale" content="ja_JP">
  <meta property="og:image" content="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ogp.jpg">

  <!-- Twitterの設定 -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image:src" content="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/ogp.jpg">


  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-5LN4VMN');
  </script>
  <!-- End Google Tag Manager -->

</head>
<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LN4VMN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div id="loading"></div>
  <header id="header" class="l-header">
    <div class="l-header__wrap">
      <div class="l-header__logo-area">
        <h1 class="l-header__logo"><a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.svg" width="89" height="41" alt="関工務店"></a><span class="screen-reader-text">関工務店</span></h1>
      </div>

      <div class="l-header__button-area">
        <button type="button" id="js-buttonHamburger" class="l-header__button c-hamburger" aria-controls="global-nav" aria-expanded="false">
          <span class="c-hamburger__line">
            <span class="screen-reader-text">
              メニューを開閉する
            </span>
          </span>
        </button>
      </div>

      <nav id="global-nav" class="c-drawer">
        <div class="c-drawer__wrapper">
          <h2 class="screen-reader-text">サイトナビ</h2>
          <ul class="c-drawer__menu">
            <li class="item -home"><a href="<?php echo esc_url(home_url('')); ?>" class="link">ホーム</a></li>
            <li class="item"><a href="<?php echo esc_url(home_url('concept')); ?>" class="link">コンセプト</a></li>
            <li class="item"><a href="<?php echo esc_url(home_url('stories')); ?>" class="link">関工務店ストーリー</a></li>
            <li class="item"><a href="<?php echo esc_url(home_url('service')); ?>" class="link">家づくりについて</a></li>
            <li class="item"><a href="<?php echo esc_url(home_url('about')); ?>" class="link">関工務店について</a></li>
            <li class="item"><a href="<?php echo esc_url(home_url('blog')); ?>" class="link">ブログ</a></li>
            <li class="item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="link">お問い合わせ</a></li>
          </ul>

          <div class="c-drawer__footmenu">
            <ul class="menulist">
              <li><a href="https://twitter.com/sekikoumuten46" target="_blank" rel="noopener noreferrer">Twitter</a></li>
              <li><a href="https://www.facebook.com/sekikoumutenn/" target="_blank" rel="noopener noreferrer">Facebook</a></li>
              <li><a href="https://www.instagram.com/sekikoumuten/" target="_blank" rel="noopener noreferrer">Instagram</a></li>
            </ul>
          </div>
        </div>
      </nav>


    </div>
  </header>