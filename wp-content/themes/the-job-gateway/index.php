<?php get_header(); ?>

<main class="container py-5">
    <div class="row">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <article class="card h-100 shadow-sm">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                            </a>
                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>
                            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </div>

                        <div class="card-footer text-muted">
                            <small>Posted on <?php echo get_the_date(); ?> by <?php the_author(); ?></small>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>

            <div class="col-12">
                <nav class="pagination-wrapper">
                    <?php the_posts_pagination([
                        'mid_size'  => 2,
                        'prev_text' => __('« Prev', 'the-job-gateway'),
                        'next_text' => __('Next »', 'the-job-gateway'),
                        'class'     => 'pagination justify-content-center',
                    ]); ?>
                </nav>
            </div>

        <?php else : ?>
            <div class="col-12">
                <p class="text-center">No posts found.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>