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
// new \Kirki\Panel(
// 	'services_section',
// 	[
// 		'priority'    => 10,
// 		'title'       => esc_html__( 'Services Section', 'kirki' ),
// 		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
// 	]
// );

// new \Kirki\Section(
// 	'services_section',
// 	[
// 		'title'       => esc_html__( 'Services Heading,Sub-Heading,Icons', 'kirki' ),
// 		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
// 		'panel'       => 'services_section',
// 		'priority'    => 160,
// 	]
// );
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'services_heading',
// 		'label'    => esc_html__( 'Services Heading', 'kirki' ),
// 		'section'  => 'services_section',
// 		'default'  => esc_html__( 'Services', 'kirki' ),
// 		'priority' => 10,
// 	]
// );
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'services_subheading',
// 		'label'    => esc_html__( 'Services Sub Heading', 'kirki' ),
// 		'section'  => 'services_section',
// 		'default'  => esc_html__( 'Lorem Ipsum Doller East', 'kirki' ),
// 		'priority' => 10,
// 	]
// );
// new \Kirki\Field\Dashicons(
// 	[
// 		'settings' => 'dashicons_setting',
// 		'label'    => esc_html__( 'Services Dashicons Control', 'kirki' ),
// 		'section'  => 'services_section',
// 		'default'  => 'menu',
// 		'priority' => 10,
// 	]
// );

//portfolio
// new \Kirki\Panel(
// 	'portfolio_section',
// 	[
// 		'priority'    => 10,
// 		'title'       => esc_html__( 'Portfolio Section', 'kirki' ),
// 		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
// 	]
// );

// new \Kirki\Section(
// 	'portfolio_section',
// 	[
// 		'title'       => esc_html__( 'Portfolio Heading & Sub-Heading', 'kirki' ),
// 		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
// 		'panel'       => 'portfolio_section',
// 		'priority'    => 160,
// 	]
// );
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'portfolio_heading',
// 		'label'    => esc_html__( 'Portfolio Heading', 'kirki' ),
// 		'section'  => 'portfolio_section',
// 		'default'  => esc_html__( 'Portfolio', 'kirki' ),
// 		'priority' => 10,
// 	]
// );
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'portfolio_subheading',
// 		'label'    => esc_html__( 'Portfolio Sub Heading', 'kirki' ),
// 		'section'  => 'portfolio_section',
// 		'default'  => esc_html__( 'Lorem Ipsum Doller East', 'kirki' ),
// 		'priority' => 10,
// 	]
// );
///About Section
new \Kirki\Panel(
	'about_section',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Below Navbar Section', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'about_section',
	[
		'title'       => esc_html__( 'Heading\Paragraph\Background\Button  ', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'about_section',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_heading',
		'label'    => esc_html__( 'Heading', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'Ecommerce HTML Template', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Editor(
	[
		'settings' => 'about_paragraph',
		'label'    => esc_html__( 'About Sub Heading', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'Pixie HTML Template can be converted into your desired CMS theme. Total 5 pages included. You can use this Bootstrap v4.1.3 layout for any CMS.
		Please tell your friends about Tooplate free template site. Thank you. Photo credit goes to Pexels website.', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'about_button',
		'label'    => esc_html__( 'Button Text', 'kirki' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'Order Now', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'background_setting',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'about_section',
		'default'     => [
			//'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => 'url(http://localhost/w3helpers/wp-content/themes/pixie/assets/images/banner-bg.jpg);',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			//'padding'				=> '150px 0px';
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.banner',
			],
		],
	]
);
new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'about_btn',
			'label'       => esc_html__( 'Show / Hide Button ', 'kirki' ),
			'description' => esc_html__( 'Here You Can Show or Hide Button', 'kirki' ),
			'section'     => 'about_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'kirki' ),
				'off' => esc_html__( 'Disable', 'kirki' ),
			],
		]
	);

///subcribe section
new \Kirki\Panel(
	'subcribe_section',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Subcribe Section', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'subcribe_section',
	[
		'title'       => esc_html__( 'Heading/Paragraph/Background & Button  ', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'subcribe_section',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'subcribe_heading',
		'label'    => esc_html__( 'Subcribe Heading', 'kirki' ),
		'section'  => 'subcribe_section',
		'default'  => esc_html__( 'Subscribe on PIXIE now!', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Editor(
	[
		'settings' => 'subcribe_paragraph',
		'label'    => esc_html__( 'Subcribe Sub Heading', 'kirki' ),
		'section'  => 'subcribe_section',
		'default'  => esc_html__( 'Integer vel turpis ultricies, lacinia ligula id, lobortis augue. Vivamus porttitor dui id dictum efficitur. Phasellus vel interdum elit.', 'kirki' ),
		'priority' => 10,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'switch_setting',
		'label'       => esc_html__( 'E-Mail Box Show/Hide', 'kirki' ),
		'description' => esc_html__( 'Simple switch control', 'kirki' ),
		'section'     => 'subcribe_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'subcribe_section',
// 		'label'    => esc_html__( 'Button Text', 'kirki' ),
// 		'section'  => 'about_section',
// 		'default'  => esc_html__( 'Order Now', 'kirki' ),
// 		'priority' => 10,
// 	]
// );
new \Kirki\Field\Background(
	[
		'settings'    => 'subcribe_background',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'subcribe_section',
		'default'     => [
			'background-color'      => '#3a8bcd',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.subscribe-form',
			],
		],
	]
);
////Footer Section
new \Kirki\Panel(
	'footer_section',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Footer Section', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);

new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer  ', 'kirki' ),
		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
		'panel'       => 'footer_section',
		'priority'    => 160,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'footer_text',
		'label'    => esc_html__( 'Footer Text', 'kirki' ),
		'section'  => 'footer_section',
		'default'  => esc_html__( 'COPYRIGHT &copy; 2019 COMPANY NAME - DESIGN: TOOPLATE', 'kirki' ),
		'priority' => 10,
	]
);
// new \Kirki\Field\Checkbox_Switch(
// 	[
// 		'settings'    => 'footer_setting',
// 		'label'       => esc_html__( 'Footer Rows', 'kirki' ),
// 		'description' => esc_html__( 'Simple switch control', 'kirki' ),
// 		'section'     => 'footer_section',
// 		'default'     => 'on',
// 		'choices'     => [
// 			'on'  => esc_html__( 'Enable', 'kirki' ),
// 			'off' => esc_html__( 'Disable', 'kirki' ),
// 		],
// 	]
// );
// new \Kirki\Field\Radio(
// 	[
// 		'settings' => 'footer_col_setting',
// 		'label'    => esc_html__( 'Radio Control', 'kirki' ),
// 		'section'  => 'footer_section',
// 		'default'  => 'both',
// 		'priority' => 10,
// 		'choices'  => [
// 			'both'   => [
// 				esc_html__( 'Show Both Column', 'kirki' ),
// 				esc_html__( 'Choose if u want to show both Footer column', 'kirki' ),
// 			],
// 			'icons'   => [
// 				esc_html__( 'Icons Column', 'kirki' ),
// 				esc_html__( 'Choose if u want to show Only Icon Section in Footer column', 'kirki' ),
// 			],
// 			'copyright'   => [
// 				esc_html__( 'Copyright Column', 'kirki' ),
// 				esc_html__( 'Choose if u want to show Only Copyright Section in Footer column', 'kirki' ),
// 			],
// 			'hide'   => [
// 				esc_html__( 'Both Column Hide', 'kirki' ),
// 				esc_html__( 'Choose if u want to show Only Copyright Section in Footer column', 'kirki' ),
// 			],
// 		],
// 	]
// );
new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'footer_col_setting',
		'label'       => esc_html__( 'Radio Control', 'kirki' ),
		'description' => esc_html__( 'Add a description here.', 'kirki' ),
		'section'     => 'footer_section',
		'default'     => 'both',
		'priority'    => 10,
		'choices'     => [
			'both'   => esc_html__( 'Both', 'kirki' ),
			'icons' => esc_html__( 'Icons', 'kirki' ),
			'copyright'  => esc_html__( 'Copyright', 'kirki' ),

		],
	]
);


//team
// new \Kirki\Panel(
// 	'team_section',
// 	[
// 		'priority'    => 10,
// 		'title'       => esc_html__( 'Team Section', 'kirki' ),
// 		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
// 	]
// );

// new \Kirki\Section(
// 	'team_section',
// 	[
// 		'title'       => esc_html__( 'Team Heading & Sub-Heading', 'kirki' ),
// 		'description' => esc_html__( 'Manage Header Layout.', 'kirki' ),
// 		'panel'       => 'team_section',
// 		'priority'    => 160,
// 	]
// );
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'team_heading',
// 		'label'    => esc_html__( 'Team Heading', 'kirki' ),
// 		'section'  => 'team_section',
// 		'default'  => esc_html__( 'Our Team', 'kirki' ),
// 		'priority' => 10,
// 	]
// );
// new \Kirki\Field\Text(
// 	[
// 		'settings' => 'team_subheading',
// 		'label'    => esc_html__( 'Team Sub Heading', 'kirki' ),
// 		'section'  => 'team_section',
// 		'default'  => esc_html__( 'Lorem Ipsum Doller East', 'kirki' ),
// 		'priority' => 10,
// 	]
// );
// new \Kirki\Field\Textarea(
// 	[
// 		'settings'    => 'team_textarea',
// 		'label'       => esc_html__( 'Textarea Control', 'kirki' ),
// 		'section'     => 'team_section',
// 		'default'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
// 										Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, 
// 										totam corporis ea, alias ut unde', 'kirki' ),
// 	]
// );

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
