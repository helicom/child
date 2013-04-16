<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
            <?php get_search_form(); ?>
            <div class="category-links">
                <h3 class="widget-title">CATEGORY</h3>
                    <div style="display: block">
                    <a href="<?php bloginfo('url'); ?>/items/jacket"><div class="category-divs">JACKET</div></a>
                    <a href="<?php bloginfo('url'); ?>/items/pants"><div class="category-divs">PANTS</div></a>
                    <a href="<?php bloginfo('url'); ?>/items/gloves"><div class="category-divs">GLOVES</div></a>
                    </div>
                    <div style="display: block">
                    <a href="<?php bloginfo('url'); ?>/items/bag"><div class="category-divs">BAG</div></a>
                    <a href="<?php bloginfo('url'); ?>/items/casual"><div class="category-divs">CASUAL</div></a>
                    <a href="<?php bloginfo('url'); ?>/items/goods"><div class="category-divs">GOODS</div></a>
                    </div>
            </div>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>