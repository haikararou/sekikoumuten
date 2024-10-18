<?php
/*
 * template name:404
 */

get_header(); ?>

<main class="l-main -tertiary">
  <section class="l-section-wrap">

    <div class="l-container">
      <div class="c-not-found">
        <h2 class="c-not-found__title">PAGE NOT FOUND</h2>
      </div>

      <p>まことに申し訳ありませんが、指定されたURLのページは存在しません。<br>サイト更新などによってURLが変更になったか、URLが正しく入力されていない可能性があります。<br>恐れ入りますが、ナビゲーションのリンクからご希望のページをお探しください。</p>


      <div class="c-not-found__button">
        <p class="c-button -primary"><a href="<?php echo esc_url(home_url('')); ?>">トップへ戻る</a></p>
      </div>
    </div>


  </section>
</main>

<?php get_footer(''); ?>