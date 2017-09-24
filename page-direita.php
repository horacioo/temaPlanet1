<?php /* Template Name: página com bloco na direita */ ?>
<?php get_header(); ?>
<div class="row">
    <div class="col-sm-7"><?php get_template_part("template-part/page"); ?></div>
    <div class="col-sm-5 ">
        <div class="anuncios">
            <?php dynamic_sidebar("elemento da direita") ?>
        </div>
    </div>
</div>
<?php
get_footer()?>