<hr>
<?php
//$text = new Texto();
$args = array('post_type' => 'page','orderby'=>'menu_order','post_parent'=>'0');
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
                <p><?php echo $thumb; ?></p>
                <?php the_content(); //echo $text->converteTexto($conteudo)->texto_pronto;  ?>
               <?php if(is_admin()){?><a href="<?php echo get_edit_post_link($id); ?>">editar</a><?php }?>
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