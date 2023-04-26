<?php
get_header();

if (have_posts()) {
  while (have_posts()) {
    the_post();
    // 输出文章标题和内容
    echo '<h1>' . get_the_title() . '</h1>';
    the_content();
  }
}

get_footer();