<?php
/*
Customizer Config
*/
kirki::add_config('agency_options',array(
    'capability' => 'edit_theme_options',
    'option_type'=>'theme_mod',
));
new \Kirki\Panel(
	'header_settings',
	[
		'priority'    => 11,
		'title'       => esc_html__( 'Header Settings', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);
new \Kirki\Section(
	'header_layout_settings',
	[
		'title'       => esc_html__( 'Layout', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'header_settings',
		'priority'    => 160,
	]
);
new \Kirki\Panel(
	'header_text',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header Text Settings', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);
new \Kirki\Section(
	'header_text_settings',
	[
		'title'       => esc_html__( 'Header Text Settings', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'header_text',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'text_setting',
		'label'    => esc_html__( 'Text Control', 'kirki' ),
		'section'  => 'header_text_settings',
		'default'  => esc_html__( 'Welcome To Our Studio!', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'heading',
		'label'    => esc_html__( 'Heading', 'kirki' ),
		'section'  => 'header_text_settings',
		'default'  => esc_html__( 'IT IS NICE TO MEET YOU', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'button_text',
		'label'    => esc_html__( 'Heading', 'kirki' ),
		'section'  => 'header_text_settings',
		'default'  => esc_html__( 'Tell Me More', 'kirki' ),
		'priority' => 10,
	]
);
// new \Kirki\Field\Background(
// 	[
// 		'settings'    => 'background_setting',
// 		'label'       => esc_html__( 'Background Color Menu', 'kirki' ),
// 		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
// 		'section'     => 'header_layout_settings',
// 		'default'     => [
// 			'background-color'      => 'transparent',
			
// 		],
// 		'transport'   => 'auto',
// 		'output'      => [
// 			[
// 				'element' => '#mainNav',
// 			],
// 		],
// 	]
// );
///////Services Section///////////
new \Kirki\Panel(
	'services_section',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Services Section', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'services_section',
	[
		'title'       => esc_html__( 'Services Heading,Sub-Heading,Icons', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'services_section',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'services_heading',
		'label'    => esc_html__( 'Services Heading', 'kirki' ),
		'section'  => 'services_section',
		'default'  => esc_html__( 'Services', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'services_subheading',
		'label'    => esc_html__( 'Services Sub Heading', 'kirki' ),
		'section'  => 'services_section',
		'default'  => esc_html__( 'Lorem Ipsum Doller East', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Dashicons(
	[
		'settings' => 'dashicons_setting',
		'label'    => esc_html__( 'Services Dashicons Control', 'kirki' ),
		'section'  => 'services_section',
		'default'  => 'menu',
		'priority' => 10,
	]
);

//portfolio
new \Kirki\Panel(
	'portfolio_section',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Portfolio Section', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'portfolio_section',
	[
		'title'       => esc_html__( 'Portfolio Heading & Sub-Heading', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'portfolio_section',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'portfolio_heading',
		'label'    => esc_html__( 'Portfolio Heading', 'kirki' ),
		'section'  => 'portfolio_section',
		'default'  => esc_html__( 'Portfolio', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'portfolio_subheading',
		'label'    => esc_html__( 'Portfolio Sub Heading', 'kirki' ),
		'section'  => 'portfolio_section',
		'default'  => esc_html__( 'Lorem Ipsum Doller East', 'kirki' ),
		'priority' => 10,
	]
);
///About Section
new \Kirki\Panel(
	'about_section',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'About Section', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'about_section',
	[
		'title'       => esc_html__( 'About Heading & Sub-Heading', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'about_section',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_heading',
		'label'    => esc_html__( 'About Heading', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'About Us', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_subheading',
		'label'    => esc_html__( 'About Sub Heading', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'Lorem Ipsum Doller East', 'kirki' ),
		'priority' => 10,
	]
);
//team
new \Kirki\Panel(
	'team_section',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Team Section', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'team_section',
	[
		'title'       => esc_html__( 'Team Heading & Sub-Heading', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'team_section',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'team_heading',
		'label'    => esc_html__( 'Team Heading', 'kirki' ),
		'section'  => 'team_section',
		'default'  => esc_html__( 'Our Team', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'team_subheading',
		'label'    => esc_html__( 'Team Sub Heading', 'kirki' ),
		'section'  => 'team_section',
		'default'  => esc_html__( 'Lorem Ipsum Doller East', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'team_textarea',
		'label'       => esc_html__( 'Textarea Control', 'kirki' ),
		'section'     => 'team_section',
		'default'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
										Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, 
										totam corporis ea, alias ut unde', 'kirki' ),
	]
);

///icon change
// new \Kirki\Panel(
// 	'services_icon',
// 	[
// 		'priority'    => 10,
// 		'title'       => esc_html__( 'Serices Section', 'kirki' ),
// 		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
// 	]
// );

// new \Kirki\Section(
// 	'services_icon',
// 	[
// 		'title'       => esc_html__( 'Services Icons ', 'kirki' ),
// 		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
// 		'panel'       => 'services_icon',
// 		'priority'    => 160,
// 	]
// );
