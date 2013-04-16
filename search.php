<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header>
			<?php twentytwelve_content_nav( 'nav-above' ); ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="each-result">
                    <div class="search-imagecol">
                    <?php if(wpsc_the_product_thumbnail()) :?>
                        <a href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">
                            <img class="product_image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(); ?>"/>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>">
                            <img class="no-image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php esc_attr_e( 'No Image', 'wpsc' ); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo WPSC_CORE_THEME_URL; ?>wpsc-images/noimage.png" width="<?php echo get_option('product_image_width'); ?>" height="<?php echo get_option('product_image_height'); ?>" />
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="search-productcol">
                        <h2><a class="wpsc_product_title" href="<?php echo esc_url( wpsc_the_product_permalink() ); ?>"><?php echo wpsc_the_product_title(); ?></a></h2>
                    <?php wpsc_the_product_price_display(); ?>
                    </div>
<!--				--><?php //get_template_part( 'content', get_post_format() ); ?>
                </div>
			<?php endwhile; ?>
			<?php twentytwelve_content_nav( 'nav-below' ); ?>
		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
<!--					<p>--><?php //_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?><!--</p>-->
                    <p><?php _e( 'ご指定の検索条件に合うアイテムがありませんでした。他のキーワードでもう一度検索してみてください。', 'twentytwelve' ); ?></p>
                    <?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer(); ?>