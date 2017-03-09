<div id="carousel-notification" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-notification" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-notification" data-slide-to="1"></li>
        <li data-target="#carousel-notification" data-slide-to="2"></li>
        <li data-target="#carousel-notification" data-slide-to="3"></li>
        <li data-target="#carousel-notification" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
            <?php
            $i = 1;
            query_posts('posts_per_page=5'); ?>
            <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
                <?php if ($i==1) {
                     if ( !has_post_thumbnail() ) {
                        continue;
                        } else { ?>
                        <div class="carousel-item active">
                          <?php  echo the_post_thumbnail('full'); ?>
                            <h4 class="carousel-caption">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                        </div>
                          <?php } ?>
                    <?php } else {
                         if (!has_post_thumbnail()) {
                            continue;
                            } else { ?>
                               <div class="carousel-item">
                          <?php  echo the_post_thumbnail('full'); ?>
                            <h4 class="carousel-caption">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                        </div>
                           <?php } ?>
                       <?php } ?>
                <?php  $i++;
                endwhile; endif; ?>
            <?php wp_reset_query(); ?>
    </div>
</div>
