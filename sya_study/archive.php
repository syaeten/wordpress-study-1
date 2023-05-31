<?php

/**
 * Template Name: Archive Page
 */
?>

<?php get_header(); ?>

<div class="archive-page">

  <div class="archives">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?> " class='archive-card'>
          <h2 class="archive-title"><?php the_title(); ?></h2>

          <?php
          if (has_post_thumbnail()) :
            the_post_thumbnail();
          else :
          ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/dummy.png" alt="">
          <?php endif; ?>

          <p class="archive-excerpt"><?php echo get_the_excerpt(); ?></p>
          <time class="archive-time" datetime="<?php the_time('Y.m.d'); ?>">
            <?php the_time('Y.m.d'); ?>
          </time>
        </a>
    <?php
      endwhile;
    endif;
    //wp_reset_query(); //query_posts()を使って投稿表示をした場合、wp_reset_query()でループをリセットする
    ?>
  </div>
</div>


</main>
<?php get_footer(); ?>
</body>