<hr id="separacao_topo">


<div class="row">
    <?php
    $text = new Texto();
    $args = array('post_type' => 'post');
    $my_posts = get_posts($args);
    foreach ($my_posts as $post): setup_postdata($post);
        $dados = get_post_meta(get_the_ID());
        $id = get_the_ID();
        $thumb = get_the_post_thumbnail($post, "medium",array("class"=>"monster"));
        $cores = get_post_meta($id);
        $color = $cores['fundo_pagina'][0];
        ?>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="blog_lista">
                <div class="conteudo_home" style="background-color:<?php echo $color ?> ">
                    <p class="centro"><h2><?php echo get_the_title(); ?></h2></p>
                    <p><?php echo $thumb; ?></p>
                    <?php the_excerpt(); //echo $text->converteTexto($conteudo)->texto_pronto;  ?>
                    <a href="<?php echo get_edit_post_link($id); ?>">editar</a>
                </div>
            </div>
        </div>


        <?php
    endforeach;
    ?>
</div>