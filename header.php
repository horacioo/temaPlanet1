<?php $url_tema = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="google-site-verification" content="czvzJf8kd1DmBGD4juoyCG_2IuuIfwqSia1gj417mik" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
    <![endif]-->
    <style><?php echo file_get_contents($url_tema . "/style.css"); ?></style>
    <?php wp_head(); ?>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>

        .navbar-default {
            background-color: <?php echo get_theme_mod("cor2"); ?>;
            border-color: #fdfdfd;
        }

        footer,header,caption{
            background-color: <?php echo get_theme_mod('cor1'); ?>;
            color: <?php echo get_theme_mod("cor2"); ?>
        }

        nav a{font-weight: 700; text-transform: capitalize;}
        .tag a,article p, article h1, article h2, article h3,article a,nav a{color:<?php echo get_theme_mod('cor1'); ?>!important;}


        label{color: <?php echo get_theme_mod('cor1'); ?>;}

        
        h1,h2,h3,h4{color:<?php echo get_theme_mod('cor1'); ?>;}
        
        input,textarea,select{
            border:1px solid <?php echo get_theme_mod('cor1'); ?>;
            color: <?php echo get_theme_mod('cor1'); ?>;
            border-radius:5px;
            padding:3px;
            max-width: 99%;
        }

        a,a:hover{color: <?php echo get_theme_mod('cor1'); ?>;}

        footer a, header a{
            color: <?php echo get_theme_mod("cor2"); ?>!important;
        }
    </style>
    <body <?php body_class(); ?>>
        <header class="container-fluid" id="topo">
            <div class="row-fluid">
                <div class="col-sm-1"><?php echo Logotipo(); ?></div>

                <div class="col-sm-3">
                    <h1><a href="<?php echo bloginfo('home') ?>"><?php echo bloginfo('title') ?></a></h1>
                    <div><a href="<?php echo bloginfo('home') ?>"><?php echo bloginfo('description'); ?></a></div>
                </div>

                <div class="col-sm-8"><?php dynamic_sidebar("lateral direita do topo"); ?></div>
            </div>
        </header>
        <div class="container-fluid"> 
            <div class="row-fluid">
                <div class="col-lg-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Menu</a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <?php if (is_home()) { ?>
                                    <?php wp_nav_menu(array('menu' => 'home', 'menu_class' => 'nav navbar-nav navbar-left')); ?>
                                <?php } else { ?>
                                    <?php wp_nav_menu(array('menu' => 'topo', 'menu_class' => 'nav navbar-nav navbar-left')); ?>
                                <?php } ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>