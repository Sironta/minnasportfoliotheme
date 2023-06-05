<?php /* Template Name: MainArea */ ?>

<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

        <?php endwhile; else: ?>

            <?php "Sorry, no posts matched your criteria!" ?>

        <?php endif; ?>

<?php get_footer(); ?>

<!-- To do: Style the messages promted by the form. -->