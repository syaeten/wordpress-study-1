<?php

/**
 * Template Name: Info Page
 */
?>
<?php get_header(); ?>


<h1>お知らせ</h1>

<?php if (have_posts()) : while (have_posts()) : the_post() ?>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>