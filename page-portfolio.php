<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

        <?php
        $desired_order = array('3d-games', 'visual-audiovisual', 'web-and-app-design', 'art-and-other-projects');

        $categories = get_categories();

        $sorted_categories = array();

        foreach ($desired_order as $slug) {
            foreach ($categories as $category) {
                if ($category->slug === $slug) {
                    $sorted_categories[] = $category;
                    break;
                }
            }
        }
        ?>

        <div class="category-headings align-self-center">
            <?php
            if ($sorted_categories) {
                foreach ($sorted_categories as $category) {
                    echo '<div class="category-heading align-self-center">';
                    echo '<a href="' . get_category_link($category->term_id) . '">';
                    echo '<h2>' . $category->name . '</h2>';
                    echo '</a>';
                    echo '</div>';
                }
            }
            ?>
        </div>

    <?php endwhile;
else : ?>

    <p>Sorry, no posts matched your criteria!</p>

<?php endif;

get_footer();
?>
