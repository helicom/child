<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<?php //get_sidebar(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">
        <div class="newsUpdate">
            [ news ]
        </div>
        <div class="newsList">
            <?php if(have_posts()): ?>
            <table>
                <?php while(have_posts()):the_post(); ?>
                    <tr>
                        <td><?php the_time('Y/m/d'); ?></td>
                        <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="photoGal">
            [ photo gallery ]
        </div>
        <div id="slide-wrapper">
            <p id="box1" class="boxes"><img class="box1img" src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide01.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide02.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide03.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide04.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide05.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide06.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide07.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide08.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide09.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide10.jpg" alt="" /></p>
            <p class="boxes"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/slide11.jpg" alt="" /></p>
        </div>
        <div id="for-min-height">
            <p class="boxes2"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2013/06/w-01.png" alt="" /></p>
        </div>
        <div class="mover">
<!--            <p class="prevSlide">←prev</p>-->
<!--            <p class="nextSlide">next→</p>-->
        </div>
    </div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>