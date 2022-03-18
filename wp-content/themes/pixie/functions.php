<?php

    function pixie_scripts(){
       // wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('style',get_stylesheet_uri());
        wp_enqueue_style('style-boot',get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('css-2',get_template_directory_uri().'/assets/css/fontawesome.css');
        wp_enqueue_style('css-4',get_template_directory_uri().'/assets/css/tooplate-main.css');
        wp_enqueue_style('css-3',get_template_directory_uri().'/assets/css/owl.css');
       // wp_enqueue_style('css-1',get_template_directory_uri().'/assets/css/flex-slider.css');
       wp_enqueue_script('wp-b1',get_template_directory_uri().'/vendor/jquery/jquery.min.js'); 
        wp_enqueue_script('wp-browser2',get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js');
        wp_enqueue_script('wp-browser3',get_template_directory_uri().'/assets/js/custom.js');
        wp_enqueue_script('wp-browser4',get_template_directory_uri().'/assets/js/owl.js');
    }
    add_action('wp_enqueue_scripts','pixie_scripts');

    
    function pixie_theme_setup(){
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
    add_action('after_setup_theme','pixie_theme_setup');
    function pixie_widgets_init() {
       
        register_sidebar( array(
            'name'          => __( 'Footer Icons Section', 'pixie' ),
            'id'            => 'footer-icons',
            'before_widget' => '<div class=social-icons>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Top Menu', 'pixie' ),
            'id'            => 'footer-menu',
            'before_widget' => '<div class=footer-menu>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );
      
        register_sidebar( array(
            'name'          => __( 'About Page Description', 'pixie' ),
            'id'            => 'about-desc',
            'before_widget' => '<div class=right-content>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'About Image Section', 'pixie' ),
            'id'            => 'about-img',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Contact Us(Left Section)', 'pixie' ),
            'id'            => 'contact-left',
            'before_widget' => '<div class=right-content>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );
        register_sidebar( array(
            'name'          => __( 'Contact Us(Right Section)', 'pixie' ),
            'id'            => 'contact-right',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) );
    
    
    }
    add_action('widgets_init','pixie_widgets_init');
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
    // require get_template_directory().'/inc/portfolio.php';
    // require get_template_directory().'/inc/about.php';
    // require get_template_directory().'/inc/team.php';


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