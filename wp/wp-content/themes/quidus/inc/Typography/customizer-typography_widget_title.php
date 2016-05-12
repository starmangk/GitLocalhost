<?php

	/* ---------------------------------------------- */
		
	/* ------ // Typography -> Widget Title // ------ */
		
	/* ---------------------------------------------- */
	
	/* Enable Custom Widget Title Settings */
		
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_widget_title_typography_enable',
		'label'       => __( 'Enable Custom Widget Title Typography', 'quidus' ),
		'section'     => 'quidus_typography_widget_title',
		'default'     => false,
		'priority'    => 10,
	));
	
	/* Widget Title Font Size */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'slider',
		'setting'     => 'quidus_widget_title_size',
		'label'       => __( 'Widget Title Font Size', 'quidus' ),
		'section'     => 'quidus_typography_widget_title',
		'default'     => 100,
		'priority'    => 10,
		'choices'     => array(
			'min'  => 40,
			'max'  => 150,
			'step' => 1
		),
	));
	
	/* Enable Custom Widget Title Settings */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'typography',
		'settings'    => 'quidus_widget_title_typography',
		'label'       => __( 'Typography', 'quidus' ),
		'section'     => 'quidus_typography_widget_title',
		'default'     => array(
			'font-family'    => 'Playfair Display',
			'font-weight'    => '700',
			'line-height'    => '1.2632',
			'letter-spacing' => '1',
		),
		'priority'    => 10,
		'choices'     => array(
			'font-style'     => true,
			'font-family'    => true,
			'font-size'      => false,
			'font-weight'    => true,
			'line-height'    => true,
			'letter-spacing' => true,
		),
		'output' => array(
			array(
				'element' => array('xx'),
			),
		),
	) );
	
	/* Padding Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_widget_title_typography_padding_top',
		'label'       => __( 'Padding Top', 'quidus' ),
		'section'     => 'quidus_typography_widget_title',
		'default'     => '0.8421em',
		'priority'    => 10,
	));
	
	/* Padding Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_widget_title_typography_padding_bottom',
		'label'       => __( 'Padding Bottom', 'quidus' ),
		'section'     => 'quidus_typography_widget_title',
		'default'     => '0.5em',
		'priority'    => 10,
	));
	
	/* Margin Top */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_widget_title_typography_margin_top',
		'label'       => __( 'Margin Top', 'quidus' ),
		'section'     => 'quidus_typography_widget_title',
		'default'     => '0',
		'priority'    => 10,
	));
	
	/* Margin Bottom */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'text',
		'setting'     => 'quidus_widget_title_typography_margin_bottom',
		'label'       => __( 'Margin Bottom', 'quidus' ),
		'section'     => 'quidus_typography_widget_title',
		'default'     => '1em',
		'priority'    => 10,
	));
	
	/* Widget Title Align Left */
	
	Kirki::add_field( 'quidus', array(
		'type'        => 'checkbox',
		'setting'     => 'quidus_widget_title_align_left',
		'label'       => __( 'Widget Title Align Left', 'quidus' ),
		'section'     => 'quidus_global_layout',
		'default'     => false,
		'priority'    => 10,
	));

?>