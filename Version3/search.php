<?php get_header(); ?>
<div class="container">
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>
    <?php if(have_posts()) : ?>
        <div class="row">
            <?php while(have_posts()) : the_post(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No results found. Try a different search?</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
