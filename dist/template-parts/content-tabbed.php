<?php global $redux_teslim; ?>

  <ul class="nav nav-tabs resource-tabs">
      <li class="nav-item text-xs-center">
          <a href="#newsletter" class="nav-link active" data-toggle="tab">
              <h5>Newsletter</h5>
          </a>
      </li>
      <li class="nav-item text-xs-center">
          <a href="#downloads" class="nav-link" data-toggle="tab">
              <h5>Downloads</h5>
          </a>
      </li>
  </ul>
  <div class="card tab-content">
      <div class="tab-pane active" id="newsletter" role="tabpanel">
          <p><?php echo $redux_teslim['newsletter-tab']; ?></p>
          <form action="">
              <fieldset class="form-group">
                  <input type="text" class="form-control" id="name" placeholder="Name">
              </fieldset>
              <fieldset class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Email">
              </fieldset>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          <div class="ad-block m-t-3">
              <img src="<?php echo get_stylesheet_directory_uri() . '/img/remove/sidebar-add.png'; ?>" alt="">
          </div>

      </div><!-- #newsletter-->
          <div class="tab-pane downloads" id="downloads" role="tabpanel">
              <p>The resources below are all yours for free:
              </p>
              <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
               <?php if( get_field('download_link') || get_field('resource_image') || get_field('resource_title')  ): ?>
                <ul class="media-list">
                  <li class="media">
                    <div class="media-left adjusted-img">
                       <img src="<?php the_field('resource_image'); ?>" alt="">
                    </div>
                    <div class="media-body">
                        <h4><a href="<?php the_field('download_link'); ?>"><?php the_field('resource_title'); ?></a></h4>
                    </div>
                  </li>
                </ul>
               <?php endif ?>

              <?php endwhile; endif; ?>
          </div><!-- #downloads-->

  </div><!-- .tab-content -->
  <?php if ( is_active_sidebar( 'home-bottom' ) ) : ?>
    <ul id="home-bottom" class="list-unstyled">
        <?php dynamic_sidebar( 'home-bottom' ); ?>
    </ul>
<?php endif; ?>

