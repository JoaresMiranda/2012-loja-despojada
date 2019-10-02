<?php get_header(); ?>

        <div id="Content" >
        <h2 class="tt-Pagina">Coleções</h2>
                <div class="txtPost">
		<?php
        if (have_posts ()) {
            while (have_posts ()) {
                the_post(); ?>

                <p class="cartola">Coleção</p>
                <h2 class="tt-Colecao"><?php echo get_post_meta($post->ID, 'NomeColecao', true); ?></h2>

                    <?php the_content(); ?>

        <?php
            }
        }wp_reset_query(); ?>


                <div id="ColecoesAnteriores">
                    <h2 class="tt-Pagina">Coleções anteriores</h2>
        
        <?php
         query_posts('category_name=Colecoes&offset=0');
         while (have_posts()) : the_post(); ?>
        
                    <div class="boxAnteriores">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'destaquepequeno' ); ?></a>
                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    </div>
        
		<?php endwhile;
         ?>

        <?php wp_reset_query(); ?>
        
                </div>
        
            </div>
            <p class="gambi">...</p>
        
        </div>
            
<?php get_footer(); ?>