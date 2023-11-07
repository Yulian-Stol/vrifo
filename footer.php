<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer__inner">
                    <?php if (is_active_sidebar('footer')) : ?>
                        <?php dynamic_sidebar('footer'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>