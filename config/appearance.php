<?php
/**
 * Genesis Sample appearance settings.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

$genesis_sample_default_colors = [
	'link'   => '#0073e5',
	'accent' => '#0073e5',
];

$genesis_sample_link_color = get_theme_mod(
	'genesis_sample_link_color',
	$genesis_sample_default_colors['link']
);

$genesis_sample_accent_color = get_theme_mod(
	'genesis_sample_accent_color',
	$genesis_sample_default_colors['accent']
);

$genesis_sample_link_color_contrast   = genesis_sample_color_contrast( $genesis_sample_link_color );
$genesis_sample_link_color_brightness = genesis_sample_color_brightness( $genesis_sample_link_color, 35 );

return [
	'fonts-url'            => 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700&display=swap',
	'content-width'        => 1062,
	'button-bg'            => $genesis_sample_link_color,
	'button-color'         => $genesis_sample_link_color_contrast,
	'button-outline-hover' => $genesis_sample_link_color_brightness,
	'link-color'           => $genesis_sample_link_color,
	'default-colors'       => $genesis_sample_default_colors,
	'editor-color-palette' => [
		[
			'name'  => __( 'Custom color', 'genesis-sample' ), // Called “Link Color” in the Customizer options. Renamed because “Link Color” implies it can only be used for links.
			'slug'  => 'theme-primary',
			'color' => $genesis_sample_link_color,
		],
		[
			'name'  => __( 'Accent color', 'genesis-sample' ),
			'slug'  => 'theme-secondary',
			'color' => $genesis_sample_accent_color,
		],
		[
			'name'  => __( 'White', 'setup-3020' ),
			'slug'  => 'white',
			'color' => '#ffffff',
		],
		[
			'name'  => __( 'Light gray', 'setup-3020' ),
			'slug'  => 'light-gray',
			'color' => '#f5f5f5',
		],
		[
			'name'  => __( 'Medium gray', 'setup-3020' ),
			'slug'  => 'medium-gray',
			'color' => '#999',
		],
		[
			'name'  => __( 'Dark gray', 'setup-3020' ),
			'slug'  => 'dark-gray',
			'color' => '#333',
		],
		[
			'name'  => __( 'Black', 'setup-3020' ),
			'slug'  => 'black',
			'color' => '#000000',
		],
		[
			'name'  => __( 'Red', 'setup-3020' ),
			'slug'  => 'red',
			'color' => '#cc0000',
		],
		[
			'name'  => __( 'Orange', 'setup-3020' ),
			'slug'  => 'orange',
			'color' => '#ff7b00',
		],
		[
			'name'  => __( 'Yellow', 'setup-3020' ),
			'slug'  => 'yellow',
			'color' => '#ffbb00',
		],
		[
			'name'  => __( 'Green', 'setup-3020' ),
			'slug'  => 'green',
			'color' => '#66cc00',
		],
		[
			'name'  => __( 'Violet', 'setup-3020' ),
			'slug'  => 'violet',
			'color' => '#b882ee',
		],
		[
			'name'  => __( 'Blue', 'setup-3020' ),
			'slug'  => 'blue',
			'color' => '#0066cc',
		],
	],
	'editor-font-sizes'    => [
		[
			'name'      => __( 'Tiniest', 'setup-3020' ),
			'size'      => 8,
			'slug'      => 'tiniest',
		],
		[
			'name'      => __( 'Tinier', 'setup-3020' ),
			'size'      => 10,
			'slug'      => 'tinier',
		],
		[
			'name'      => __( 'Tiny', 'setup-3020' ),
			'size'      => 12,
			'slug'      => 'tiny',
		],
		[
			'name'      => __( 'XXXSmall', 'setup-3020' ),
			'size'      => 14,
			'slug'      => 'xxxsmall',
		],
		[
			'name'      => __( 'XXSmall', 'setup-3020' ),
			'size'      => 16,
			'slug'      => 'xxsmall',
		],
		[
			'name'      => __( 'XSmall', 'setup-3020' ),
			'size'      => 20,
			'slug'      => 'xsmall',
		],
		[
			'name'      => __( 'Small', 'setup-3020' ),
			'size'      => 24,
			'slug'      => 'small',
		],
		[
			'name'      => __( 'Medium', 'setup-3020' ),
			'size'      => 34,
			'slug'      => 'medium',
		],
		[
			'name'      => __( 'Large', 'setup-3020' ),
			'size'      => 48,
			'slug'      => 'large',
		],
		[
			'name'      => __( 'XLarge', 'setup-3020' ),
			'size'      => 64,
			'slug'      => 'xlarge',
		],
		[
			'name'      => __( 'XXLarge', 'setup-3020' ),
			'size'      => 80,
			'slug'      => 'xxlarge',
		],
		[
			'name'      => __( 'XXXLarge', 'setup-3020' ),
			'size'      => 96,
			'slug'      => 'xxxlarge',
		],
		[
			'name'      => __( 'Huge', 'setup-3020' ),
			'size'      => 128,
			'slug'      => 'huge',
		],
	],
];
