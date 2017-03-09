<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dawahinstitute
 */
?>

<div class="col-xs-12 col-lg-4 recent-articles aside">


    <?php get_template_part('template-parts/search-form'); ?>
    <aside id="secondary" class="widget-area primary-bar" role="complementary">
        <h4 class="text-xs-center m-b-1">More Articles</h4>

        <?php //dynamic_sidebar( 'sidebar-1' ); ?>
        <?php $args = array(
                        'post_type' => 'post',
                        'order' => 'DESc',
                        'posts_per_page' => 5,
                        // 'post_mime_type' => 'image/jpg',
                        'ignore_sticky_posts' => 1,
                        'offset' => 5
        ); ?>

        <?php

        $sidecontent = new WP_Query($args); ?>

        <?php
        if ( $sidecontent->have_posts() ) : while ( $sidecontent->have_posts() ) : $sidecontent->the_post();  ?>
                <ul class="media-list">
                    <li class="media">
                        <div class="media-left">
                            <?php
                                $size = array(150, 100);
                                $class = array( 'class' => 'media-object' );
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail( 'thumbnail' );
                                }  ?>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading post-title h5">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <a href="<?php the_permalink(); ?>">Read more</a>
                        </div>
                    </li>
                </ul>

            <?php endwhile;
                wp_reset_postdata();

            endif; ?>
            <?php if( is_single() ) {
                get_template_part('template-parts/content-tabbed');
            } ?>
     </aside><!-- #secondary -->
     <?php if ( is_active_sidebar( 'sidebar-top' ) ) :  ?>
         <?php dynamic_sidebar('sidebar-top'); ?>
     <?php  endif; ?>
</div>
