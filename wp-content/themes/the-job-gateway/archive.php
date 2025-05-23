<?php get_header(); ?>

<main>
    <h1><?php the_archive_title(); ?></h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
    <?php endwhile;

        the_posts_navigation();
    else :
        echo '<p>No posts found in this archive.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>