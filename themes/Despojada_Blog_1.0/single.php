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
                    <p class="shareButtons"><span>Gostou? Então compartilha:</span> <g:plusone href="<?php echo get_permalink($post->ID); ?>" size="medium"></g:plusone> <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;text=<?php the_title(); ?>" style="width:100px; height:20px;"></iframe> <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=95&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:95px; height:20px"></iframe></p>
                </div>

            </div>
            <!-- /post -->

            <!-- posts relacionados -->
            <div id="PostsRelacionados">
                <h3>Posts relacionados</h3>
                <?php similar_posts(); ?>
            </div>
            <!-- /posts relacionados -->


            <!-- comentarios -->
            <div id="Comentarios">
                <h3>Comentários</h3>
                <div id="fb-root"></div>
                <script>(function(d){
                  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                  js = d.createElement('script'); js.id = id; js.async = true;
                  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                  d.getElementsByTagName('head')[0].appendChild(js);
                }(document));</script>
                <div class="fb-comments" data-href="<?php echo urlencode(get_permalink($post->ID)); ?>" data-num-posts="10" data-width="640"></div>
            </div>
            <!-- /comentarios -->


    <?php
        }
    }wp_reset_query(); ?>

    </div>            

<?php get_sidebar(); ?>
	<p class="gambi">...</p>

<?php get_footer(); ?>