<?php
/**
 * The template for displaying all resources posts.
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="wrapper-index">

  <div id="content" class="container">

      <div class="row">
                 <div class="col-md-8">
                    <?php
                    $args = array('post_type=resource');
                    $download = new WP_Query($args);
                    if ( $download->have_posts() ) : while( $download->have_posts() ) : $download->the_post(); ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                       <?php if( has_post_thumbnail() ) {
                          echo the_post_thumbnail('full');
                        } ?>
                         <div class="post-entry">
                           <?php the_content(); ?>
                           <?php the_field('resource_image'); ?>
                         </div>

                         <?php wp_link_pages(); ?>
                         <?php the_tags(); ?>

                    <?php endwhile; ?>
                    <div class="nav-box">
                        <div class="prev"><?php previous_post_link(); ?></div>
                        <div class="next"><?php next_post_link(); ?></div>
                    </div>
                    <hr>
                    <?php comments_template(); ?>
                     <?php else : ?>
                        <?php get_template_part('post', 'not-found'); ?>
                     <?php endif; ?>

                       </article>
                     </div>

                   <?php get_sidebar(); ?>
                </div>
           </div><!-- #primary -->


      </div><!-- .row -->
  </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
