<?php
add_action('add_meta_boxes', 'landing_page_function_meta_boxes');

function landing_page_function_meta_boxes() {
    add_meta_box(
            'link', //ID
            'cores do site', //Título
            'funcao_que_vai_criar_meta_boxe', //callback
            'home_page', //Post Type
            'side', //Posição
            'default' //Prioridade
    );
}



function funcao_que_vai_criar_meta_boxe() {
    global $post;
    $cor = get_post_meta($post->ID, "fundo_pagina"); // $carga_horaria = get_post_meta($post->ID, 'carga_horaria', true);
    ?>
    <input type="color" style=""  name="cor_de_fundo" required="required" value="<?php echo $cor[0]; ?>"> 
    <?php
}






add_action('save_post', 'salva_link');
function salva_link() {
    global $post;
    $imagem = FiltraImagem();
    update_post_meta($post->ID, 'fundo_pagina', sanitize_text_field($_POST['cor_de_fundo']));
    //update_post_meta($post->ID, 'thumb', sanitize_text_field($imagem));
}



function FiltraImagem() {
    $imagem = $_POST['thumb'];
    $x = explode('<img src=\"', $imagem);
    $x2 = explode("\"", $x[1]);
    var_dump($x2[0]);
    $imagem = str_replace('"', "", $x2[0]);
    return $imagem;
}







