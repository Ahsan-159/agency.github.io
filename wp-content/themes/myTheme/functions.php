<?php
    function wptheme_scripts(){
        //wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style('style',get_stylesheet_uri());
        wp_enqueue_script('wp-browser',get_template_directory_uri().'/assets/js/browser.min.js');
        wp_enqueue_script('wp-breakpoint',get_template_directory_uri().'/assets/js/breakpoints.min.js');
        wp_enqueue_script('wp-breakpoint',get_template_directory_uri().'/assets/js/breakpoints.min.js');
        wp_enqueue_script('wp-utill',get_template_directory_uri().'/assets/js/util.js');
        wp_enqueue_script('wp-main',get_template_directory_uri().'/assets/js/main.js');
    
        wp_enqueue_script('jquery');
        //wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/owl-carousel/owl.carousel.min.js');
       // wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/owl-carousel/assets/css/owl.carousel.min.css');
        
    }
    add_action('wp_enqueue_scripts','wptheme_scripts');

    function wptheme_theme_setup(){
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
    add_action('after_setup_theme','wptheme_theme_setup');
    function wptheme_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Primary Sidebar', 'theme_name' ),
            'id'            => 'main-sidebar',
            'before_widget' => '<section id="%1$s" class="box %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<header><h3 class="widget-title">',
            'after_title'   => '</h3></header>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Home Banner', 'theme_name' ),
            'id'            => 'home-banner',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<header><h3 class="widget-title">',
            'after_title'   => '</h3></header>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Home Services', 'theme_name' ),
            'id'            => 'home-services',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
     
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar-1', 'theme_name' ),
            'id'            => 'footer-1',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<header><h3 class="widget-title">',
            'after_title'   => '</h3></header>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar-2', 'theme_name' ),
            'id'            => 'footer-2',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<header><h3 class="widget-title">',
            'after_title'   => '</h3></header>',
        ) );
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar-3', 'theme_name' ),
            'id'            => 'footer-3',
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<header><h3 class="widget-title">',
            'after_title'   => '</h3></header>',
        ) );
        
    }
    add_action('widgets_init','wptheme_widgets_init');
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
    //require get_template_directory().'/inc/customizer.php';
    //require get_template_directory().'/inc/services.php';
    //require get_template_directory().'/inc/portfolio.php';
    //tgm plugin activation
    //require_once get_template_directory().'/inc/class-tgm-plugin-activation.php';
    require_once get_template_directory().'/inc/plugins/kirki/kirki.php';
    require_once get_template_directory().'/inc/kirki-config.php';



    ?>