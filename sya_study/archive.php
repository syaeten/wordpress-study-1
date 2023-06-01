<?php

/**
 * Template Name: Archive Page
 */
?>

<?php get_header(); ?>

<div class="archive-page">

  <div>
    <a href="<?php home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/image/icon_metro_home.svg" alt=""></a>
  </div>

  <div class="archives">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?> " class='archive-card'>

          <!-- 記事のthumbnail画像 -->
          <?php
          if (has_post_thumbnail()) :
            the_post_thumbnail();
          else :
          ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/dummy.png" alt="">
          <?php endif; ?>
          <h2 class="archive-title"><?php the_title(); ?></h2>

          <!-- 抜粋 -->
          <p class="archive-excerpt">
            <?php
            $length = 50;
            $excerpt = get_the_excerpt();
            echo mb_strlen($excerpt) > $length ?
              mb_substr($excerpt, 0, $length) . '...' : $excerpt;
            ?>
          </p>


          <div class="flex-wrap archive-footer">
            <time class="archive-time" datetime="<?php the_time('Y.m.d'); ?>">
              <?php the_time('Y.m.d'); ?>
            </time>

            <p class="archive-category">
              <?php
              $categories = get_the_category();
              $categories = array_filter($categories, function ($category) {
                return $category->name != 'Uncategorized';
              });
              $length = count($categories);
              if (!empty($categories)) {
                echo '<span>|</span>';
                foreach ($categories as  $index => $category) {
                  echo $category->name;
                  if ($index < $length - 1) {
                    echo '<span>|</span>';
                  }
                }
              }
              ?>
            </p>
          </div>
        </a>
    <?php
      endwhile;
    endif;
    //wp_reset_query(); //query_posts()を使って投稿表示をした場合、wp_reset_query()でループをリセットする
    ?>
  </div>

  <!-- 親カテゴリーと子カテゴリーの一覧を取得する -->
  <!-- ***文章のないcategoryは表示してこないんだ -->
  <ul>
    <?php
    $categories = get_categories('parent=0');
    if ($categories) :
      foreach ($categories as $category) :
    ?>
        <li>
          <a href="<?php echo get_category_link($category->term_id); ?>">
            <?php echo $category->name; ?>
          </a>
          <?php
          $childs = get_categories('child_of=' . $category->term_id);
          if ($childs) :
          ?>
            <ul>
              <?php foreach ($childs as $child) : ?>
                <li>
                  <a href="<?php echo get_category_link($child->term_id); ?>">
                    <?php echo '-' . $child->name; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    <?php endif; ?>
  </ul>


</div>


</main>
<?php get_footer(); ?>
</body>