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


add_filter('show_admin_bar', '__return_false');
register_nav_menu('menu_principal', 'Topo');
add_image_size('monster', 1500, "auto", true);
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

function enable_more_buttons($buttons) {
    $buttons[] = 'hr';
    $buttons[] = 'fontselect';
    $buttons[] = 'sup';
    $buttons[] = 'superscript';
    $buttons[] = 'subscript';
    $buttons[] = 'tablecontrols';
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'styleselect';
    $buttons[] = 'backcolor';
    $buttons[] = 'newdocument';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'charmap';
    $buttons[] = 'hr';
    $buttons[] = 'visualaid';
    // etc, etc... 

    return $buttons;
}

add_filter("mce_buttons", "enable_more_buttons");


/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/



register_sidebar(array(
    "name" => "lateral direita do topo",
    "description" => "lateral direita do topo",
    "id" => "latesquerda",
    "before_widget" => "<div class='col-sm-7 widget'>",
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
    "name" => "rodape",
    "description" => "componentes da home",
    "id" => "rodape",
    "before_widget" => "<div class='col-sm-3 widget'>",
    "after_widget" => "</div>",
));








require_once "includes/meta_Boxe_page_template_landingpage.php";
require_once 'includes/Texto.php';
require_once 'includes/custom_post_home_page_landing.php';
//require_once 'includes/opcoes.php';
