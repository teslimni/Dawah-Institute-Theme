<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header(); ?>

<div class="wrapper" id="wrapper-index">

  <div id="content" class="container">

      <div class="row">
                 <div class="col-md-8">
                    <?php
                    if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                       <?php if( has_post_thumbnail() ) {
                          echo the_post_thumbnail('full');
                        } ?>
                         <div class="post-entry"><?php the_content(); ?></div>
                         <?php if( get_field('download_link') || get_field('resource_image') || get_field('resource_title')  ): ?>
                            <p><?php the_field('field_name'); ?></p>

                            <div class="row resource_meta">
                                <div class="col img-meta">
                                   <h2 class="download">Download</h2>
                                     <a href="<?php echo the_field('download_link'); ?>"><img src=" <?php the_field('resource_image'); ?>" alt=""></a>
                                </div>
                                <div class="col download-meta">
                                   <h1 class="m-t-3 m-l-3"><a href="<?php echo the_field('download_link'); ?>" target="_blank"><?php echo the_field('resource_title'); ?></a></h1>
                                </div>
                            </div>
                           <?php endif; ?>

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
