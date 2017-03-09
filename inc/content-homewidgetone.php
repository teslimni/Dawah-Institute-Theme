<?php

$args = array(
    'posts_per_page' => 1,
    'category_name' => 'faith',
    // 'orderby' => 'rand'
);


$first_cat = new WP_Query($args); ?>

<?php if ($first_cat->have_posts() ) : while ($first_cat->have_posts() ) : $first_cat->the_post(); ?>
   <!--  <div class="cat-item col-xs-12 col-lg-6"> -->
        <div class="col-md-8 col-lg-3 cat-card">
            <div class="card">
               <?php the_post_thumbnail('medium'); ?>

                <div class="card-block">
                    <?php $categories = get_the_category($post->ID); ?>
                   <div class="cat-label"><?php echo esc_html( $categories[0]->name ); ?></div>
                    <h4 class="card-title post-title h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
            </div><!-- .card -->
        </div><!-- .cat-card -->

        <div class="col-md-4 col-lg-3 hidden-sm-down">
            <?php
                if (in_category( array('faith') ) ){ ?>
                    <?php
                    global $post;
                    $args = array(
                        'posts_per_page' => 5,
                        'offset'=> 1,
                        // 'orderby'=> 'rand',
                        'category_name' => 'faith'
                    );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) :
                      setup_postdata($post); ?>
                       <h4 class="h5 post-title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                        </a></h4><br>
                    <?php endforeach;
                    wp_reset_postdata(); ?>

             <?php   } ?>
        </div>

    <!-- </div> -->
    <!-- .cat-item -->
        <?php endwhile;
             wp_reset_postdata();

         endif ?>
