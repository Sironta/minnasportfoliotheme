<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

        <h1><?php the_title(); ?></h1>
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

            <div class="category-container">
            <?php foreach ($sorted_categories as $category) : ?>
                <a href="<?php echo get_category_link($category->term_id); ?>"><h2 class="category-heading"><?php echo $category->name; ?></h2></a>
            <?php endforeach; ?>
            </div>

    <?php endwhile;
else : ?>

    <p>Sorry, no posts matched your criteria!</p>

<?php endif;

get_footer();
?>
