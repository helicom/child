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
            <div class="social-links-footer">
                <p class="twitter-link">
                <a href="http://twitter.com/VESP_official" target="blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/04/twitter.png" alt="twitter" width="32" height="32"/>
                </a>
                </p>
                <p class="facebook-link">
                <a href="http://www.facebook.com/snowvesp" target="blank">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/04/facebook.png" alt="facebook" width="32" height="32"/>
                </a>
                </p>
            </div>
            <div class="copyright-info">
                <p><a href="<?php bloginfo('url'); ?>/policy/">個人情報保護ポリシー</a></p>
                <p>（個人情報担当者:森山）</p>
                <p><a href="<?php bloginfo('url'); ?>/law/">特定商取引に関する法律に基づく表示</a></p>
                <p><a href="<?php bloginfo('url'); ?>/law#howto_cancel_order">返品について</a></p>
                <p>商号名：株式会社プリフィクス</p>
                <p>代表：齋藤俊一</p>
                <p>事務所所在地 : 東京都港区南青山3-18-4-103</p>
                <p>&copy;VESP official online store all rights reserved.</p>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>