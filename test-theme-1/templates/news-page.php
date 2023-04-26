<?php
/*
Template Name: News Page
*/
?>
<?php get_header(); ?>
<h1>News</h1>

<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 5,
);

$query = new WP_Query($args);

if ($query->have_posts()) {
  while ($query->have_posts()) {
    $query->the_post();
    // 输出文章标题和内容等信息
    the_title();
    the_content();
  }
  wp_reset_postdata();
}
?>



<?php get_footer(); ?>