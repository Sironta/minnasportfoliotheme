<?php

//Navigation

register_nav_menus(
    array(
        'primary-menu' => __('Main Menu')
    )
);

//Customizing Category List Order

function custom_category_title_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'category' => '',
            'link_class' => '',
            'title_class' => '',
        ),
        $atts,
        'category_title'
    );

    $category = get_category_by_slug($atts['category']);

    if (!$category) {
        return ''; // Category not found, return empty string
    }

    $category_link = get_category_link($category->term_id);

    ob_start();
    ?>
    <a class="<?php echo esc_attr($atts['link_class']); ?>" href="<?php echo $category_link; ?>">
        <h2 class="<?php echo esc_attr($atts['title_class']); ?>">
            <?php echo $category->name; ?>
        </h2>
    </a>
    <?php
    return ob_get_clean();
}
add_shortcode('category_title', 'custom_category_title_shortcode');

//Customizing Post order

function custom_get_adjacent_posts_by_category($previous = true) {
    $current_post_categories = get_the_category();
    $current_category_id = $current_post_categories[0]->term_id;

    // Get posts from the current post's category
    $args = array(
        'category' => $current_category_id,
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => -1,
    );
    $posts_in_category = get_posts($args);

    // Find the current post's index in the category
    $current_post_index = array_search(get_the_ID(), wp_list_pluck($posts_in_category, 'ID'));

    // Calculate adjacent post index
    $adjacent_post_index = $previous ? $current_post_index - 1 : $current_post_index + 1;

    if (isset($posts_in_category[$adjacent_post_index])) {
        return $posts_in_category[$adjacent_post_index];
    }

    return null;
}


?>