<?php get_header(); ?>
    <div class="grid-container row gap-2 justify-center">
    
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <div class="col-12-xs col-5-sm col-3-xl">

            <a href="<?php the_permalink(); ?>">

                <h2><?php the_title(); ?></h2>

                <?php the_content(); ?>

            </a>

        </div>

        <?php endwhile; else: ?>

            <?php "Sorry, no posts matched your criteria!" ?>

        <?php endif; ?>

    </div>

<?php get_footer(); ?>