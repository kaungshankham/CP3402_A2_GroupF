<?php get_header(); ?>
<div class="container">
    <header class="page-header">
        <h1>Archives: <?php single_month_title(' '); ?></h1>
    </header>
    <div class="row">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('thumbnail', ['class' => 'card-img-top']); ?>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
