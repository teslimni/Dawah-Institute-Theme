<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header(); ?>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
              <img class="gift" src="<?php echo $redux_teslim['optin']; ?>" alt="">
            </div>
              <div class="col-md-6 opt-in">
                 <?php do_action('opt_in'); ?>
              </div>
            </div>
        </div>
      </div>
<div class="wrapper" id="wrapper-index">

  <div id="content" class="container">


      <div class="row">

  	       <div id="primary" class="col-md-12 col-lg-8 content-area card-hook">
             		<?php get_template_part('template-parts/carousel'); ?>

                 <div class="card-deck adjust-deck m-t-2">
                    <?php
                    query_posts("posts_per_page=3&ignore_sticky_posts=1");
                    if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

                     <div class="card">
                       <?php if( has_post_thumbnail() ) {
                          the_post_thumbnail();
                        } ?>
                       <div class="card-block">
                         <h4 class=" h5 card-title post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                         <p class="card-text"><?php the_excerpt(); ?></p>

                       </div>
                     </div>

                    <?php endwhile;
                      wp_reset_postdata();
                     endif; ?>
                </div>
  	       </div><!-- #primary -->

           <?php get_sidebar(); ?>

      </div><!-- .row -->

      <div class="row home-middle m-t-2">

          <?php get_template_part('inc/content-homewidgetone', get_post_format()); ?>
          <?php get_template_part('inc/content-homewidgettwo', get_post_format()); ?>

      </div><!-- .home-middle -->

      <div class="row home-middle card-hook m-t-2">

          <?php get_template_part('inc/content-homewidgetthree', get_post_format()); ?>
          <?php get_template_part('inc/content-homewidgetfour', get_post_format()); ?>

      </div><!-- .home-middle -->

      <div class="row home-bottom m-t-2">
          <div class="col-xs-12 col-lg-8 news">
              <h2 class="text-xs-center bg-faded p-t-1 p-b-1"><?php echo $redux_teslim['news-event']; ?></h2>

              <ul class="media-list">
                  <?php
                     query_posts(
                          array(
                              'posts_per_page' => 6,
                              'ignore_sticky_posts' => 1
                          )
                      );

                     if (have_posts() ) : while( have_posts() ) : the_post();
                  ?>
                          <li class="media bordered-btm">
                              <div class="media-left">
                                <?php the_post_thumbnail('thumbnail'); ?>
                              </div>
                              <div class="media-body">
                                  <h4 class="media-heading post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                  <p><?php the_excerpt(); ?></p>
                              </div>
                          </li>
                  <?php
                      endwhile;

                      // Reset Query
                      wp_reset_query();

                      endif;
                   ?>
              </ul>

          </div>

          <?php get_sidebar('bottom'); ?>
      </div><!-- .row .home-bottom -->

  </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer();
