<?php

add_action('customize_register', 'twtema_decricoes_do_header');

function twtema_decricoes_do_header($wp_customize) {
    // adiciona um painel



    $wp_customize->add_panel('twtema_descricoes', [
        'priority' => 800,
        'theme_supports' => '',
        'title' => 'Mais Cores',
        'description' => 'Aqui você vai escolher as cores do rodapé',
    ]);










    // adiciona uma sessão
    $wp_customize->add_section('twtema_descricoes_header', [
        'title' => 'defina aqui mais cores para o layout',
        'panel' => 'twtema_descricoes',
        'priority' => 10
    ]);

    // Adiciona setting
    $wp_customize->add_setting('twtema_descricoes-header-titulo', [
        'default' => 'Tema Treinaweb3',
    ]);
    // Adicionar control
    $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize, 'twtema_descricoes_header_control', [
        'label' => 'Título do tema',
        'section' => 'twtema_descricoes_header',
        'settings' => 'twtema_descricoes-header-titulo',
        'type' => 'color'
            ]
            )
    );













    $wp_customize->add_setting('corTexto_rodape', [
        'default' => 'Tema Treinaweb3',
    ]);
    $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize, 'cor_do_texto', [
        'label' => 'cor do texto do rodape',
        'section' => 'twtema_descricoes_header',
        'settings' => 'corTexto_rodape', 
        'type' => 'color'
            ]
            )
    );
   
}
