<?php
/*
 * template name:about
 */

get_header(); ?>

<main class="l-main -secondary">

  <section class="l-section-wrap">

    <div class="c-title-sec">
      <h2 class="en">about</h2>
      <p class="jp">関工務店について</p>
    </div>
    <figure class="p-about__mv">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/about/mv_sp.jpg" alt="" width="375" height="226" loading="lazy" class="u-sp-only">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/img/about/mv_pc.jpg" alt="" width="1152" height="693" loading="lazy" class="u-pc-only">
    </figure>
    <div class="l-container">
      <p class="p-about__lead">住まいに関する守り人として、住まいに関する設計・施工を総合的にご提案し、<br class="u-pc-only">ご要望やお困りごとにていねいにお応えします。<br>施主様の一生涯に寄り添い、お家を見守っていくことが、関工務店の使命です。</p>

      <section class="p-about__career">
        <h3 class="name">関 博之</h3>
        <dl class="p-about__lists">
          <div class="wrap">
            <dt class="term">1979</dt>
            <dd class="desc">長野市に生まれる</dd>
          </div>
          <div class="wrap">
            <dt class="term">1999</dt>
            <dd class="desc">地元を離れ富山大学へ</dd>
          </div>
          <div class="wrap">
            <dt class="term">2004</dt>
            <dd class="desc">長野に戻り通信建設業の会社に就職</dd>
          </div>
          <div class="wrap">
            <dt class="term">2007</dt>
            <dd class="desc">建築の道に進むため<br>上田情報ビジネス専門学校建築科へ</dd>
          </div>
          <div class="wrap">
            <dt class="term">2009</dt>
            <dd class="desc">関工務店に入社</dd>
          </div>
          <div class="wrap">
            <dt class="term">2016</dt>
            <dd class="desc">一級建築士取得</dd>
          </div>
          <div class="wrap">
            <dt class="term">2018</dt>
            <dd class="desc">設計力を高めようと東京の設計事務所に就職</dd>
          </div>
          <div class="wrap">
            <dt class="term">2019</dt>
            <dd class="desc">台風19号災害を機に長野に戻り<br class="u-sp-only">二代目として関工務店を継ぐ</dd>
          </div>
        </dl>
      </section>

      <section class="p-about__summary">
        <h3 class="title">会社概要</h3>
        <dl class="lists">
          <div class="wrap">
            <dt class="term">社名</dt>
            <dd class="desc">有限会社 関工務店</dd>
          </div>
          <div class="wrap">
            <dt class="term">代表取締役</dt>
            <dd class="desc">関 博之</dd>
          </div>
          <div class="wrap">
            <dt class="term">資本金</dt>
            <dd class="desc">500万円</dd>
          </div>
          <div class="wrap">
            <dt class="term">建設業許可</dt>
            <dd class="desc">長野県知事許可（般-1）第25947号</dd>
          </div>
          <div class="wrap">
            <dt class="term">一級建築士事務所登録</dt>
            <dd class="desc">設計工房sumoribito（長野）A第55141号</dd>
          </div>
        </dl>
      </section>

      <section class="p-about__access">
        <h3 class="title">アクセス</h3>
        <div class="u-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51195.73533932589!2d138.23767919461062!3d36.68090917225191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f3.1!3m3!1m2!1s0x601d892b329a9fd9%3A0xe8f9457fc4096959!2z6Zai5bel5YuZ5bqX!5e0!3m2!1sja!2sjp!4v1637547817425!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe></div>
        <p class="address">〒381-0003 長野県長野市大字穂保35</p>
      </section>
    </div>
  </section>
</main>

<?php get_footer(''); ?>