<?php get_header(); ?>
<div class="container">
    <?php while(have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <span class="post-date"><?php the_date(); ?></span> |
                    <span class="post-author"><?php the_author_posts_link(); ?></span>
                </div>
            </header>
            <div class="entry-content">
                <?php if(has_post_thumbnail()): ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
            <footer class="entry-footer">
                <div class="post-categories">
                    <strong>Categories:</strong> <?php the_category(', '); ?>
                </div>
                <div class="post-tags">
                    <?php the_tags('<strong>Tags:</strong> ', ', ', ''); ?>
                </div>
            </footer>
        </article>
        <?php
            // If comments are open or there is at least one comment, load up the comment template.
            if(comments_open() || get_comments_number()) :
                comments_template();
            endif;
        ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
