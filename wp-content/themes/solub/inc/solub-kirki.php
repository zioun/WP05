<?php

new \Kirki\Panel(
	'solub_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Solub Options', 'kirki' ),
		'description' => esc_html__( 'Solub all options here', 'kirki' ),
	]
);

// header section
new \Kirki\Section(
	'solub_header',
	[
		'title'       => esc_html__( 'Header Option', 'kirki' ),
		'description' => esc_html__( 'Header information here you can find', 'kirki' ),
		'panel'       => 'solub_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'header_time',
		'label'    => esc_html__( 'Time', 'kirki' ),
		'section'  => 'solub_header',
		'default'  => esc_html__( 'Monday - Friday : 8:30 AM to 6:30 PM', 'kirki' ),
		'priority' => 10,
	]
);

