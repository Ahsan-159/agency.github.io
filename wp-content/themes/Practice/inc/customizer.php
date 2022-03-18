<?php
    function practice_customize_register($wp_customize){
        $wp_customize->add_panel('practice_settings',array(
            'title'=>__('Practice Settings'),
            'description'=>'',
            'priority'=>10
        ));
        $wp_customize->add_section('practice_colors',array(
            'title'=>'Colors',
            'panel'=>'practice_settings'
        ));
        $wp_customize->add_setting('practice_nav_bg_color',array(
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            'default'=>'',
            'transport'=>'refresh',
            'sanitize_callback'=>'sanitize_hex_color',
        ));
        $wp_customize->add_control('practice_body_bg_color',array(
            'label'=>__('Menu Background'),
            'type'=>'color',
            'section'=>'practice_colors',
        ));
        $wp_customize->add_setting('practice_body_bg_color',array(
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            'default'=>'',
            'transport'=>'refresh',
            'sanitize_callback'=>'sanitize_hex_color',
        ));
        $wp_customize->add_control('practice_nav_bg_color',array(
            'label'=>__('Body Background'),
            'type'=>'color',
            'section'=>'practice_colors',
        ));
    }
    add_action('customize_register','practice_customize_register');
?>