<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
            <?php if (is_user_logged_in()) : ?>
            <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e('Logout','sp'); ?>" class="account_logout">
                <?php _e('Logout','sp'); ?>
            </a>
            <?php endif ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>