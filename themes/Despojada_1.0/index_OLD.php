<?php get_header(); ?>

            <?php
             query_posts('category_name=Colecoes&posts_per_page=1;');
             while (have_posts()) : the_post(); ?>

        	<div id="ColecaoApresentacao">
            	<p class="cartola">Coleção</p>
                <h2 class="tt-Colecao"><?php the_title(); ?></h2>
				
                 <?php the_content(); ?>
                <p class="linkMais"><a href="<?php the_permalink(); ?>">Conheça nossa coleção completa</a></p>
            </div>

			<?php endwhile; ?>
    
            <?php wp_reset_query(); ?>
            
            <!-- ContentCapa -->
            <div id="ContentCapa">
            	<div id="MiniSobre">
				<?php
                 query_posts('pagename=Sobre');
                 while (have_posts()) : the_post(); ?>

                	<h3><?php the_title(); ?></h3>

                    <?php the_excerpt(); ?>

                    <p class="verMais"><a href="<?php the_permalink(); ?>">Leia mais &raquo;</a></p>
				<?php endwhile; ?>
        
                <?php wp_reset_query(); ?>

                </div>
                
                <div id="MiniBlog">
                	<h3>Blog</h3>
                    <ul>
                    	<li><a href="#">// Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></li>
                        <li><a href="#">// Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a></li>
                        <li><a href="#">// Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a></li>
                        <li><a href="#">// Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a></li>
                        <p class="verMais"><a href="#">Ir para o blog &raquo;</a></p>
                    </ul>
                </div>
                
                <div id="MiniContato">
				<?php
                 query_posts('pagename=Contato');
                 while (have_posts()) : the_post(); ?>

                	<h3><?php the_title(); ?></h3>

                    <?php the_excerpt(); ?>

				<?php endwhile; ?>
        
                <?php wp_reset_query(); ?>
                </div>
            </div>
            <!-- /ContentCapa -->

<?php get_footer(); ?>
