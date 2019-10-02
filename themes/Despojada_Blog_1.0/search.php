<?php get_header(); ?>

    <div id="Content" >

        <h2 id="ttPagina">Resultado da pesquisa</h2>

    <?php
    if (have_posts ()) {
        while (have_posts ()) {
            the_post(); ?>

            <!-- post -->
            <div class="cxPost">
            	<div class="ttPost">
                    <p class="dtPost">
                    <?php the_time('\<\s\p\a\n \c\l\a\s\s\=\"\d\a\t\a\"\>\<\s\p\a\n\ \c\l\a\s\s\=\"\d\i\a\"\>d\<\/\s\p\a\n\>\<\b\r\ \/\>F\.y\<\/\s\p\a\n\>') ?>
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
        } else {?>
           <div class="txtPost msgErro">
               <p>Algo deu errado...</p>
               <p>O conteúdo que você está tentando acessar não está disponível. Retorne para a <a href="<?php bloginfo('home'); ?>">capa do blog</a> ou tente fazer uma pesquisa através da caixa de busca que se encontra na lateral</p>
           </div>
		<?php } wp_reset_query(); ?>
    
        <!-- Navegacao -->
        <div id="Navegacao">
            <p class="voltar"><?php next_posts_link('&laquo; Artigos anteriores') ?></p>
            <p class="avancar"><?php previous_posts_link('Próximo artigos &raquo;') ?></p>
        </div>
        <!-- /Navegacao -->

    </div>            

<?php get_sidebar(); ?>
	<p class="gambi">...</p>

<?php get_footer(); ?>