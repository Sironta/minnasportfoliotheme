<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>

    <?php $categories = get_categories(); ?>

    <?php if ($categories) {
    foreach ($categories as $category) {
        echo '<a href="' . get_category_link($category->term_id) . '">';
        echo '<h2>' . $category->name . '</h2>';
        echo '</a>';
    }
    } ?>

        <?php endwhile; else: ?>

            <?php "Sorry, no posts matched your criteria!" ?>

        <?php endif; ?>

<?php get_footer(); ?>