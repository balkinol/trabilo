<?php 
    require_once('class-wp-bootstrap-navwalker.php');

    // Theme Support
    function trabilo_theme_setup(){
        // Nav Walker
        register_nav_menus( array(
            'primary' => __( 'Primary Menu'),
            'footer' => __( 'Footer Menu'),
        ) );

        add_theme_support('post-thumbnails');
    }

    add_action( 'after_setup_theme', 'trabilo_theme_setup' );

    // Widgets
    function init_widgets($id){
        register_sidebar(array(
            'name'  => 'Sidebar',
            'id'    => 'sidebar',
            'before_widget' => '<div class="related-post">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }

    add_action('widgets_init', 'init_widgets');

    // Excerpt
    function set_excerpt_length(){
        return 20;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

    // The Archive Title

    add_filter( 'get_the_archive_title', function ($title) {    
        if ( is_category() ) {    
                $title = single_cat_title( '', false );    
            } elseif ( is_tag() ) {    
                $title = single_tag_title( '', false );    
            } elseif ( is_author() ) {    
                $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
            } elseif ( is_tax() ) { //for custom post types
                $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
            } elseif (is_post_type_archive()) {
                $title = post_type_archive_title( '', false );
            }
        return $title;    
    });
    
    // Customizer 
    require get_template_directory(). '/inc/customizer.php';

