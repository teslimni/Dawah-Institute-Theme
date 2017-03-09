<?php
    /**
     * For full documentation, please visit: http://docs.reduxframework.com/
     * For a more extensive sample-config file, you may look at:
     * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_teslim";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'opt_name' => 'redux_teslim',
        'use_cdn' => FALSE,
        'display_name' => 'DIN Settings',
        'display_version' => '1.0.0',
        'page_title' => 'DIN Settings',
        'update_notice' => TRUE,
        'admin_bar' => TRUE,
        'menu_type' => 'menu',
        'menu_title' => 'DIN Settings',
        'allow_sub_menu' => TRUE,
        'page_parent_post_type' => 'your_post_type',
        'customizer' => TRUE,
        'default_mark' => '*',
        'hints' => array(
            'icon_position' => 'right',
            'icon_color' => 'lightgray',
            'icon_size' => 'normal',
            'tip_style' => array(
                'color' => 'light',
            ),
            'tip_position' => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect' => array(
                'show' => array(
                    'duration' => '500',
                    'event' => 'mouseover',
                ),
                'hide' => array(
                    'duration' => '500',
                    'event' => 'mouseleave unfocus',
                ),
            ),
        ),
        'output' => TRUE,
        'output_tag' => TRUE,
        'settings_api' => TRUE,
        'cdn_check_time' => '1440',
        'compiler' => TRUE,
        'page_permissions' => 'manage_options',
        'save_defaults' => TRUE,
        'show_import_export' => TRUE,
        'database' => 'options',
        'transient_time' => '3600',
        'network_sites' => TRUE,
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/teslimni',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/adeteslim',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/adeteslim',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/teslim',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux_theme' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux_theme' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux_theme' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux_theme' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux_theme' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Home Settings', 'din-option' ),
        'id'     => 'home-settings',
        'desc'   => __( 'Set the home page options here.', 'din-option' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'optin',
                'type'     => 'text',
                'title'    => __( 'The Cover Image for the Free Book on Homepage', 'din-option' ),
                'desc'     => __( 'Put the url of the cover for the opt-in gift here.', 'din-option' ),
                'default'  => 'http://din.ietonline.net/wp-content/uploads/2017/02/bokotestcover.png'
            ),
            array(
                'id'       => 'news-event',
                'type'     => 'text',
                'title'    => __( 'News Sections', 'din-option' ),
                'desc'     => __( 'Give the news section of the site a title here.', 'din-option' ),
                'default'  => __('News and Events'),
            ),
            array(
                'id'       => 'newsletter-tab',
                'type'     => 'textarea',
                'title'    => __('Newsletter Tab Section'),
                'desc'     => __('Encourage your reader to give you their email here.'),
                'default'  => __('Sign up for our newsletter to benefit from our years of experience in research.'),
            ),
            array(
                'id'       => 'download-tab',
                'type'     => 'textarea',
                'title'    => __('Download Tab Section'),
                'desc'     => __('Tell your readers what this section is meant for in a short sentence.'),
                'default'  => __('These resources below are all yours for free:'),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer Section', 'din-option' ),
        'id'     => 'footer-settings',
        'desc'   => __( 'Set the footer widget titles here.', 'din-option' ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'footer-abt',
                'type'     => 'text',
                'title'    => __( 'Footer About Heading', 'din-option' ),
                'desc'     => __( 'The heading for the about section of your footer .', 'din-option' ),
                'default'  => __('About'),
            ),
            array(
                'id'       => 'company-id',
                'type'     => 'text',
                'title'    => __('Footer Colophon Section'),
                'desc'     => __('Insert the name of your company to appear after the copyright date.'),
                'default'  => __('Dawah Institute of Nigeria.'),
            )
        )
    ));


    // Redux::setSection( $opt_name, array(
    //     'title' => __( 'Basic Fields', 'din-option' ),
    //     'id'    => 'basic',
    //     'desc'  => __( 'Basic fields as subsections.', 'din-option' ),
    //     'icon'  => 'el el-home'
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text', 'din-option' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'din-option' ) . '<a href="http://docs.reduxframework.com/core/fields/text/" target="_blank">http://docs.reduxframework.com/core/fields/text/</a>',
    //     'id'         => 'opt-text-subsection',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'text-example',
    //             'type'     => 'text',
    //             'title'    => __( 'Text Field', 'din-option' ),
    //             'subtitle' => __( 'Subtitle', 'din-option' ),
    //             'desc'     => __( 'Field Description', 'din-option' ),
    //             'default'  => 'Default Text',
    //         ),
    //     )
    // ) );

    // Redux::setSection( $opt_name, array(
    //     'title'      => __( 'Text Area', 'din-option' ),
    //     'desc'       => __( 'For full documentation on this field, visit: ', 'din-option' ) //. '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>'
    //     ,
    //     'id'         => 'opt-textarea-subsection',
    //     'subsection' => true,
    //     'fields'     => array(
    //         array(
    //             'id'       => 'textarea-example',
    //             'type'     => 'textarea',
    //             'title'    => __( 'Text Area Field', 'din-option' ),
    //             'subtitle' => __( 'Subtitle', 'din-option' ),
    //             'desc'     => __( 'Field Description', 'din-option' ),
    //             'default'  => 'Default Text',
    //         ),
    //     )
    //) );

    /*
     * <--- END SECTIONS
     */
