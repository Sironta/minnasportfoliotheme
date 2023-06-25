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


?>