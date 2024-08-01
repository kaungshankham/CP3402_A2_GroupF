<?php get_header(); ?>

<main class="container">
    <!-- Enhanced loop with post thumbnails -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
            </div>
        <?php endif; ?>
        <?php the_excerpt(); ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
