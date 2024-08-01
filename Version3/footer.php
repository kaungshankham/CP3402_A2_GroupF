<footer id="footer" class="py-5">
        <!-- Fully widgetized footer -->
        <div class="container">
            <?php if(is_active_sidebar('footer-1')) : ?>
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
            <!-- Additional dynamic areas -->
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
