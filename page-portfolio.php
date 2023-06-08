<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>

    <?php $categories = get_categories(); ?>

    <div class="category-headings align-self-center">
    <?php if ($categories) {
    foreach ($categories as $category) {
        echo '<div class="category-heading align-self-center">';
        echo '<a href="' . get_category_link($category->term_id) . '">';
        echo '<h2>' . $category->name . '</h2>';
        echo '</a>';
        echo '</div>';
    }
    } ?>
    </div>

        <?php endwhile; else: ?>

            <?php "Sorry, no posts matched your criteria!" ?>

        <?php endif; ?>

<?php get_footer(); ?>