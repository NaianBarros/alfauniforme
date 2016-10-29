<?php
/**
 * Portfolio shortcodes VC bridge.
 *
 * @package the7\Portfolio\Shortcodes
 * @since 3.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

// templates
$loading_effect = array(
	"group"         => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Loading effect", 'the7mk2' ),
	"param_name"	=> "loading_effect",
	"type"			=> "dropdown",
	"value"			=> array(
		'None'				=> 'none',
		'Fade in'			=> 'fade_in',
		'Move up'			=> 'move_up',
		'Scale up'			=> 'scale_up',
		'Fall perspective'	=> 'fall_perspective',
		'Fly'				=> 'fly',
		'Flip'				=> 'flip',
		'Helix'				=> 'helix',
		'Scale'				=> 'scale',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$show_title = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"param_name"	=> "show_title",
	"type"			=> "checkbox",
	"value"			=> array( "Show projects titles" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_excerpt = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"param_name"	=> "show_excerpt",
	"type"			=> "checkbox",
	"value"			=> array( "Show projects excerpts" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_categories = array(
	"group" => __( "Project Meta", 'the7mk2' ),
	"param_name"	=> "show_categories",
	"type"			=> "checkbox",
	"value"			=> array( "Show project categories" => "true" ),
);

$show_date = array(
	"group" => __( "Project Meta", 'the7mk2' ),
	"param_name"	=> "show_date",
	"type"			=> "checkbox",
	"value"			=> array( "Show project date" => "true" ),
);

$show_author = array(
	"group" => __( "Project Meta", 'the7mk2' ),
	"param_name"	=> "show_author",
	"type"			=> "checkbox",
	"value"			=> array( "Show project author" => "true" ),
);

$show_comments = array(
	"group" => __( "Project Meta", 'the7mk2' ),
	"param_name"	=> "show_comments",
	"type"			=> "checkbox",
	"value"			=> array( "Show project comments" => "true" ),
);

$show_filter = array(
	"param_name"	=> "show_filter",
	"type"			=> "checkbox",
	"value"			=> array( "Show categories filter" => "true" ),
);

$show_orderby = array(
	"param_name"	=> "show_orderby",
	"type"			=> "checkbox",
	"value"			=> array( "Show name / date ordering" => "true" ),
);

$show_order = array(
	"param_name"	=> "show_order",
	"type"			=> "checkbox",
	"value"			=> array( "Show asc. / desc. ordering" => "true" ),
);

$show_details = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"param_name"	=> "show_details",
	"type"			=> "checkbox",
	"value"			=> array( "Show details icon" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_link = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"param_name"	=> "show_link",
	"type"			=> "checkbox",
	"value"			=> array( "Show link icon" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_zoom = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"param_name"	=> "show_zoom",
	"type"			=> "checkbox",
	"value"			=> array( "Show zoom icon" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$number = array(
	"heading"		=> __( "Number of projects to show", 'the7mk2' ),
	"param_name"	=> "number",
	"type"			=> "textfield",
	"value"			=> "12",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$posts_per_page = array(
	"heading"		=> __( "Projects per page", 'the7mk2' ),
	"param_name"	=> "posts_per_page",
	"type"			=> "textfield",
	"value"			=> "-1",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$orderby = array(
	"heading"		=> __( "Order by", 'the7mk2' ),
	"description"	=> __( "Select how to sort retrieved posts.", 'the7mk2' ),
	"param_name"	=> "orderby",
	"type"			=> "dropdown",
	"value"			=> array(
		"Date"			=> "date",
		"Author"		=> "author",
		"Title"			=> "title",
		"Slug"			=> "name",
		"Date modified"	=> "modified",
		"ID"			=> "id",
		"Random"		=> "rand",
	),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$order = array(
	"heading"		=> __( "Order way", 'the7mk2' ),
	"description"	=> __( "Designates the ascending or descending order.", 'the7mk2' ),
	"param_name"	=> "order",
	"type"			=> "dropdown",
	"value"			=> array(
		"Descending"	=> "desc",
		"Ascending"		=> "asc",
	),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$category = array(
	"heading"		=> __( "Categories", 'the7mk2' ),
	"param_name"	=> "category",
	"type"			=> "dt_taxonomy",
	"taxonomy"		=> "dt_portfolio_category",
	"admin_label"	=> true,
	"description"	=> __( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", 'the7mk2' ),
);

$padding = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Gap between images (px)", 'the7mk2' ),
	"param_name"	=> "padding",
	"type"			=> "textfield",
	"value"			=> "20",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$proportion = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Thumbnails proportions", 'the7mk2' ),
	"description"	=> __( "Width:height (e.g. 16:9). Leave this field empty to preserve original image proportions.", 'the7mk2' ),
	"param_name"	=> "proportion",
	"type"			=> "textfield",
	"value"			=> "",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$descriptions = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Show projects descriptions", 'the7mk2' ),
	"param_name"	=> "descriptions",
	"type"			=> "dropdown",
	"value"			=> array(
		'Under images'							=> 'under_image',
		'On colored background'					=> 'on_hover_centered',
		'On dark gradient'						=> 'on_dark_gradient',
		'In the bottom'							=> 'from_bottom',
		'Background & animated lines'			=> 'bg_with_lines',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$bg_under_projects = array(
	
	"heading"		=> __( "Background under projects", 'the7mk2' ),
	"param_name"	=> "bg_under_projects",
	"type"			=> "dropdown",
	"value"			=> array(
		'Enabled (image with paddings)'		=> 'with_paddings',
		'Enabled (image without paddings)'	=> 'fullwidth',
		'Disabled'							=> 'disabled',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
	"group" => __( "Appearance", 'the7mk2' ),
);

$hover_animation = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Animation", 'the7mk2' ),
	"param_name"	=> "hover_animation",
	"type"			=> "dropdown",
	"value"			=> array(
		'Fade'						=> 'fade',
		'Direction aware'			=> 'direction_aware',
		'Reverse direction aware'	=> 'redirection_aware',
		'Scale in'					=> 'scale_in',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$hover_bg_color = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Image hover background color", 'the7mk2' ),
	"param_name"	=> "hover_bg_color",
	"type"			=> "dropdown",
	"value"			=> array(
		'Color (from Theme Options)'	=> 'accent',
		'Dark'							=> 'dark',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$bgwl_animation_effect = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Animation effect", 'the7mk2' ),
	"param_name"	=> "bgwl_animation_effect",
	"type"			=> "dropdown",
	"value"			=> array(
		'Effect 1'	=> '1',
		'Effect 2'	=> '2',
		'Effect 3'	=> '3',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$hover_content_visibility = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Content", 'the7mk2' ),
	"param_name"	=> "hover_content_visibility",
	"type"			=> "dropdown",
	"value"			=> array(
		'On hover'			=> 'on_hover',
		'Always visible'	=> 'always'
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$colored_bg_content_aligment = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Content alignment", 'the7mk2' ),
	"param_name"	=> "colored_bg_content_aligment",
	"type"			=> "dropdown",
	"value"			=> array(
		"Centre"		=> "centre",
		"Bottom"		=> "bottom",
		"Left & top"	=> "left_top",
		"Left & bottom"	=> "left_bottom",
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$content_aligment = array(
	"group" => __( "Appearance", 'the7mk2' ),
	"heading"		=> __( "Content alignment", 'the7mk2' ),
	"param_name"	=> "content_aligment",
	"type"			=> "dropdown",
	"value"			=> array(
		'Left'			=> 'left',
		'Centre'		=> 'center',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$number_order_title = array(
	"heading" => __( "Projects Number & Order", 'the7mk2' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

$design_title = array(
	"group" => __("Appearance", 'the7mk2'),
	"heading" => __( "Project Design", 'the7mk2' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

$elements_title = array(
	"group" => __("Appearance", 'the7mk2'),
	"heading" => __( "Project Elements", 'the7mk2' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

$filter_title = array(
	"heading" => __( "Projects Filter", 'the7mk2' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

/**
 * Portfolio Scroller.
 */

vc_map( array(
	"weight"	=> -1,
	"base"		=> "dt_portfolio_slider",
	"name"		=> __("Portfolio Scroller", 'the7mk2'),
	"category"	=> __('by Dream-Theme', 'the7mk2'),
	"icon"		=> "dt_vc_ico_portfolio_slider",
	"class"		=> "dt_vc_sc_portfolio_slider",
	"params"	=> array(
		// General group.
		$category,
		$number_order_title,
		array_merge( $number, array( "edit_field_class" => "vc_col-xs-12 vc_column dt_row-6", ) ),
		$orderby,
		$order,
		// Appearance group.
		array_merge( $padding, array( "edit_field_class" => "vc_col-xs-12 vc_column dt_row-6", ) ),
		array(
			"group" => __( "Appearance", 'the7mk2' ),
			"heading"		=> __("Thumbnails width", 'the7mk2'),
			"param_name"	=> "width",
			"type"			=> "textfield",
			"value"			=> "",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"description"	=> __("In pixels. Leave this field empty if you want to preserve original thumbnails proportions.", 'the7mk2'),
		),
		array(
			"group" => __( "Appearance", 'the7mk2' ),
			"heading"		=> __("Thumbnails height", 'the7mk2'),
			"param_name"	=> "height",
			"type"			=> "textfield",
			"value"			=> "210",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"description"	=> __("In pixels.", 'the7mk2'),
		),
		array(
			"group" => __( "Appearance", 'the7mk2' ),
			"heading"		=> __("Thumbnails max width", 'the7mk2'),
			"param_name"	=> "max_width",
			"type"			=> "textfield",
			"value"			=> "",
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"description"	=> __("In percents.", 'the7mk2'),
		),
		$design_title,
		array_merge( $descriptions, array( "param_name" => "appearance" ) ),
		array_merge( $bg_under_projects, array(
			"dependency"	=> array(
				"element"	=> "appearance",
				"value"		=> array( 'under_image' ),
			),
		) ),
		array_merge( $hover_animation, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $hover_bg_color, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array(
					'on_hover_centered',
					'under_image',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $bgwl_animation_effect, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array( 'bg_with_lines' ),
			),
		) ),
		array_merge( $hover_content_visibility, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array(
					'on_dark_gradient',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $colored_bg_content_aligment, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $content_aligment, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array(
					'under_image',
					'on_dark_gradient',
					'from_bottom',
				),
			),
		) ),
		$elements_title,
		$show_title,
		$show_link,
		$show_excerpt,
		$show_zoom,
		$show_details,
		// Project Meta group.
		$show_categories,
		$show_date,
		$show_author,
		$show_comments,
		// Slideshow group.
		array(
			"group" => __( "Slideshow", 'the7mk2' ),
			"heading"		=> __("Arrows", 'the7mk2'),
			"param_name"	=> "arrows",
			"type"			=> "dropdown",
			"value"			=> array(
				'light'					=> 'light',
				'dark'					=> 'dark',
				'rectangular accent'	=> 'rectangular_accent',
				'disabled'				=> 'disabled',
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"group" => __("Slideshow", 'the7mk2'),
			"heading" => __("Show arrows on mobile device", 'the7mk2'),
			"param_name" => "arrows_on_mobile",
			"type" => "dropdown",
			"value" => array(
				"Yes" => "on",
				"No" => "off",
			),
			"dependency" => array(
				"element" => "arrows",
				"value" => array(
					'light',
					'dark',
					'rectangular_accent',
				),
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"group" => __( "Slideshow", 'the7mk2' ),
			"heading"		=> __("Autoslide interval (in milliseconds)", 'the7mk2'),
			"param_name"	=> "autoslide",
			"type"			=> "textfield",
			"value"			=> "",
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
		array(
			"group" => __( "Slideshow", 'the7mk2' ),
			"heading" => '&nbsp;',
			"param_name"	=> "loop",
			"type"			=> "checkbox",
			"value"			=> array( "Loop" => "true" ),
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
	)
) );

/**
 * Portfolio.
 */

vc_map( array(
	"weight"	=> -1,
	"base"		=> "dt_portfolio",
	"name"		=> __( "Portfolio Masonry & Grid", 'the7mk2' ),
	"category"	=> __( 'by Dream-Theme', 'the7mk2' ),
	"icon"		=> "dt_vc_ico_portfolio",
	"class"		=> "dt_vc_sc_portfolio",
	"params"	=> array(
		// General group.
		$category,
		$number_order_title,
		$number,
		$posts_per_page,
		$orderby,
		$order,
		$filter_title,
		$show_filter,
		$show_orderby,
		$show_order,
		// Appearance group.
		array(
			"group"         => __( "Appearance", 'the7mk2' ),
			"heading"		=> __( "Appearance", 'the7mk2' ),
			"param_name"	=> "type",
			"type"			=> "dropdown",
			"value"			=> array(
				"Masonry"		=> "masonry",
				"Grid"			=> "grid",
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		$loading_effect,
		array(
			"group" => __( "Appearance", 'the7mk2' ),
			"heading"		=> __( "Projects width", 'the7mk2' ),
			"param_name"	=> "same_width",
			"type"			=> "dropdown",
			"value"			=> array(
				"Preserve original width"	=> "false",
				"Make projects same width"	=> "true",
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array_merge( $padding, array(
			"description"	=> __( "Image paddings (e.g. 5 pixel padding will give you 10 pixel gaps between images)", 'the7mk2' ),
		) ),
		$proportion,
		$design_title,
		$descriptions,
		array_merge( $bg_under_projects, array(
			"dependency"	=> array(
				"element"	=> "descriptions",
				"value"		=> array( 'under_image' ),
			),
		) ),
		array_merge( $hover_animation, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $hover_bg_color, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_hover_centered',
					'under_image',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $bgwl_animation_effect, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'bg_with_lines' ),
			),
		) ),
		array_merge( $hover_content_visibility, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_dark_gradient',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $colored_bg_content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'under_image',
					'on_dark_gradient',
					'from_bottom',
				),
			),
		) ),
		$elements_title,
		$show_title,
		$show_link,
		$show_excerpt,
		$show_zoom,
		$show_details,
		// Project Meta group.
		$show_categories,
		$show_date,
		$show_author,
		$show_comments,
		// Responsiveness group.
		array(
			"heading" => __("Responsiveness", 'the7mk2'),
			"param_name" => "responsiveness",
			"type" => "dropdown",
			"value" => array(
				"Post width based" => "post_width_based",
				"Browser width based" => "browser_width_based",
			),
			"group" => __( "Responsiveness", 'the7mk2' ),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"heading"		=> __( "Column minimum width (px)", 'the7mk2' ),
			"param_name"	=> "column_width",
			"type"			=> "textfield",
			"value"			=> "370",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"post_width_based",
				),
			),
			"group" => __( "Responsiveness", 'the7mk2' ),
		),
		array(
			"heading"		=> __( "Desired columns number", 'the7mk2' ),
			"param_name"	=> "columns",
			"type"			=> "textfield",
			"value"			=> "2",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"post_width_based",
				),
			),
			"group" => __( "Responsiveness", 'the7mk2' ),
		),
		array(
			"heading" => __("Columns on Desktop", 'the7mk2'),
			"param_name" => "columns_on_desk",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'the7mk2' ),
		),
		array(
			"heading" => __("Columns on Horizontal Tablet", 'the7mk2'),
			"param_name" => "columns_on_htabs",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'the7mk2' ),
		),
		array(
			"heading" => __("Columns on Vertical Tablet", 'the7mk2'),
			"param_name" => "columns_on_vtabs",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'the7mk2' ),
		),
		array(
			"heading" => __("Columns on Mobile Phone", 'the7mk2'),
			"param_name" => "columns_on_mobile",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'the7mk2' ),
		),
	)
) );

/**
 * Portfolio justified grid.
 */

vc_map( array(
	"weight"	=> -1,
	"base"		=> 'dt_portfolio_jgrid',
	"name"		=> __( "Portfolio Justified Grid", 'the7mk2' ),
	"category"	=> __( 'by Dream-Theme', 'the7mk2' ),
	"icon"		=> "dt_vc_ico_portfolio",
	"class"		=> "dt_vc_sc_portfolio",
	"params"	=> array(
		// General group.
		$category,
		$number_order_title,
		$number,
		$posts_per_page,
		$orderby,
		$order,
		$filter_title,
		$show_filter,
		// Apppearace group.
		$loading_effect,
		array(
			"group" => __( "Appearance", 'the7mk2' ),
			"heading"		=> __( "Row target height (px)", 'the7mk2' ),
			"param_name"	=> "target_height",
			"type"			=> "textfield",
			"value"			=> "240",
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
		array(
			"group" => __( "Appearance", 'the7mk2' ),
			"heading"		=> '&nbsp;',
			"param_name" => "hide_last_row",
			"type" => "checkbox",
			"value" => array( "Hide last row if there's not enough images to fill it" => "true" ),
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
		$padding,
		$proportion,
		$design_title,
		array_merge( $descriptions, array( 'value' => array_diff( $descriptions['value'], array( 'under_image' ) ) ) ),
		array_merge( $hover_animation, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $hover_bg_color, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_hover_centered',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $bgwl_animation_effect, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'bg_with_lines' ),
			),
		) ),
		array_merge( $hover_content_visibility, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_dark_gradient',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $colored_bg_content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_dark_gradient',
					'from_bottom',
				),
			),
		) ),
		$elements_title,
		$show_title,
		$show_link,
		$show_excerpt,
		$show_zoom,
		$show_details,
		// Project meta group.
		$show_categories,
		$show_date,
		$show_author,
		$show_comments,
	)
) );
