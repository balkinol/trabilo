<?php
    function trabilo_customize_register( $wp_customize ) {

        // Header
        $wp_customize->add_section( 'header' , array(
            'title'      => __( 'Header', 'trabilo' ),
            'priority'   => 130,
        ) );

        // Navbar Brand

        $wp_customize->add_setting( 'header_navbar_brand' , array(
            'default'   => get_bloginfo('template_directory').'/img/Trabilo.png', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_navbar_brand', array(
            'label'    => __('Header Navbar Brand', 'trabilo'),
            'section'  => 'header',
            'settings' => 'header_navbar_brand',
            'priority' => 1
        )));

        // Social Icon

        $wp_customize->add_section( 'social_icon' , array(
            'title'      => __( 'Social Icon', 'trabilo' ),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'social_icon_one' , array(
            'default'   => get_bloginfo('template_directory').'/img/FACEBOOK.png', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social_icon_one', array(
            'label'    => __('Social Icon One', 'trabilo'),
            'section'  => 'social_icon',
            'settings' => 'social_icon_one',
            'priority' => 2
        )));

        $wp_customize->add_setting( 'social_icon_two' , array(
            'default'   => get_bloginfo('template_directory').'/img/IG.png', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social_icon_two', array(
            'label'    => __('Social Icon Two', 'trabilo'),
            'section'  => 'social_icon',
            'settings' => 'social_icon_two',
            'priority' => 2
        )));

        // Carousel
        $wp_customize->add_section( 'carousel' , array(
            'title'      => __( 'Carousel', 'trabilo' ),
            'priority'   => 130,
        ) );

        // One

        $wp_customize->add_setting( 'carousel_one' , array(
            'default'   => get_bloginfo('template_directory').'/img/S1.jpg', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_one', array(
            'label'    => __('Carousel One', 'trabilo'),
            'section'  => 'carousel',
            'settings' => 'carousel_one',
            'priority' => 1
        )));

        // Two

        $wp_customize->add_setting( 'carousel_two' , array(
            'default'   => get_bloginfo('template_directory').'/img/S2.jpg', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_two', array(
            'label'    => __('Carousel Two', 'trabilo'),
            'section'  => 'carousel',
            'settings' => 'carousel_two',
            'priority' => 2
        )));

        // Three

        $wp_customize->add_setting( 'carousel_three' , array(
            'default'   => get_bloginfo('template_directory').'/img/S3.jpg', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_three', array(
            'label'    => __('Carousel Three', 'trabilo'),
            'section'  => 'carousel',
            'settings' => 'carousel_three',
            'priority' => 3
        )));

        // Sponsored One

        $wp_customize->add_setting( 'sponsored_one' , array(
            'default'   => get_bloginfo('template_directory').'/img/Productive.jpg', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sponsored_one', array(
            'label'    => __('Sponsored One', 'trabilo'),
            'section'  => 'carousel',
            'settings' => 'sponsored_one',
            'priority' => 4
        )));

        // Sponsored Twp

        $wp_customize->add_setting( 'sponsored_two' , array(
            'default'   => get_bloginfo('template_directory').'/img/SPONSORED-BLOG2.jpg', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sponsored_two', array(
            'label'    => __('Sponsored Two', 'trabilo'),
            'section'  => 'carousel',
            'settings' => 'sponsored_two',
            'priority' => 5
        )));

         // Sidebar
         $wp_customize->add_section( 'sidebar' , array(
            'title'      => __( 'Sidebar', 'trabilo' ),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'sidebar_banner_one' , array(
            'default'   => get_bloginfo('template_directory').'/img/banner1.png', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sidebar_banner_one', array(
            'label'    => __('Sidebar Banner One', 'trabilo'),
            'section'  => 'sidebar',
            'settings' => 'sidebar_banner_one',
            'priority' => 1
        )));

        $wp_customize->add_setting( 'sidebar_banner_two' , array(
            'default'   => get_bloginfo('template_directory').'/img/banner2.png', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sidebar_banner_two', array(
            'label'    => __('Sidebar Banner Two', 'trabilo'),
            'section'  => 'sidebar',
            'settings' => 'sidebar_banner_two',
            'priority' => 2
        )));

        // Footer
        $wp_customize->add_section( 'footer' , array(
            'title'      => __( 'Footer', 'trabilo' ),
            'priority'   => 130,
        ) );

        // Navbar Brand

        $wp_customize->add_setting( 'footer_logo' , array(
            'default'   => get_bloginfo('template_directory').'/img/logo-2.png', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
            'label'    => __('Footer Logo Brand', 'trabilo'),
            'section'  => 'footer',
            'settings' => 'footer_logo',
            'priority' => 1
        )));

          // Page Banner
          $wp_customize->add_section( 'page_banner' , array(
            'title'      => __( 'Page Banner', 'trabilo' ),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'page_banner_header' , array(
            'default'   => get_bloginfo('template_directory').'/img/banner3.png', 'trabilo',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'page_banner_header', array(
            'label'    => __('Page Banner Header', 'trabilo'),
            'section'  => 'page_banner',
            'settings' => 'page_banner_header',
            'priority' => 1
        )));
     }
     add_action( 'customize_register', 'trabilo_customize_register' );