<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <a href="<?php the_permalink(); ?>">

        <h2><?php the_title(); ?></h2>
    
        <?php the_content(); ?>

    </a>

    <?php endwhile; else: ?>

        <?php "Sorry, no posts matched your criteria!" ?>
        
    <?php endif; ?>

<?php get_footer(); ?>