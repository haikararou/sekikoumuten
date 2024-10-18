<?php
/*
 * template name:stories
 */

get_header(); ?>

<main class="l-main -secondary p-stories__main">

  <section class="l-section-wrap">
    <figure class="p-stories__mv -pc"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/stories/mv_pc.jpg" alt="" width="605" height="878" loading="lazy" class=""></figure>
    <div class="p-stories__mv-wrap">
      <div class="c-title-sec">
        <h2 class="en">stories</h2>
        <p class="jp">関工務店ストーリー</p>
      </div>
      <figure class="p-stories__mv -sp"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/stories/mv_sp.jpg" alt="" width="327" height="337" loading="lazy" class=""></figure>
      <div class="p-stories__text-wrap">
        <p>安全に暮らす。安心して住まう。<br>それは決しておざなりにしてはいけない、暮らしの根幹だと関工務店は考えています。</p>
        <p>関工務店の二代目である僕が、これまで関わってきたお施主様のもとへ伺って、当時の思い出とともに、その後の暮らしぶりや家の様子を聞き、暮らしの中に宿る安心感について考える物語、それが〈関工務店ストーリー〉です。</p>
        <p>関工務店の先代であり、その偉大な存在である父。その父とともに作り上げた茅葺屋根の家から物語はじまります。そして、避けては通れない2019年の台風19号による被害。</p>
        <p>安心と安全を奪われてしまったお施主様との出会いや、関工務店がお手伝い出来たこと、考えたことを振り返ってみようと思います。</p>
        <p>関工務店・関博之</p>
      </div>
    </div>

    <div class="l-container p-stories__container">
      <div class="p-stories__unit">
        <a href="<?php echo esc_url(home_url('stories/sakaguchi')); ?>">
          <p class="p-top-stories__tag">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag1.svg" alt="" width="23" height="97" class="">
          </p>
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic1.jpg" alt="" width="243" height="159" loading="lazy" class="p-top-stories__img">
          <p class="p-top-stories__copy">安心と安全は、そこに自由を生む。</p>
          <p class="p-top-stories__overview">『平穏で、安全で、繁栄する暮らしを支えたい』という人間の根源的な願望を改めて知るきっかけになった、坂口さんと僕の自由な暮らしの物語。</p>
        </a>
      </div>
      <!-- pic -->
      <div class="p-stories__unit">
        <a href="<?php echo esc_url(home_url('stories/tokunaga')); ?>">
          <p class="p-top-stories__tag">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag2.svg" alt="徳永邸" width="23" height="97" class="">
          </p>
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic2.jpg" alt="" width="243" height="159" loading="lazy" class="p-top-stories__img">
          <p class="p-top-stories__copy">未来を楽しみに出来る暮らしをする。</p>
          <p class="p-top-stories__overview">これから続く長い暮らしを想像したら、本物を使った家がいい。そんな発想から生まれた、慎吾君と僕の未来を描く物語。</p>
        </a>
      </div>
      <!-- pic -->
      <div class="p-stories__unit">
        <a href="<?php echo esc_url(home_url('stories/seki')); ?>">
          <p class="p-top-stories__tag">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag3.svg" alt="関邸" width="23" height="97" class="">
          </p>
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic3.jpg" alt="" width="243" height="159" loading="lazy" class="p-top-stories__img">
          <p class="p-top-stories__copy">優しさに満ちた家に暮らす、優しい人たち。</p>
          <p class="p-top-stories__overview">いつもの暮らしにほんの少しの上積みを。良い家は暮らしのアイデアを生み続けることを知った、関さんと僕の決断と拠り所の物語。</p>
        </a>
      </div>
      <!-- pic -->
      <div class="p-stories__unit">
        <a href="<?php echo esc_url(home_url('stories/shimokawa')); ?>">
          <p class="p-top-stories__tag">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag4.svg" alt="下川邸" width="23" height="97" class="">
          </p>
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic4.jpg" alt="" width="243" height="159" loading="lazy" class="p-top-stories__img">
          <p class="p-top-stories__copy">笑い声に包まれる、愛おしい空間。</p>
          <p class="p-top-stories__overview">普通の暮らし。今まで通りの生活。そんな当たり前こそが人にとっては尊いことだとわかった、下川さんと僕の愛と笑いの物語。</p>
        </a>
      </div>
      <!-- pic -->
      <div class="p-stories__unit">
        <a href="<?php echo esc_url(home_url('stories/kanebako')); ?>">
          <p class="p-top-stories__tag">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag5.svg" alt="金箱邸" width="23" height="97" class="">
          </p>
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic5.jpg" alt="" width="243" height="159" loading="lazy" class="p-top-stories__img">
          <p class="p-top-stories__copy">自然素材に囲まれた、安心と健康を感じる家。</p>
          <p class="p-top-stories__overview">健やかさと安心の関係を考えながら家づくりに取り組んだ、金箱さんと僕の二人三脚の物語。</p>
        </a>
      </div>
      <!-- pic -->
      <div class="p-stories__unit">
        <a href="<?php echo esc_url(home_url('stories/ogawa')); ?>">
          <p class="p-top-stories__tag">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag6.svg" alt="小川醸造場" width="23" height="97" class="">
          </p>
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic6.jpg" alt="" width="243" height="159" loading="lazy" class="p-top-stories__img">
          <p class="p-top-stories__copy">残せるものは残し、新しい息吹を感じる場所</p>
          <p class="p-top-stories__overview">見知らぬ電話番号からの着信で始まった運命の大仕事。小川醸造場さんと僕の再建の物語。</p>
        </a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(''); ?>