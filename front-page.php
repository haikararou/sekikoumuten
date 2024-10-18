  <?php get_header(); ?>

  <main class="l-main">
    <!-- loding -->
    <div id="load-wrapper" class="load-wrapper">
      <div id="load" class="load load-conts-wrap">
        <figure class="load-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.svg" width="" height="" alt="関工務店"></figure>
      </div>
    </div>
    <!-- top-mv -->
    <div class="p-top-mv">
      <p class="p-top-mv__subcopy">ひとと住まいを守る<br>「安心・安全」の<br>リノベーション＆住宅</p>
      <p class="p-top-mv__maincopy"><span>安全に暮らす。</span><br><span>安心して住まう。</span></p>
      <div class="p-top-mv__swiper">
        <div class="swiper-container swiper1">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/mv2.jpg" alt="" width="375" height="292" class="p-top-mv__img" decoding="async"></div>
            <div class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/mv1.jpg" alt="" width="375" height="292" class="p-top-mv__img" decoding="async"></div>
            <div class="swiper-slide"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/mv3.jpg" alt="" width="375" height="292" class="p-top-mv__img" decoding="async"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- top-concept -->
    <section class="p-top-concept">
      <figure class="p-top-concept__img">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/concept_sp.jpg" alt="" width="" height="" class="js-parallax sp">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/concept_pc.jpg" alt="" width="" height="" class="js-parallax pc">
      </figure>
      <div class="p-top-concept__text-area">
        <div class="c-title p-top-concept__title">
          <p class="en">concept</p>
          <h2 class="jp">安心安全な家だから、<br>理想の暮らしを<br>思い描ける。</h2>
        </div>
        <p class="p-top-concept__text">暮らしには、共通の想いがあります。それは、誰もが幸せに暮らしたいと思っていることです。〈毎日を安心して繰り返すこと〉こそが、暮らしの中にある幸せの原動力になります。<br>私たちは身をもって知っています。住まいを守ることによって、末永く続く幸せがあることを。安心安全な家だから、思う存分理想の暮らしを思い描けるということを。</p>
        <div class="p-top-concept__button">
          <p class="c-button -primary"><a href="<?php echo esc_url(home_url('concept')); ?>">詳しく見る</a></p>
        </div>
      </div>
    </section>

    <!-- top-stories -->
    <section class="p-top-stories">
      <div class="p-top-stories__lead">
        <figure class="p-top-stories__thumb"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/stories-thumb.png" alt="関工務店代表の写真" width="120" height="120"></figure>
        <div class="c-title p-top-stories__title">
          <p class="en">stories</p>
          <h2 class="jp">関工務店ストーリー</h2>
          <p class="p-top-stories__text">〈関工務店ストーリー〉は、関工務店の二代目である僕が、これまで関わってきたお施主様のもとへ伺って、当時の思い出とともに、その後の暮らしぶりや家の様子を聞き、暮らしの中に宿る安心感について考える物語です。</p>
        </div>
      </div>
      <div class="swiper-container swiper2">
        <div class="swiper-wrapper">
          <!-- pic -->
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('stories/sakaguchi')); ?>">
              <p class="p-top-stories__tag">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag1.svg" alt="" width="23" height="97" class="">
              </p>
              <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic1.jpg" alt="坂口邸" width="243" height="159" class="p-top-stories__img"></figure>
              <p class="p-top-stories__copy">安心と安全は、そこに自由を生む。</p>
              <p class="p-top-stories__overview">『平穏で、安全で、繁栄する暮らしを支えたい』という人間の根源的な願望を改めて知るきっかけになった、坂口さんと僕の自由な暮らしの物語。</p>
            </a>
          </div>
          <!-- pic -->
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('stories/tokunaga')); ?>">
              <p class="p-top-stories__tag">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag2.svg" alt="徳永邸" width="23" height="97" class="">
              </p>
              <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic2.jpg" alt="" width="243" height="159" class="p-top-stories__img"></figure>
              <p class="p-top-stories__copy">未来を楽しみに出来る暮らしをする。</p>
              <p class="p-top-stories__overview">これから続く長い暮らしを想像したら、本物を使った家がいい。そんな発想から生まれた、慎吾君と僕の未来を描く物語。</p>
            </a>
          </div>
          <!-- pic -->
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('stories/seki')); ?>">
              <p class="p-top-stories__tag">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag3.svg" alt="関邸" width="23" height="97" class="">
              </p>
              <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic3.jpg" alt="" width="243" height="159" class="p-top-stories__img"></figure>
              <p class="p-top-stories__copy">優しさに満ちた家に暮らす、優しい人たち。</p>
              <p class="p-top-stories__overview">いつもの暮らしにほんの少しの上積みを。良い家は暮らしのアイデアを生み続けることを知った、関さんと僕の決断と拠り所の物語。</p>
            </a>
          </div>
          <!-- pic -->
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('stories/shimokawa')); ?>">
              <p class="p-top-stories__tag">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag4.svg" alt="下川邸" width="23" height="97" class="">
              </p>
              <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic4.jpg" alt="" width="243" height="159" class="p-top-stories__img"></figure>
              <p class="p-top-stories__copy">笑い声に包まれる、愛おしい空間。</p>
              <p class="p-top-stories__overview">普通の暮らし。今まで通りの生活。そんな当たり前こそが人にとっては尊いことだとわかった、下川さんと僕の愛と笑いの物語。</p>
            </a>
          </div>
          <!-- pic -->
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('stories/kanebako')); ?>">
              <p class="p-top-stories__tag">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag5.svg" alt="金箱邸" width="23" height="97" class="">
              </p>
              <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic5.jpg" alt="" width="243" height="159" class="p-top-stories__img"></figure>
              <p class="p-top-stories__copy">自然素材に囲まれた、安心と健康を感じる家。</p>
              <p class="p-top-stories__overview">健やかさと安心の関係を考えながら家づくりに取り組んだ、金箱さんと僕の二人三脚の物語。</p>
            </a>
          </div>
          <!-- pic -->
          <div class="swiper-slide">
            <a href="<?php echo esc_url(home_url('stories/ogawa')); ?>">
              <p class="p-top-stories__tag">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-tag6.svg" alt="小川醸造場" width="23" height="97" class="">
              </p>
              <figure><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/story-pic6.jpg" alt="" width="243" height="159" loading="lazy" class="p-top-stories__img"></figure>
              <p class="p-top-stories__copy">残せるものは残し、新しい息吹を感じる場所</p>
              <p class="p-top-stories__overview">見知らぬ電話番号からの着信で始まった運命の大仕事。小川醸造場さんと僕の再建の物語。</p>
            </a>
          </div>
        </div>
      </div>
      <div class="p-top-stories__button">
        <p class="c-button -primary"><a href="<?php echo esc_url(home_url('stories')); ?>">詳しく見る</a></p>
      </div>
    </section>

    <!-- top-service -->
    <section class="p-top-service">
      <div class="c-title-vertical p-top-service__title">
        <p class="en">service</p>
        <h2 class="jp">家づくりについて</h2>
      </div>
      <div class="p-top-service__wrap">
        <div class="p-top-service__inner">
          <div class="p-top-service__item">
            <a href="<?php echo esc_url(home_url('service#service1')); ?>">
              <figure class="p-top-service__thumb"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/service1.jpg" alt="" width="255" height="167" loading="lazy" class="p-top-service__img"></figure>
              <p class="p-top-service__copy">暮らしに寄り添う<br>住まい</p>
              <p class="p-top-service__text">気候や地質、景観といったその場所の暮らしに合った住まい方をご提案いたします。</p>
            </a>
          </div>
          <div class="p-top-service__item">
            <a href="<?php echo esc_url(home_url('service#service2')); ?>">
              <figure class="p-top-service__thumb"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/service2.jpg" alt="" width="255" height="167" loading="lazy" class="p-top-service__img"></figure>
              <p class="p-top-service__copy">心地の良い<br>住まい</p>
              <p class="p-top-service__text">自然素材を使用した心地よい空間をご提案いたします。</p>
            </a>
          </div>
          <div class="p-top-service__item">
            <a href="<?php echo esc_url(home_url('service#service3')); ?>">
              <figure class="p-top-service__thumb"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/service3.jpg" alt="" width="255" height="167" loading="lazy" class="p-top-service__img"></figure>
              <p class="p-top-service__copy">地震に強い<br>住まい</p>
              <p class="p-top-service__text">関工務店では耐震診断そして耐震補強をとても大切に考えています。</p>
            </a>
          </div>
        </div>
        <div class="p-top-service__button">
          <p class="c-button -primary"><a href="<?php echo esc_url(home_url('service')); ?>">詳しく見る</a></p>
        </div>
      </div>
    </section>

    <!-- top-about -->
    <section class="p-top-about">
      <div class="c-title-vertical p-top-about__title">
        <p class="en">about</p>
        <h2 class="jp">関工務店について</h2>
      </div>
      <div class="p-top-about__wrap">
        <figure class="p-top-about__thumb"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/about.jpg" alt="" width="274" height="260" loading="lazy" class="p-top-about__img"></figure>
        <p class="p-top-about__text">住まいに関する守り人として、住まいに関する設計・施工を総合的にご提案し、ご要望やお困りごとにていねいにお応えします。施主様の一生涯に寄り添い、お家を見守っていくことが、関工務店の使命です。</p>
      </div>

      <div class="p-top-about__button">
        <p class="c-button -primary"><a href="<?php echo esc_url(home_url('about')); ?>">詳しく見る</a></p>
      </div>
    </section>


    <!-- top-blog -->
    <section class="p-blog">
      <div class="c-title-vertical p-blog__title">
        <p class="en">blog</p>
        <h2 class="jp">ブログ</h2>
      </div>
      <div class="p-blog__wrap">
        <?php
          $args = array(
            'post_type'      => 'blog',
            'posts_per_page' => 3
          );
          $the_query = new WP_Query( $args );
          if ( $the_query->have_posts() ) : ?>

        <ul class="p-blog__inner">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php $terms = get_the_terms($post->ID,'blog-cat'); ?>

          <!-- item -->
          <li class="p-blog__item">
            <figure class="p-blog__thumb">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail("blog-thumbnail"); ?>
                <!-- <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/top/service1.jpg" alt="" width="255" height="167" loading="lazy" class="p-blog__img"> -->
              </a>
            </figure>
            <div class="p-blog__text-area">
              <a href="<?php the_permalink(); ?>">
                <p class="p-blog__date"><?php the_time('Y.n.j'); ?></p>
                <p class="p-blog__head"><?php the_title(); ?></p>
              </a>
              <?php if($terms) : ?>
              <ul class="p-blog__tag">
                <?php foreach($terms as $term) : ?>
                <li class="p-blog__tag-list"><a href="<?php echo esc_url( get_term_link( $term->term_id, $term->taxonomy )); ?>"><?php echo esc_html($term->name); ?></a></li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
          </li>
          <?php endwhile;?>
        </ul>
        <?php else: ?>
        <p>お知らせはありません</p>
        <?php
        endif;
        // 投稿データをリセット
          wp_reset_postdata();
        ?>

        <div class="p-blog__button">
          <p class="c-button -primary"><a href="<?php echo esc_url(home_url('blog')); ?>">詳しく見る</a></p>
        </div>

      </div>
    </section>

  </main>

  <?php get_footer(); ?>