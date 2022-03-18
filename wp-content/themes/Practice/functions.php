<?php
    /*
    This file will be used as a mini plugin.like if we want to create some custom plugins in oue wordpress site
    */
// function wplearning_theme_setup(){
//     add_theme_support('custom-logo');
//     add_theme_support('title-tag');
//     add_theme_support('post-thumbnails');
//     add_image_size('single-post',500,272,array('center','center'));
//     add_theme_support('automatic-feed-links');
//     register_nav_menus( array(
//         'primary'   => __( 'Primary Menu', 'w3helpers' ),
//         //'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
//     ) );
// };
// $args=array(
//     'default-image'=>get_template_directory_uri().'/assets/images/reason.PNG',
//     'default-text-color'=>'000',
//     'width'=>1920,
//     'height'=>400,
//     'flex-width'=>true,
//     'flex-height'=>true
// );
// add_theme_support('custom-header',$args);

// add_action('after_setup_theme','wplearning_theme_setup');
// function wplearning_theme_scripts(){
//    // wp_enqueue_style( 'style',get_stylesheet_uri());
//     wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css'); //bootstyrap csds inclusion

//     wp_enqueue_style( 'style',get_stylesheet_uri());
//     wp_enqueue_script('bootstrap-jsfile', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
//     wp_enqueue_script('jquery');
// }
// add_action('wp_enqueue_scripts','wplearning_theme_scripts');
// function wplearning_widgets_init() {
//     register_sidebar( array(
//         'name'          => __( 'Primary Sidebar', 'theme_name' ),
//         'id'            => 'main-sidebar',
//         'before_widget' => '<section id="%1$s" class="box  %2$s">',
//         'after_widget'  => '</section>',
//         'before_title'  => '<header><h3 class="widget-title">',
//         'after_title'   => '</h3></header>',
//         'description'   =>'my sidebar',
//     ) );
//     register_sidebar( array(
//         'name'          => __( 'Footer Sidebar', 'theme_name' ),
//         'id'            => 'footer-sidebar',
//         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</aside>',
//         'before_title'  => '<h3 class="widget-title">',
//         'after_title'   => '</h3>',
//         'description'   =>'my sidebar',
//     ) );
// }
// add_action('widgets_init','wplearning_widgets_init');    
?>

<?php
function practice_theme_scripts(){
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/assets/js/my.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/owl-carousel/owl.carousel.min.js');
    wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/owl-carousel/assets/css/owl.carousel.min.css');
    
}
add_action('wp_enqueue_scripts','practice_theme_scripts');
///add custom theme supports

///adding man theme supports in thme
function practice_theme_setup(){
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
    $args=array( 
        'default-image'=>get_template_directory_uri().'/assets/images/reason.PNG',
        'default-text-color'=>'000',
        'width'=>1920,
        'height'=>400,
        'flex-width'=>true,
        'flex-height'=>true,
    );
    add_theme_support('custom-header',$args);
}
add_action('after_setup_theme','practice_theme_setup');
//// below code is used to add 
function practice_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'main-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer Sidebar', 'theme_name' ),
        'id'            => 'footer-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action('widgets_init','practice_widgets_init');
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
require get_template_directory().'/inc/customizer.php';
require get_template_directory().'/inc/services.php';
?>