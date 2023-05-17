<?php get_header(); ?>

<body class="single-page">
  <main>
    <div class="single-page-img ">
      <img src="<?php echo get_template_directory_uri() . '/image/【最終図面】カンブライト様_大阪-4-1024x724.jpg' ?>" alt="">
    </div>

    <!--カテゴリの一覧 -->
    <?php
    $categories = get_categories();
    if ($categories) {
      echo '<ul class="flex-wrap categories">';
      foreach ($categories as $categorie) {
        echo '<li><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></li>';
      }
      echo '</ul>';
    }
    ?>
    <!-- 記事が属するカテゴリー -->
    <?php
    $categories = get_the_category();
    if ($categories) {
      echo '<ul>';
      foreach ($categories as $category) {
        echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name . '</a></li>';
      }
      echo '</ul>';
    }
    ?>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <!-- タイトル -->
    <h1 class="post_title"><?php the_title(); ?></h1>
    <!-- 投稿日 -->
    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
      <?php echo get_the_date(); ?>
    </time>
    <!-- 著者 -->
    <div>
      <?php the_author(); ?>
    </div>
    <?php if (has_post_thumbnail()) : ?>
    <div class="single_thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <!--本文-->
    <div class="single_content">
      <?php the_content(); ?>
    </div>
    <?php endwhile;
    endif; ?>
  </main>
  <?php get_footer(); ?>
</body>