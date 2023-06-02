<?php get_header(); ?>
<h1>カテゴリー：『<?php single_cat_title(); ?>』の記事一覧</h1>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink() ?>"></a>
  <?php endwhile; ?>
<?php endif; ?>

</main>
<?php get_footer(); ?>
</body>