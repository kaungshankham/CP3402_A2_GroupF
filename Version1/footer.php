<?php get_header(); ?>
<div class="container">
    <h2>Archive</h2>
    <!-- Loop through posts -->
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
