<?php
    function agency_scripts(){
       // wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('style',get_stylesheet_uri());
        wp_enqueue_script('wp-browser',get_template_directory_uri().'/assets/js/scripts.js');
        wp_enqueue_script('wp-browser',get_template_directory_uri().'/my.js');
        wp_enqueue_script('wp-browser',get_template_directory_uri().'/owl-carousel/owl.carousel.min.js');
        wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/owl-carousel/assets/owl.carousel.min.css');
        wp_enqueue_style('owl-css',get_template_directory_uri().'/owl-carousel/assets/owl.theme.default.min.css');

        
        wp_enqueue_script('jquery');
        
    }
    add_action('wp_enqueue_scripts','agency_scripts');

    function agency_theme_setup(){
        add_theme_support('custom-logo');
        // Add theme menu support in our theme 
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'mytheme' ),
            // 'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
        ) );
        add_theme_support('title-tag'); // this line will be used to add title in our wordpress header
        add_theme_support('post-thumbnails'); // this function is used to add post thumbnail in our theme
        add_theme_support('automatic-feed-links');  /// for wordpress rss feed for different categories
        add_image_size('home-featured',640,400,array('center','center'));
        // $args=array( 
        //     'default-image'=>get_template_directory_uri().'/assets/images/reason.PNG',
        //     'default-text-color'=>'000',
        //     'width'=>1920,
        //     'height'=>400,
        //     'flex-width'=>true,
        //     'flex-height'=>true,
        // );
        // add_theme_support('custom-header',$args);
    }
    add_action('after_setup_theme','agency_theme_setup');
    function agency_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Logo-1', 'theme_name' ),
            'id'            => 'logo-1',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Logo-2', 'theme_name' ),
            'id'            => 'logo-2',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Logo-3', 'theme_name' ),
            'id'            => 'logo-3',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Logo-4', 'theme_name' ),
            'id'            => 'logo-4',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
     
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar-1', 'theme_name' ),
            'id'            => 'footer-1',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar-2', 'theme_name' ),
            'id'            => 'footer-2',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar-3', 'theme_name' ),
            'id'            => 'footer-3',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
        
    }
    add_action('widgets_init','agency_widgets_init');
    /**
     * Filter the except length to 20 words.
     *
     * @param int $length Excerpt length.
     * @return int (Maybe) modified excerpt length.
     */
    function wpdocs_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    
    
    //inclde customizer
    require get_template_directory().'/inc/portfolio.php';
    require get_template_directory().'/inc/about.php';
    require get_template_directory().'/inc/team.php';


    //require get_template_directory().'/inc/customize.php';





    
    //require get_template_directory().'/inc/services.php';
    //require get_template_directory().'/inc/portfolio.php';
    //tgm plugin activation
    //require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
    require_once get_template_directory().'/inc/plugins/kirki/kirki.php';
    require_once get_template_directory().'/inc/kirki-config.php';

/**
 * 
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


    ?>