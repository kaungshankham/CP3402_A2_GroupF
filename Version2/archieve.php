<?php get_header(); ?>
<div class="container">
    <header class="archive-header">
        <h1 class="archive-title">Archive: <?php the_archive_title(); ?></h1>
    </header>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; else: ?>
        <p>No posts found in this archive.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
