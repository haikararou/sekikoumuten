<?php

get_header(); ?>

<main class="l-main -secondary">
  <section class="l-section-wrap single-blog">
    <div class="l-container">
      <p class="single-blog__date"><?php the_time('Y.n.j'); ?></p>
      <h2 class="single-blog__title"><?php the_title(); ?></h2>
      <?php if ($terms = get_the_terms($post->ID, 'blog-cat')) : ?>
      <ul class="p-blog__tag">
        <?php foreach($terms as $term) : ?>
        <li class="p-blog__tag-list"><a href="<?php echo esc_url( get_term_link( $term->term_id, $term->taxonomy )); ?>"><?php echo esc_html($term->name); ?></a></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
      <div class="u-post">
        <?php the_content(); ?>
      </div>

      <nav class="navigation pagination" role="navigation" aria-label="投稿">
        <h2 class="screen-reader-text">投稿ナビゲーション</h2>
        <div class="nav-links">
          <?php
          // 前の記事取得
          $prev_post = get_previous_post();
          if( !empty( $prev_post ) ) {
          $prev_url = get_permalink( $prev_post->ID );
          }
          // 次の記事取得
          $next_post = get_next_post();
          if( !empty( $next_post ) ) {
          $next_url = get_permalink( $next_post->ID );
          }
          ?>

          <!-- 前の記事のリンクがあれば出力 -->
          <?php if ( !empty($prev_url)) : ?>
          <a class="prev page-numbers" href="<?php echo esc_url( $prev_url ); ?>"><span class="screen-reader-text">前へ</span></a>
          <?php else : ?>
          <?php endif; ?>

          <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="back-all">一覧を見る</a>

          <!-- 次の記事のリンクがあれば出力 -->
          <?php if ( !empty($next_url)) : ?>
          <a class="next page-numbers" href="<?php echo esc_url( $next_url ); ?>"><span class="screen-reader-text">次へ</span></a>
          <?php else : ?>
          <?php endif; ?>
        </div>
      </nav>

    </div>
  </section>
</main>

<?php get_footer(); ?>