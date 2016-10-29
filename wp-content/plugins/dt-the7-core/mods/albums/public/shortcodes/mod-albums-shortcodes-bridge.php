<?php
/**
 * Albums shortcodes VC bridge
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

// common
$loading_effect = array(
	array(
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
		"group" => __( "Appearance", 'the7mk2' ),
	),
);

$show_meta = array(
		array(
			"value"			=> array( "Show album categories" => "true" ),
			"param_name"	=> "show_categories",
			"type"			=> "checkbox",
			"group" => __( "Project Meta", 'the7mk2' ),
		),
		array(
			"value"			=> array( "Show album date" => "true" ),
			"param_name"	=> "show_date",
			"type"			=> "checkbox",
			"group" => __( "Project Meta", 'the7mk2' ),
		),
		array(
			"value"			=> array( "Show album author" => "true" ),
			"param_name"	=> "show_author",
			"type"			=> "checkbox",
			"group" => __( "Project Meta", 'the7mk2' ),
		),
		array(
			"value"			=> array( "Show album comments" => "true" ),
			"param_name"	=> "show_comments",
			"type"			=> "checkbox",
			"group" => __( "Project Meta", 'the7mk2' ),
		),
);

$ordering = array(
		array(
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
			"edit_field_class" => "vc_col-sm-6 vc_column dt_stle",
		),
		array(
			"heading"		=> __( "Order way", 'the7mk2' ),
			"description"	=> __( "Designates the ascending or descending order.", 'the7mk2' ),
			"param_name"	=> "order",
			"type"			=> "dropdown",
			"value"			=> array(
				"Descending"	=> "desc",
				"Ascending"		=> "asc",
			),
			"edit_field_class" => "vc_col-sm-6 vc_column",
		),
);

$category = array(
	array(
		"heading"		=> __( "Categories", 'the7mk2' ),
		"description"	=> __( "Note: By default, all your albums will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", 'the7mk2' ),
		"param_name"	=> "category",
		"type"			=> "dt_taxonomy",
		"taxonomy"		=> "dt_gallery_category",
		"admin_label"	=> true,
	)
);

$padding = array(
	array(
		"heading"		=> __( "Gap between images (px)", 'the7mk2' ),
		"param_name"	=> "padding",
		"type"			=> "textfield",
		"value"			=> "20",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __( "Appearance", 'the7mk2' ),
	),
);

$proportion = array(
	array(
		"heading"		=> __( "Thumbnails proportions", 'the7mk2' ),
		"description"	=> __( "Width:height (e.g. 16:9). Leave this field empty to preserve original image proportions.", 'the7mk2' ),
		"param_name"	=> "proportion",
		"type"			=> "textfield",
		"value"			=> "",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __( "Appearance", 'the7mk2' ),
	),
);

// albums
$show_albums_content = array(
		array(
			"value"			=> array( "Show albums titles" => "true" ),
			"param_name"	=> "show_title",
			"type"			=> "checkbox",
			"group" => __( "Appearance", 'the7mk2' ),
		),
		array(
			"value"			=> array( "Show albums excerpts" => "true" ),
			"param_name"	=> "show_excerpt",
			"type"			=> "checkbox",
			"group" => __( "Appearance", 'the7mk2' ),
		),
);

$show_filter = array(
		array(
			"value"			=> array( "Show categories filter" => "true" ),
			"param_name"	=> "show_filter",
			"type"			=> "checkbox",
		),
);

$show_filter_ordering = array(
		array(
			"value"			=> array( "Show name / date ordering" => "true" ),
			"param_name"	=> "show_orderby",
			"type"			=> "checkbox",
		),
		array(
			"value"			=> array( "Show asc. / desc. ordering" => "true" ),
			"param_name"	=> "show_order",
			"type"			=> "checkbox",
		),
);

$show_miniatures = array(
	array(
		"value" => array( "Show image miniatures" => "true" ),
		"param_name" => "show_miniatures",
		"type" => "checkbox",
		"group" => __( "Appearance", 'the7mk2' ),
	),
);

$albums_to_show = array(
		array(
			"heading"		=> __( "Number of albums to show", 'the7mk2' ),
			"param_name"	=> "number",
			"type"			=> "textfield",
			"value"			=> "12",
			"edit_field_class" => "vc_col-sm-6 vc_column",
		),
);

$show_media_count = array(
	array(
		"value" => array( "Show number of images & videos" => "true" ),
		"param_name" => "show_media_count",
		"type" => "checkbox",
		"group" => __( "Project Meta", 'the7mk2' ),
	),
);

$albums_per_page = array(
		array(
			"heading"		=> __( "Albums per page", 'the7mk2' ),
			"param_name"	=> "posts_per_page",
			"type"			=> "textfield",
			"value"			=> "-1",
			"edit_field_class" => "vc_col-sm-6 vc_column",
		),
);

// photos
$show_photos_content = $show_albums_content;
$show_photos_content[0]["value"] = array( "Show titles" => "true" );
$show_photos_content[1]["value"] = array( "Show items descriptions" => "true" );

$photos_to_show = $albums_to_show;
$photos_to_show[0]["heading"] = __( "Number of items to show", 'the7mk2' );
$photos_to_show[0]["edit_field_class"] = "vc_col-xs-12 vc_column dt_row-6";

// masonry
$padding_masonry = $padding;
$padding_masonry[0]["description"] = __( "Image paddings (e.g. 5 pixel padding will give you 10 pixel gaps between images)", 'the7mk2' );

// scroller
$scroller_padding = $padding;
$scroller_padding[0]["edit_field_class"] = "vc_col-xs-12 vc_column dt_row-6";
$scroller_albums_to_show = $albums_to_show;
$scroller_albums_to_show[0]["edit_field_class"] = "vc_col-xs-12 vc_column dt_row-6";

$appearance = array(
	array(
		"heading" => __( "Appearance", 'the7mk2' ),
		"param_name" => "type",
		"type" => "dropdown",
		"value" => array(
			"Masonry" => "masonry",
			"Grid" => "grid",
		),
		"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		"group" => __("Appearance", 'the7mk2'),
	),
);

// jgrid
$target_height = array(
	array(
		"heading" => __( "Row target height (px)", 'the7mk2' ),
		"param_name" => "target_height",
		"type" => "textfield",
		"value" => "240",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __("Appearance", 'the7mk2'),
	),
);

$hide_last_row = array(
	array(
		"value" => array( "Hide last row if there's not enough images to fill it" => "true" ),
		"heading" => '&nbsp;',
		"param_name" => "hide_last_row",
		"type" => "checkbox",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __("Appearance", 'the7mk2'),
	),
);

// scroller
$scroller_arrows = array(
	array(
		"heading" => __("Arrows", 'the7mk2'),
		"param_name" => "arrows",
		"type" => "dropdown",
		"value" => array(
			'light' => 'light',
			'dark' => 'dark',
			'rectangular accent' => 'rectangular_accent',
			'disabled' => 'disabled',
		),
		"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		"group" => __("Slideshow", 'the7mk2'),
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
);

$scroller_slidehow_controls = array(
	array(
		"heading" => __( "Autoslide interval (in milliseconds)", 'the7mk2' ),
		"param_name" => "autoslide",
		"type" => "textfield",
		"value" => "",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __("Slideshow", 'the7mk2'),
	),
	array(
		"value" => array( "Loop" => "true" ),
		"heading" => '&nbsp;',
		"param_name" => "loop",
		"type" => "checkbox",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __("Slideshow", 'the7mk2'),
	),
);

// hover
$descriptions = array(
	"heading"		=> __( "Show albums descriptions", 'the7mk2' ),
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
	"group" => __( "Appearance", 'the7mk2' ),
);

$bg_under_posts = array(
	"heading"		=> __( "Background under albums", 'the7mk2' ),
	"param_name"	=> "bg_under_albums",
	"type"			=> "dropdown",
	"value"			=> array(
		'Enabled (image with paddings)'		=> 'with_paddings',
		'Enabled (image without paddings)'	=> 'fullwidth',
		'Disabled'							=> 'disabled'
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
	"group" => __( "Appearance", 'the7mk2' ),
);

$hover_animation = array(
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
	"group" => __( "Appearance", 'the7mk2' ),
);

$hover_bg_color = array(
	"heading"		=> __( "Image hover background color", 'the7mk2' ),
	"param_name"	=> "hover_bg_color",
	"type"			=> "dropdown",
	"value"			=> array(
		'Color (from Theme Options)'	=> 'accent',
		'Dark'							=> 'dark',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
	"group" => __( "Appearance", 'the7mk2' ),
);

$bgwl_animation_effect = array(
	"heading"		=> __( "Animation effect", 'the7mk2' ),
	"param_name"	=> "bgwl_animation_effect",
	"type"			=> "dropdown",
	"value"			=> array(
		'Effect 1'	=> '1',
		'Effect 2'	=> '2',
		'Effect 3'	=> '3',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
	"group" => __( "Appearance", 'the7mk2' ),
);

$hover_content_visibility = array(
	"heading"		=> __( "Content", 'the7mk2' ),
	"param_name"	=> "hover_content_visibility",
	"type"			=> "dropdown",
	"value"			=> array(
		'On hover'			=> 'on_hover',
		'Always visible'	=> 'always'
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
	"group" => __( "Appearance", 'the7mk2' ),
);

$colored_bg_content_aligment = array(
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
	"group" => __( "Appearance", 'the7mk2' ),
);

$content_aligment = array(
	"heading"		=> __( "Content alignment", 'the7mk2' ),
	"param_name"	=> "content_aligment",
	"type"			=> "dropdown",
	"value"			=> array(
		'Left'			=> 'left',
		'Centre'		=> 'center',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
	"group" => __( "Appearance", 'the7mk2' ),
);

$descriptions_masonry = array(
	$descriptions,
	array_merge( $bg_under_posts, array(
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
);

$descriptions_jgrid = array(
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
);

$album_number_order_title = array(
	array(
		"heading" => __( "Albums Number & Order", 'the7mk2' ),
		"param_name" => "dt_title",
		"type" => "dt_title",
	)
);

$album_filter_title = array( array(
	"heading" => __( "Albums Filter", 'the7mk2' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
) );

$album_design_title = array( array(
	"heading" => __( "Album Design", 'the7mk2' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
	"group" => __("Appearance", 'the7mk2'),
                             ) );

$album_elements_title = array( array(
	"heading" => __( "Album Elements", 'the7mk2' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
	"group" => __("Appearance", 'the7mk2'),
) );

$photo_number_order_title = array(
	array(
		"heading" => __( "Albums Number & Order", 'the7mk2' ),
		"param_name" => "dt_title",
		"type" => "dt_title",
	)
);

$photo_filter_title = array(
	array(
	                             "heading" => __( "Albums Filter", 'the7mk2' ),
	                             "param_name" => "dt_title",
	                             "type" => "dt_title",
    )
);

$photo_design_title = array(
	array(
	                             "heading" => __( "Album Design", 'the7mk2' ),
	                             "param_name" => "dt_title",
	                             "type" => "dt_title",
	                             "group" => __("Appearance", 'the7mk2'),
                             )
);

$photo_elements_title = array(
	array(
	                               "heading" => __( "Album Elements", 'the7mk2' ),
	                               "param_name" => "dt_title",
	                               "type" => "dt_title",
	                               "group" => __("Appearance", 'the7mk2'),
                               )
);

$responsiveness = array(
	array(
		"heading" => __("Responsiveness", 'the7mk2'),
		"param_name" => "responsiveness",
		"type" => "dropdown",
		"value" => array(
			"Post width based" => "post_width_based",
			"Browser width based" => "browser_width_based",
		),
		"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
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
	array(
		"heading" => __( "Column minimum width (px)", 'the7mk2' ),
		"param_name" => "column_width",
		"type" => "textfield",
		"value" => "370",
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
		"heading" => __( "Desired columns number", 'the7mk2' ),
		"param_name" => "columns",
		"type" => "textfield",
		"value" => "2",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"dependency" => array(
			"element" => "responsiveness",
			"value" => array(
				"post_width_based",
			),
		),
		"group" => __( "Responsiveness", 'the7mk2' ),
	),
);

$thumbnails_width = array(
	array(
		"heading" => __( "Thumbnails width", 'the7mk2' ),
		"description" => __( "In pixels. Leave this field empty if you want to preserve original thumbnails proportions.", 'the7mk2' ),
		"param_name" => "width",
		"type" => "textfield",
		"value" => "",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __( "Appearance", 'the7mk2' ),
	),
);

$thumbnails_height = array(
	array(
		"heading" => __( "Thumbnails height", 'the7mk2' ),
		"description" => __( "In pixels.", 'the7mk2' ),
		"param_name" => "height",
		"type" => "textfield",
		"value" => "210",
		"edit_field_class" => "vc_col-sm-6 vc_column",
		"group" => __( "Appearance", 'the7mk2' ),
	),
);

$thumbnails_max_width = array(
	array(
		"heading" => __( "Thumbnails max width", 'the7mk2' ),
		"description" => __("In percents.", 'the7mk2'),
		"param_name" => "max_width",
		"type" => "textfield",
		"value" => "",
		"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		"group" => __( "Appearance", 'the7mk2' ),
	),
);

// ! Albums masonry
vc_map( array(
	"weight" => -1,
	"base" => 'dt_albums',
	"name" => __( "Albums Masonry & Grid", 'the7mk2' ),
	"category" => __( 'by Dream-Theme', 'the7mk2' ),
	"icon" => "dt_vc_ico_albums",
	"class" => "dt_vc_sc_albums",
	"params" => array_merge(
		$category,
		$album_number_order_title,
		$albums_per_page,
		$albums_to_show,
		$ordering,
		$album_filter_title,
		$show_filter,
		$show_filter_ordering,

		$appearance,
		$loading_effect,
		array(
			array(
				"heading" => __( "Albums width", 'the7mk2' ),
				"param_name" => "same_width",
				"type" => "dropdown",
				"value" => array(
					"Preserve original width" => "false",
					"Make albums same width" => "true",
				),
				"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
				"group" => __( "Appearance", 'the7mk2' ),
			)
		),
		$padding_masonry,
		$proportion,
		$album_design_title,
		$descriptions_masonry,
		$album_elements_title,
		$show_albums_content,
		$show_miniatures,

		$show_meta,
		$show_media_count,

		$responsiveness
	)
) );

// ! Photos masonry
vc_map( array(
	"weight" => -1,
	"base" => 'dt_photos_masonry',
	"name" => __( "Photos Masonry & Grid", 'the7mk2' ),
	"category" => __( 'by Dream-Theme', 'the7mk2' ),
	"icon" => "dt_vc_ico_photos",
	"class" => "dt_vc_sc_photos",
	"params" => array_merge(
		$category,
		$photo_number_order_title,
		$photos_to_show,
		$ordering,

		$appearance,
		$loading_effect,
		$padding_masonry,
		$proportion,
		$show_photos_content,

		$responsiveness
	)
) );

// ! Albums justified grid
vc_map( array(
	"weight" => -1,
	"base" => "dt_albums_jgrid",
	"name" => __( "Albums Justified Grid", 'the7mk2' ),
	"category" => __( 'by Dream-Theme', 'the7mk2' ),
	"icon" => "dt_vc_ico_albums",
	"class" => "dt_vc_sc_albums",
	"params" => array_merge(
		$category,
		$album_number_order_title,
		$albums_to_show,
		$albums_per_page,
		$ordering,
		$album_filter_title,
		$show_filter,

		$loading_effect,
		$target_height,
		$hide_last_row,
		$padding,
		$proportion,
		$album_design_title,
		$descriptions_jgrid,
		$album_elements_title,
		$show_albums_content,
		$show_miniatures,

		$show_meta,
		$show_media_count
	)
) );

// ! Photos jgrid
vc_map( array(
	"weight" => -1,
	"base" => 'dt_photos_jgrid',
	"name" => __( "Photos Justified Grid", 'the7mk2' ),
	"category" => __( 'by Dream-Theme', 'the7mk2' ),
	"icon" => "dt_vc_ico_photos",
	"class" => "dt_vc_sc_photos",
	"params" => array_merge(
		$category,
		$photo_number_order_title,
		$photos_to_show,
		$ordering,

		$loading_effect,
		$target_height,
		$hide_last_row,
		$padding,
		$proportion,
		$photo_elements_title,
		$show_photos_content
	)
) );

// ! Albums scroller
vc_map( array(
	"weight" => -1,
	"base" => 'dt_albums_scroller',
	"name" => __( "Albums Scroller", 'the7mk2' ),
	"category" => __( 'by Dream-Theme', 'the7mk2' ),
	"icon" => "dt_vc_ico_albums",
	"class" => "dt_vc_sc_albums",
	"params" => array_merge(
		// General group.
		$category,
		$album_number_order_title,
		$scroller_albums_to_show,
		$ordering,

		// Appearance group.
		$scroller_padding,
		$thumbnails_width,
		$thumbnails_height,
		$thumbnails_max_width,
		$album_design_title,
		$descriptions_masonry,
		$album_elements_title,
		$show_albums_content,
		$show_miniatures,

		// Elements group.
		$show_meta,
		$show_media_count,

		// Slideshow group.
		$scroller_arrows,
		$scroller_slidehow_controls
	)
) );

// ! Photos scroller
vc_map( array(
	"weight" => -1,
	"base" => 'dt_small_photos',
	"name" => __( "Photos Scroller", 'the7mk2' ),
	"category" => __( 'by Dream-Theme', 'the7mk2' ),
	"icon" => "dt_vc_ico_photos",
	"class" => "dt_vc_sc_photos",
	"params" => array_merge(
		// General group.
		$category,
		$photo_number_order_title,
		$photos_to_show,
		array(
			array(
				"heading" => __( "Show", 'the7mk2' ),
				"param_name" => "orderby",
				"type" => "dropdown",
				"value" => array(
					"Recent photos" => "recent",
					"Random photos" => "random",
				),
				"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			),
		),

		// Appearance group.
		$scroller_padding,
		$thumbnails_width,
		$thumbnails_height,
		$thumbnails_max_width,
		$album_elements_title,
		$show_photos_content,

		// Slideshow group.
		$scroller_arrows,
		$scroller_slidehow_controls
	)
) );
