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
            <div class="logout-div"></div>
                <?php if (is_user_logged_in()) : ?>
                <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e('Logout','sp'); ?>" class="account_logout">
                    <?php _e('Logout','sp'); ?>
                </a>
                <?php endif ?>
            </div>
            <div class="social-links-footer">
                <a href="http://twitter.com/VESP_official" target="blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/04/twitter.png" alt="twitter" width="32" height="32"/>
                </a>
                <a href="http://www.facebook.com/snowvesp" target="blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/04/facebook.png" alt="facebook" width="32" height="32"/>
                </a>
            </div>
            <div class="copyright-info">
                <p>商号名：株式会社プリフィクス 代表：齋藤俊一</p>
                <p>個人情報保護ポリシー 個人情報担当者:森山</p>
                <p>特定商取引に関する法律に基づく表示</p>
                <p>返品について</p>
                <p>事務所所在地 : 東京都港区南青山3-18-4-103</p>
                <p>&copy;VESP official online store all rights reserved.</p>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>