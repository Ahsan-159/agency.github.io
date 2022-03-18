


<?php
/*
Agency Customizer
*/



function agency_customize_register($wp_customize){
    $wp_customize->add_panel('agency_settings',array(
        'title'=> __('Agency Settings'),
        'Description'=>'',
        'Priority'=>10,
    ));
    $wp_customize->add_section('agency_colors',array(
        'title'=>'Color',
        'panel'=>'agency_settings',
    ));
    $wp_customize->add_setting('agency_nav_bg_color',array(
        'type'=>'theme_mod',
        'capability'=>'edit_theme_options',
        'default'=>'',
        'transport'=>'refresh',
        'sanitize_callback'=>'sanitize_hex_color',
    ));
    $wp_customize->add_control('agency_nav_bg_color',array(
        'label'=> __('Menu Background'),
        'type'=>'color',
        'section'=>'agency_colors',
    ));
}
    add_action('customize_register','agency_customize_register');

