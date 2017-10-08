<hr id="separacao_topo">
<?php
$text = new Texto();
$args = array('post_type' => 'home');
$my_posts = get_posts($args);
foreach ($my_posts as $post): setup_postdata($post);
    $dados = get_post_meta(get_the_ID());
    $id = get_the_ID();
    $thumb = get_the_post_thumbnail($post, "full", array("class" => "monster"));
    $cores = get_post_meta($id);
    $color = $cores['fundo_pagina'][0];
    ?>

    <div class="row">
        <div class="col-lg-12 home">
            <div class="conteudo_home" style="background-color:<?php echo $color ?> ">
                <!--<p class="centro"><h2><?php echo get_the_title(); ?></h2></p> -->
                <p><?php echo $thumb; ?></p>
                <?php the_content(); //echo $text->converteTexto($conteudo)->texto_pronto;  ?>
                <a href="<?php echo get_edit_post_link($id); ?>">editar</a>
            </div>
        </div>
    </div>


    <?php
endforeach;
?>
<br><br>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-xl-12"><?php dynamic_sidebar("novo elemento da home"); ?></div>
    </div>
</div>