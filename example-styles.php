<?php /* Template Name: ExampleStyles */ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<?php the_content(); ?>

    <?php endwhile; else: ?>

        <?php "Sorry, no posts matched your criteria!" ?>

    <?php endif; ?>

        <div class="row gap-2 justify-center">
            <div class="col-12-xs col-5-sm col-3-xl">
                <h3>Lorem, ipsum.</h3>
                <div class="card-test">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="col-12-xs col-5-sm col-3-xl">
                <h3>Lorem, ipsum.</h3>
                <div class="card-test">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="col-12-xs col-5-sm col-3-xl">
                <h3>Lorem, ipsum.</h3>
                <div class="card-test">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
            <div class="col-12-xs col-5-sm col-3-xl">
                <h3>Lorem, ipsum.</h3>
                <div class="card-test">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                </div>
            </div>
        </div>

<?php get_footer(); ?>