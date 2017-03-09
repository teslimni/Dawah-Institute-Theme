<?php
/**
 * Unit Template Name: Full-width course unit
 *
 * Be sure to use the "Unit Template Name:" in the header.
 * To display the course unit content, be sure to inclue the loop.
 */

get_header(); ?>


            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
                <?php comments_template( '', true ); ?>
            <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
