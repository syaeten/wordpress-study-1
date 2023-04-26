<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink() ?>"></a>
    <?php endwhile; ?>
<?php endif; ?>

</main>
<?php get_footer(); ?>
</body>