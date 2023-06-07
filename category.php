<?php get_header(); ?>

<div class="align-self-center">  
    <h2>
        <?php $category = get_the_category(); 
        echo $category[0]->cat_name;
        ?>
    </h2>
</div>
<div class="category-description text-container-wide-centered">
    <?php echo category_description(); ?>
</div>    

    <div class="grid-container row gap-2 justify-center">
    
        <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <div class="grid-cell col-12-xs col-5-sm col-3-xl">

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