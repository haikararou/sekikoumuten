<?php

get_header(); ?>

<main class="l-main -secondary">
  <section class="l-section-wrap">
    <div class="c-title-sec">
      <h2 class="en">blog</h2>
      <p class="jp">ブログ</p>
    </div>

    <div class="l-container p-sec-blog">
      <div class="p-blog__wrap">
        <?php $categories = get_categories(array('taxonomy' => 'blog-cat')); if ( $categories ) : ?>
        <ul class="p-blog__cat">
          <li class="p-blog__cat-list"><a href="<?php echo esc_url(home_url('blog')); ?>">すべて</a></li>
          <?php foreach ( $categories as $category ): ?>
          <li class="p-blog__cat-list"><a href="<?php echo clean_url( get_category_link( $category->term_id ) ); ?>"><?php echo wp_specialchars( $category->name ); ?></a></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <?php if (have_posts() ) : ?>
        <ul class="p-blog__inner">
          <?php while( have_posts() ) : the_post(); ?>
          <?php $terms = get_the_terms($post->ID,'blog-cat'); ?>
          <!-- item -->
          <li class="p-blog__item">
            <figure class="p-blog__thumb">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail("blog-thumbnail"); ?>
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

        <?php
          the_posts_pagination( array(
          //前へ・次へのテキストの非表示
          'prev_text' => '<span class="screen-reader-text">前へ</span>',
          'next_text' => '<span class="screen-reader-text">次へ</span>'
          ) );
          ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>