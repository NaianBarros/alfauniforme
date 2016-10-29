<?php
/**
 * Modules options.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$options[] = array( 'name' => _x( 'Modules settings', 'theme-options', 'the7mk2' ), 'type' => 'heading' );

$options[] = array( 'name' => _x( 'Enable modules', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['modules-portfolio-status'] = array(
	'id' => 'modules-portfolio-status',
	'name' => _x( 'Portfolio', 'theme-options', 'the7mk2' ),
	'type' => 'radio',
	'std' => 'enabled',
	'options' => array(
		'enabled' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'disabled' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);

$options['modules-testimonials-status'] = array(
	'id' => 'modules-testimonials-status',
	'name' => _x( 'Testimonials', 'theme-options', 'the7mk2' ),
	'type' => 'radio',
	'std' => 'enabled',
	'options' => array(
		'enabled' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'disabled' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);

$options['modules-team-status'] = array(
	'id' => 'modules-team-status',
	'name' => _x( 'Team', 'theme-options', 'the7mk2' ),
	'type' => 'radio',
	'std' => 'enabled',
	'options' => array(
		'enabled' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'disabled' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);

$options['modules-logos-status'] = array(
	'id' => 'modules-logos-status',
	'name' => _x( 'Partners, Clients, etc.', 'theme-options', 'the7mk2' ),
	'type' => 'radio',
	'std' => 'enabled',
	'options' => array(
		'enabled' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'disabled' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);

$options['modules-benefits-status'] = array(
	'id' => 'modules-benefits-status',
	'name' => _x( 'Benefits', 'theme-options', 'the7mk2' ),
	'type' => 'radio',
	'std' => 'enabled',
	'options' => array(
		'enabled' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'disabled' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);

$options['modules-albums-status'] = array(
	'id' => 'modules-albums-status',
	'name' => _x( 'Photo Albums', 'theme-options', 'the7mk2' ),
	'type' => 'radio',
	'std' => 'enabled',
	'options' => array(
		'enabled' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'disabled' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);

$options['modules-slideshow-status'] = array(
	'id' => 'modules-slideshow-status',
	'name' => _x( 'Slideshows', 'theme-options', 'the7mk2' ),
	'type' => 'radio',
	'std' => 'enabled',
	'options' => array(
		'enabled' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
		'disabled' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
	),
);
