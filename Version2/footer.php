<footer id="footer" class="py-5">
        <!-- Dynamic footer content using widgets -->
        <?php if(is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
        <?php endif; ?>
        <div class="container text-center">
            <!-- Existing footer content -->
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
