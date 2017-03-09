<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dawahinstitute
 */

get_header(); ?>

<div class="container">
  <!-- <div id="primary" class="content-area"> -->

  <main id="main" class="site-main col-xs-12" role="main">

           <div class="home-top row">

              <?php
                $current_category = single_cat_title('', false);
                $args = array(
                     'posts_per_page' => 15,
                     'category_name' => $current_category,
                     'ignore_sticky_posts' => 1,
                 );
                query_posts($args);

                if ( have_posts() ) :  $postcounter = 1; ?>
                 <?php while ( have_posts() ) : the_post();?>


                   <?php get_template_part('template-parts/content', 'category');

                    if ( ($postcounter % 9)  == 0 ) : ?>

                        <div class="col-xs-12">
                            <div class="col-md-10 col-md-offset-1 content-ad text-xs-center">
                                <p>Ethical Reform course registration is now open for all at the Dawah Institute of Nigeria. Join the course now at <a href="#">www.ethicalreform.com</a></p>
                            </div>
                        </div>

                        <?php endif;
                    $postcounter++;
                    endwhile; endif;
              ?>
            </div>
  </main><!-- #main -->
</div>
<!-- .container -->

  <!-- </div>#primary -->
<?php
get_footer();
