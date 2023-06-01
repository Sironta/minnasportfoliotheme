<?php get_header(); ?>

    <main class="container">

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php the_content(); ?>

        <?php endwhile; else: ?>

            <?php "Sorry, no posts matched your criteria!" ?>

        <?php endif; ?>

    </main>

<?php get_footer(); ?>