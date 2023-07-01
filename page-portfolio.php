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

    <?php endwhile;
else : ?>

    <p>Sorry, no posts matched your criteria!</p>

<?php endif;

get_footer();
?>
