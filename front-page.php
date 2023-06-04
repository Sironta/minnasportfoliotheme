<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php the_content(); ?>

        <?php endwhile; else: ?>

            <?php "Sorry, no posts matched your criteria!" ?>

        <?php endif; ?>

<?php get_footer(); ?>