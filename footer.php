<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dawahinstitute
 */

global $redux_teslim;
?>
	</div><!-- #content .row -->
</div><!-- #page .container -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <img class="center-block footer-logo" src="<?php echo get_stylesheet_directory_uri() . '/img/din-project_85.png'; ?>" alt="">
                </div>
                <div class="col-xs-12 col-md-3 footer-block">
                    <h2 class="text-uppercase"><?php echo $redux_teslim['footer-abt']; ?></h2>
                    <ul>
                        <li class="list-unstyled"><a href="#">The Dawah Institute</a></li>
                        <li class="list-unstyled"><a href="#">Our Mission</a></li>
                        <li class="list-unstyled"><a href="#">Our Programs</a></li>
                        <li class="list-unstyled"><a href="#">Our Sites</a></li>
                        <li class="list-unstyled"><a href="#">Testimonials</a></li>
                    </ul>
                    <?php if( is_active_sidebar('footer-one') ) : ?>
                        <?php dynamic_sidebar('footer-one'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-12 col-md-3 footer-block">
                    <h2 class="text-uppercase">
                        Our Partners
                    </h2>
                    <ul>
                        <li class="list-unstyled"><a href="#">Africa</a></li>
                        <li class="list-unstyled"><a href="#">America</a></li>
                        <li class="list-unstyled"><a href="#">Asia</a></li>
                        <li class="list-unstyled"><a href="#">Europe</a></li>
                        <li class="list-unstyled"><a href="#">Middle East</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-3 footer-block">
                    <h2 class="text-uppercase">
                        Contact
                    </h2>
                    <address>
                        <strong>Dawah Institute of Nigeria</strong><br>
                        IW 2 Ilmi Avenue<br>
                        Old Airport Quarters<br>
                        PMB 229, Minna<br>
                        Niger State, Nigeria<br>
                        email: dawahinstitute(at)gmail.com
                    </address>
                </div>
            </div><!-- .row -->
            <hr>
            <div class="row">
                <div class="col-xs-12">
                    <p class="text-muted text-xs-center footer-copyright">
                        Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo bloginfo('url'); ?>"><?php echo $redux_teslim['company-id']; ?></a> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
