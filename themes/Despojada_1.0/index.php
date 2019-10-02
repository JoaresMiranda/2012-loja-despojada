<?php get_header(); ?>

            <?php
             query_posts('category_name=Colecoes&posts_per_page=1;');
             while (have_posts()) : the_post(); ?>

        	<div id="ColecaoApresentacao">
            	<p class="cartola">Coleção</p>
                <h2 class="tt-Colecao"><?php the_title(); ?></h2>
				<ul>
				<?php
                $args = array(
                    'numberposts' => 6,
                    'order'=> 'ASC',
                    'post_mime_type' => 'image',
                    'post_parent' => get_the_ID(),
                    'post_status' => null,
                    'post_type' => 'attachment'
                );
                $attachments = get_children( $args );
                foreach( $attachments as $attachment )
                echo '<li>' . wp_get_attachment_image( $attachment->ID, 'destaquecapa' ) .'</li>';
                ?>
				</ul>
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

					<?php // Get RSS Feed(s)
                    include_once(ABSPATH . WPINC . '/feed.php');
                    
                    // Get a SimplePie feed object from the specified feed source.
                    $rss = fetch_feed('http://eusoudespojada.com.br/feed');
                    if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
                        // Figure out how many total items there are, but limit it to 5. 
                        $maxitems = $rss->get_item_quantity(5); 
                    
                        // Build an array of all the items, starting with element 0 (first element).
                        $rss_items = $rss->get_items(0, $maxitems); 
                    endif;
                    ?>
                    <ul>
                        <?php if ($maxitems == 0) echo '<li>No items.</li>';
                        else
                        // Loop through each feed item and display each item as a hyperlink.
                        foreach ( $rss_items as $item ) : ?>
                        <li>
                            <a href='<?php echo esc_url( $item->get_permalink() ); ?>'
                            title='<?php echo 'Publicado dia '.$item->get_date('j F Y'); ?>'>
                            <?php echo esc_html( $item->get_title() ); ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <p class="verMais"><a href="http://www.eusoudespojada.com.br">Ir para o blog &raquo;</a></p>
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
