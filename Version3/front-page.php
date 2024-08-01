<?php get_header(); ?>
<main class="front-page">
    <div class="container">
        <!-- Hero Image or Slider -->
        <section class="front-hero">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" alt="Hero Image" class="img-fluid">
            <div class="hero-caption">
                <h1>Empowering Education</h1>
                <p>Join our journey towards excellence in education.</p>
            </div>
        </section>

        <!-- Featured Sections -->
        <section class="features">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-award"></i>
                        <h3>Awards and Recognition</h3>
                        <p>Learn about our achievements and industry recognition.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-book-reader"></i>
                        <h3>Programs Offered</h3>
                        <p>Explore our diverse academic programs designed for success.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-users"></i>
                        <h3>Community Impact</h3>
                        <p>Discover how we're making a difference in the community.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
