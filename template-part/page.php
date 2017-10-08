
<?php while (have_posts()) : the_post(); ?>
    <!-- post -->
    <article class="posts" role="article">
        <!--<h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
        <p><?php the_content(); ?></p>
    </article>
    <!--/post -->
<?php endwhile; ?>