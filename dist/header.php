<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

        <nav class="navbar navbar-dark bg-primary site-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
            <div class="container">
                <div class="navbar-header">
                    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                      <button class="navbar-toggle hidden-sm-up" type="button" data-toggle="collapse" data-target=".exCollapsingNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Your site title as branding in the menu -->
                        <?php if (!has_custom_logo()) { ?>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            	<?php bloginfo( 'name' ); ?>
                            </a>
                        <?php } else { the_custom_logo(); } ?><!-- end custom logo -->
                </div>

                <!-- The WordPress Menu goes here -->
                <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-toggleable-xs exCollapsingNavbar',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                ); ?>

            </div> <!-- .container -->

        </nav><!-- .site-navigation -->
        <?php if( is_category() ) : ?>
                <div class="cat-box">
                    <div class="cat-description">
                        <?php echo category_description(); ?>
                    <p class="btn btn-primary-outline cat-tag"><?php single_cat_title('', true); ?></p>
                    </div>
                </div>
        <?php endif; ?>
    </div><!-- .wrapper-navbar end -->






