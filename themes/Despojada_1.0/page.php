<?php get_header(); ?>

        	<div id="Content" class="">
    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>

                <h2 class="tt-Pagina"><?php the_title(); ?></h2>
                <div class="txtPost">
                	<?php the_content(); ?>
                </div>
    <?php }
    } ?>
                <p class="gambi">...</p>

            </div>
            
<?php get_footer(); ?>