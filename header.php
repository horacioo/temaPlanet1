<?php $url_tema = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="google-site-verification" content="czvzJf8kd1DmBGD4juoyCG_2IuuIfwqSia1gj417mik" />
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"  rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php wp_head(); ?>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="<?php echo $url_tema; ?>/css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $url_tema; ?>/css/flip.css" rel="stylesheet" type="text/css">
        <script src="<?php echo $url_tema; ?>/js/menu.js"></script>
        <script src="<?php echo $url_tema; ?>/js/video.js"></script>

        <style>
            footer, header, caption{
                background-color: <?php echo get_theme_mod('twtema_descricoes-header-titulo'); ?>;
                color: <?php echo get_theme_mod("corTexto_rodape"); ?>
            }
            
            nav a{font-weight: 700; text-transform: capitalize;}
            
            article p, article h1, article h2, article h3,article a,nav a{color:<?php echo get_theme_mod('twtema_descricoes-header-titulo'); ?>!important;}
            
            input{border-color: <?php echo get_theme_mod('twtema_descricoes-header-titulo'); ?>!important;}
            
            footer a, header a{
                color: <?php echo get_theme_mod("corTexto_rodape"); ?>!important;
            }
        </style>

    </head>

    <body <?php body_class(); ?>>
        
        
        <header class="container-fluid">
            <div class="row-fluid">
                <div class="col-sm-1"><?php echo Logotipo(); ?></div>

                <div class="col-sm-5">
                    <h1><?php echo bloginfo('title') ?></h1>
                    <div><?php echo bloginfo('description'); ?></div>
                </div>

                <div class="col-sm-6"><?php dynamic_sidebar("lateral direita do topo"); ?></div>
            </div>




        </header>
        <div class="container-fluid"> 

            <div class="row-fluid"> 
                <?php get_template_part('template-part/menu') ?>
            </div>