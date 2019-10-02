<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="content-language" content="pt-br" />

    <meta name="robots" content="index,follow" />

    <meta name="author" content="Joares Miranda" />
	
    <link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_directory'); ?>/imagens/favicon.png" />
    
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/imagens/logo.png">
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    
    <title>
        <?php
        if (wp_title(' ', false)) {
            wp_title(' ');
            echo ' | ';
            bloginfo('name');
        } else {
            bloginfo('name');
            echo ' | ';
            is_home() ? bloginfo('description') : wp_title('');
        }
        ?>
    </title>


    <!-- SCRIPTS -->
	<?php wp_head(); ?>	
	
    <!-- Google Plus -->
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'pt-BR'}</script>
    <script type="text/javascript">
    window.___gcfg = {lang: 'pt-br'};
    (function() 
    {var po = document.createElement("script");
    po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(po, s);
    })();</script>
    
    <!-- Facebook -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=118262138280314";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- /SCRIPTS -->

</head>

<?php
if ( is_home() ) { ?>

<body id="Capa">

<?php } else { ?>

<body id="Interna" <?php body_class(); ?>>	

<?php }
?>



	<div id="Site">
    	<!-- Header -->
        <div id="Header">
        	<div class="bgRotativo">
                <h1><a href="<?php bloginfo('home'); ?>">
                <?php
                bloginfo('name');
                echo ' - ';
                bloginfo('description');
                ?></a></h1>
                
                <div id="Menu">
					<?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
                </div>
            </div>
        </div>
        <!-- /Header -->
        
        <!-- Main -->
        <div id="Main">
