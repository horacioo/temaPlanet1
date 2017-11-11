<?php
add_post_type_support('page', 'excerpt');
add_post_type_support('post', 'excerpt');
add_post_type_support('anuncios', 'excerpt');
remove_action('init', 'wp_admin_bar_init');

//set_post_thumbnail_size(825, 510, true);
add_theme_support('title-tag');
add_theme_support('custom-background', array('default-color' => 'white'));
add_theme_support('custom-logo', array('height' => 90, 'width' => 90, 'flex-width' => true,));
add_theme_support('menus', 'widget');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('customize-selective-refresh-widgets');
//


//add_filter('show_admin_bar', '__return_false');
register_nav_menu('topo', 'topo');
register_nav_menu('home', 'home');
register_nav_menu('rodape', 'rodape');
register_nav_menu('notfound', 'notfound');



add_image_size('monster', 1500, "auto", true);
add_image_size('mini_monster', 750, "auto", true);
add_image_size('mini', 20, 20, true);


/* * **** */
add_filter('widget_text', 'do_shortcode');
/* * **** */


/* * **************** */
$args = array(
    'width' => 2000,
    'height' => 650,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support('custom-header', $args);
/* * **************** */

function Logotipo() {
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
}

/* * ********************************************************* */

function fb_change_mce_options($initArray) {
    $ext = 'pre[id|name|class|style],iframe[align|longdesc| name|width|height|frameborder|scrolling|marginheight| marginwidth|src]';

    if (isset($initArray['extended_valid_elements'])) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }

    return $initArray;
}

add_filter('tiny_mce_before_init', 'fb_change_mce_options');
/* * ********************************************************* */




register_sidebar(array(
    "name" => "lateral direita do topo",
    "description" => "lateral direita do topo",
    "id" => "latesquerda",
    "before_widget" => "<div class='col-sm-4 widget'>",
    "after_widget" => "</div>",
));

register_sidebar(array(
    "name" => "novo elemento da home",
    "description" => "conteudo extra da home",
    "id" => "home",
    "before_widget" => "<div class='col-sm-12 widget'>",
    "after_widget" => "</div>",
));


register_sidebar(array(
    "name" => "elemento da direita",
    "description" => "conteudo na direita da página",
    "id" => "pageDireita",
    "before_widget" => "<div class='col-sm-12 widget'>",
    "after_widget" => "</div>",
));



register_sidebar(array(
    "name" => "rodape",
    "description" => "componentes da home",
    "id" => "rodape",
    "before_widget" => "<div class='col-sm-3 widget'>",
    "after_widget" => "</div>",
));



/********************************/
/********************************/
/********************************/

add_action('customize_register', 'twtema_decricoes_do_header');

function twtema_decricoes_do_header($wp_customize) {
    // adiciona um painel

    $wp_customize->add_panel('descricoes', array(
        'priority' => 800,
        'theme_supports' => '',
        'title' => 'Mais Cores',
        'description' => 'definir cores para seu site',
    ));
    $wp_customize->add_section('header', array(
        'title' => 'defina aqui mais cores para o layout',
        'panel' => 'descricoes',
        'priority' => 100
    ));


    $wp_customize->add_setting('cor1', array('default' => 'tema planet1'));
    $wp_customize->add_control(
            'controle de cores', array(
        'label' => 'cor 1',
        'section' => 'header',
        'settings' => 'cor1',
        'priority' => 1,
        'type' => 'color'
    ));

    
    $wp_customize->add_setting("cor2",array('default'=>'tema planet1'));
    $wp_customize->add_control("controle de segunda cor", array(
        'label' => 'cor 2',
        'section' => 'header',
        'settings' => 'cor2',
        'priority' => 1,
        'type' => 'color'
    ));
}


define( 'WP_POST_REVISIONS', false );