<?php while (have_posts()) : the_post(); ?>
    <!-- post -->
    <article class="posts" role="article">
        <p><?php the_content(); ?></p>
    </article>
    <!--/post -->
<?php endwhile; ?>