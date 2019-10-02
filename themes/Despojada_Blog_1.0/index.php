<?php get_header(); ?>

    <div id="Content" >

    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>

            <!-- post -->
            <div class="cxPost">
            	<div class="ttPost">
                    <p class="dtPost">
                    <?php the_time('\<\s\p\a\n \c\l\a\s\s\=\"\d\a\t\a\"\>\<\s\p\a\n\ \c\l\a\s\s\=\"\d\i\a\"\>d\<\/\s\p\a\n\>\<\b\r\ \/\>M\.y\<\/\s\p\a\n\>') ?>
                    </p>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                </div>

                <div class="txtPost">
                	<?php the_content(); ?>
                </div>

                <div class="dadosPost">
                    <p class="numComentarios"><iframe src="http://www.facebook.com/plugins/comments.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&permalink=1" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:16px;" allowTransparency="true"></iframe></p>
                    <p class="shareButtons"><span>Gostou? Então compartilha:</span> <g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone> <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe> <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></p>
                </div>

            </div>
            <!-- /post -->


    <?php
        }
    }wp_reset_query(); ?>

    <!-- paginacao -->
    <div id="navegacao">
        <?php
        if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
        } else {
        ?>
            <div class="alignleft"><?php next_posts_link('&laquo; Mais antigas') ?></div>
            <div class="alignright"><?php previous_posts_link('Mais novas &raquo;') ?></div>
        <?php } ?>
    </div>
    <!-- /paginacao -->

    </div>            

<?php get_sidebar(); ?>
	<p class="gambi">...</p>

<?php get_footer(); ?>