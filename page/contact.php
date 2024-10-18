<?php
/*
 * template name:contact
 */

get_header(); ?>

<main class="l-main -tertiary ">
  <section class="l-section-wrap">
    <div class="c-title-sec">
      <h2 class="en">contact</h2>
      <p class="jp">お問い合わせ</p>
    </div>

    <div class="l-container p-contact">
      <p class="p-contact__lead">下記フォームに必要事項を入力後、確認ボタンを押してください。<br><span class="p-form__alert">*</span>の項目は必ずご入力ください。</p>
      <?php echo do_shortcode( '[contact-form-7 id="18" title="contact"]' ); ?>
    </div>
  </section>
</main>

<?php get_footer('simple'); ?>