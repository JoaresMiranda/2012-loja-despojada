        <!-- Sidebar -->
        <div id="Sidebar">

			<!-- BUSCA -->
            <div id="Busca">
                <form id="frmBusca" method="get" action="<?php bloginfo('home'); ?>">
                    <fieldset>
                        <legend>Pesquisa</legend>
                        <p>
                            <label for="Palavra">Palavra:</label>
                            <input type="text" value="busca" name="s" id="s" onfocus="if(this.value=='busca')this.value=''" onblur="if(this.value=='')this.value='busca'" />
                            <button name="sa" id="Buscar" type="submit">Ok</button>
                        </p>
                    </fieldset>
                </form>
            </div>
			<!-- /BUSCA -->

			<!-- SOCIAL MEDIA -->
            <div id="Social">
            	<h3 class="ttSidebar">Redes sociais</h3>

                <div class="botoesSocial">
                    <a rel="nofollow" title="twitter" data-toggle="modal" href="#Twitter" class="btTwitter"><img src="<?php bloginfo('template_directory'); ?>/imagens/bt_twitter.gif"></a>
                    <a rel="nofollow" title="facebook"  data-toggle="modal" href="#Facebook" class="btFacebook"><img src="<?php bloginfo('template_directory'); ?>/imagens/bt_facebook.gif"></a>
                </div>
				<p class="textoSocial">Faça parte de nossas redes sociais e fique por dentro de tudo o que rola em nossa loja praticamente em tempo real.</p>
                
                <div id="Facebook" class="modal hide fade">
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal" >&times;</a>
                        <h3>Curta nossa página no Facebook</h3>
                    </div>
                    <div class="modal-body">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=118262138280314";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like-box" data-href="https://www.facebook.com/pages/Despojada-Loja/270736196275148" data-width="530" data-height="335" data-show-faces="true" data-stream="false" data-header="false"></div>
                    </div>				
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal" >Fechar</a>
                    </div>
                </div>
    
                <div id="Twitter" class="modal hide fade">
                    <div class="modal-header">
                        <a class="close" data-dismiss="modal" >&times;</a>
                        <h3>Siga-nos no twitter</h3>
                    </div>
                    <div class="modal-body">
                        <div class="offset1">
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            <h4>Twitter da loja</h4><br />
                            <a href="https://twitter.com/eusoudespojada" class="twitter-follow-button" data-show-count="true" data-lang="en" data-size="large"></a><br />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal" >Fechar</a>
                    </div>
                </div>
            </div>
			<!-- /SOCIAL MEDIA -->

			<!-- POSTS RECENTES -->
            <div id="PostsRecentes">
            	<h3 class="ttSidebar">Posts recentes</h3>
				<?php
                global $post;
                if (is_home()) {
                ?>
                <ul>
                <?php
                foreach( (array) get_posts('offset=7') as $post ) :
                    setup_postdata($post);
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a>
                    </li>
                    <?php
                endforeach;
                ?>
                </ul>
                <?php
                } else {
                ?>
                <ul>
                <?php
                foreach( (array) get_posts('offset=0') as $post ) :
                    setup_postdata($post);
                    ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a>
                    </li>
                    <?php
                endforeach;
                ?>
                </ul>
                <?php
                }
                ?>
            </div>
			<!-- /POSTS RECENTES -->

			<!-- CATEGORIAS -->
            <div id="Categoria">
            	<h3 class="ttSidebar">Categorias</h3>
                <ul>
					<?php wp_list_categories('orderby=name&title_li='); ?> 
                </ul>
            </div>
			<!-- /CATEGORIAS -->

            <!-- LINKS -->
            <div id="Links">
                <h3 class="ttSidebar">Links</h3>
                <ul>
                    <?php
                    $bookmarks = get_bookmarks(array(
                                'orderby' => 'name',
                                'order' => 'ASC'
                            ));
        
                    foreach ($bookmarks as $bm) {
                        printf('<li><a href="%s">%s</a></li>', $bm->link_url, __($bm->link_name));
                    } ?>
                </ul>
            </div>
            <!-- /LINKS -->

            <!-- TAGS -->
            <div id="Tags">
            	<h3 class="ttSidebar">Tags</h3>
                <div>
                    <?php wp_tag_cloud('number=60'); ?>
                </div>
            </div>
            <!-- /TAGS -->

        </div>
        <!-- /Sidebar -->