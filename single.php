<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <h2><?php the_title(); ?></h2>

    <?php the_content(); ?>

        <?php endwhile; else: ?>

            <?php "Sorry, no posts matched your criteria!" ?>

        <?php endif; ?>

    <?php
    // Get the previous and next adjacent posts from the same category
        $previous_post = custom_get_adjacent_posts_by_category(true);
        $next_post = custom_get_adjacent_posts_by_category(false);
    ?>

    <!-- Display the post content -->

    <!-- Output previous and next post links -->
    <div class="wp-block-columns post-navigation">
        <div class="wp-block-column previous-post">
            <?php if ($previous_post) : ?>
                <a href="<?php echo get_permalink($previous_post); ?>">
                    <span class="wp-block-post-navigation-link__arrow-previous is-arrow-chevron" aria-hidden="true">«</span>
                    Previous: <?php echo $previous_post->post_title; ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="wp-block-column next-post">
            <?php if ($next_post) : ?>
                <a href="<?php echo get_permalink($next_post); ?>">
                    Next: <?php echo $next_post->post_title; ?>
                    <span class="wp-block-post-navigation-link__arrow-next is-arrow-chevron" aria-hidden="true">»</span>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <?php
        $current_post_categories = get_the_category();
        if (!empty($current_post_categories)) {
            $category_name = $current_post_categories[0]->name;
            $category_link = get_category_link($current_post_categories[0]->term_id);
            ?>
            <div class="back-to-category align-self-center">
                <a href="<?php echo esc_url($category_link); ?>">
                    <h6>
                        <span class="wp-block-post-navigation-link__arrow-previous is-arrow-chevron" aria-hidden="true">«</span>
                        Back to <?php echo esc_html($category_name); ?>
                    </h6>
                </a>
            </div>
            <?php
        }
    ?>

<div class="back-to-all-categories align-self-center">
    <a href="<?php echo esc_url(get_page_link(get_page_by_path('portfolio'))); ?>">
        <h6>
            <span class="wp-block-post-navigation-link__arrow-previous is-arrow-chevron" aria-hidden="true">« «</span>
            Back to All Categories
        </h6>
    </a>
</div>


<?php get_footer(); ?>