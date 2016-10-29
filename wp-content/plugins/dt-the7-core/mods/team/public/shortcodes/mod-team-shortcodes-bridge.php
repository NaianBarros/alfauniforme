<?php
/**
 * Team shortcodes VC bridge
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

vc_map( array(
	"weight" => -1,
	"name" => __("Team", 'the7mk2'),
	"base" => 'dt_team',
	"icon" => "dt_vc_ico_team",
	"class" => "dt_vc_sc_team",
	"category" => __('by Dream-Theme', 'the7mk2'),
	"params" => array(
		// General group.
		array(
			"heading" => __("Categories", 'the7mk2'),
			"param_name" => "category",
			"type" => "dt_taxonomy",
			"taxonomy" => "dt_team_category",
			"admin_label" => true,
			"description" => __("Note: By default, all your team will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", 'the7mk2')
		),
		array(
			"heading" => __( "Photos Number & Order", 'the7mk2' ),
			"param_name" => "dt_title",
			"type" => "dt_title",
		),
		array(
			"heading" => __("Number of team members to show", 'the7mk2'),
			"param_name" => "number",
			"type" => "textfield",
			"value" => "12",
			"description" => __("(Integer)", 'the7mk2'),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"heading" => __("Order by", 'the7mk2'),
			"param_name" => "orderby",
			"type" => "dropdown",
			"value" => array(
				"Date" => "date",
				"Author" => "author",
				"Title" => "title",
				"Slug" => "name",
				"Date modified" => "modified",
				"ID" => "id",
				"Random" => "rand"
			),
			"description" => __("Select how to sort retrieved posts.", 'the7mk2'),
			"edit_field_class" => "vc_col-sm-6 vc_column",
		),
		array(
			"heading" => __("Order way", 'the7mk2'),
			"param_name" => "order",
			"type" => "dropdown",
			"value" => array(
				"Descending" => "desc",
				"Ascending" => "asc"
			),
			"description" => __("Designates the ascending or descending order.", 'the7mk2'),
			"edit_field_class" => "vc_col-sm-6 vc_column",
		),
		// Appearance group.
		array(
			"heading" => __("Appearance", 'the7mk2'),
			"param_name" => "type",
			"type" => "dropdown",
			"value" => array(
				"Masonry" => "masonry",
				"Grid" => "grid"
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"group" => __( "Appearance", 'the7mk2' ),
		),
		array(
			"heading" => __("Gap between team members (px)", 'the7mk2'),
			"param_name" => "padding",
			"type" => "textfield",
			"value" => "20",
			"description" => __("Team member paddings (e.g. 5 pixel padding will give you 10 pixel gaps between team members)", 'the7mk2'),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"group" => __( "Appearance", 'the7mk2' ),
		),
		array(
			"heading" => __( "Team Mender Design", 'the7mk2' ),
			"param_name" => "dt_title",
			"type" => "dt_title",
			"group" => __( "Appearance", 'the7mk2' ),
		),
		array(
			"heading" => __("Background under team members", 'the7mk2'),
			"param_name" => "members_bg",
			"type" => "dropdown",
			"value" => array(
				"Enabled" => "true",
				"disabled" => "false",
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"group" => __( "Appearance", 'the7mk2' ),
		),
		array(
			"heading" => __("Images sizing", 'the7mk2'),
			"param_name" => "images_sizing",
			"type" => "dropdown",
			"value" => array(
				"preserve images proportions" => "original",
				"resize images" => "resize",
				"make images round" => "round",
			),
			"group" => __( "Appearance", 'the7mk2' ),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"heading" => __("Images proportions", 'the7mk2'),
			"param_name" => "proportion",
			"type" => "textfield",
			"value" => "",
			"dependency" => array(
				"element" => "images_sizing",
				"value" => array( 'resize' ),
			),
			"description" => __("Width:height (e.g. 16:9). Leave this field empty to preserve original image proportions.", 'the7mk2'),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"group" => __( "Appearance", 'the7mk2' ),
		),
		array(
			"value" => array( "Show excerpts" => "true" ),
			"param_name" => "show_excerpts",
			"type" => "checkbox",
			"group" => __( "Appearance", 'the7mk2' ),
		),
		// Responsiveness group.
		array(
			"heading" => __("Responsiveness", 'the7mk2'),
			"param_name" => "responsiveness",
			"type" => "dropdown",
			"value" => array(
				"Post width based" => "post_width_based",
				"Browser width based" => "browser_width_based",
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"group" => __("Responsiveness", 'the7mk2'),
		),
		array(
			"heading" => __("Column target width (px)", 'the7mk2'),
			"param_name" => "column_width",
			"type" => "textfield",
			"value" => "370",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"post_width_based",
				),
			),
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"group" => __("Responsiveness", 'the7mk2'),
		),
		array(
			"heading" => __("Desired columns number", 'the7mk2'),
			"param_name" => "columns",
			"type" => "textfield",
			"value" => "2",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"post_width_based",
				),
			),
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"group" => __("Responsiveness", 'the7mk2'),
		),
		array(
			"heading" => __("Columns on Desktop", 'the7mk2'),
			"param_name" => "columns_on_desk",
			"type" => "textfield",
			"value" => "3",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"group" => __("Responsiveness", 'the7mk2'),
		),
		array(
			"heading" => __("Columns on Horizontal Tablet", 'the7mk2'),
			"param_name" => "columns_on_htabs",
			"type" => "textfield",
			"value" => "3",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"group" => __("Responsiveness", 'the7mk2'),
		),
		array(
			"heading" => __("Columns on Vertical Tablet", 'the7mk2'),
			"param_name" => "columns_on_vtabs",
			"type" => "textfield",
			"value" => "3",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"group" => __("Responsiveness", 'the7mk2'),
		),
		array(
			"heading" => __("Columns on Mobile Phone", 'the7mk2'),
			"param_name" => "columns_on_mobile",
			"type" => "textfield",
			"value" => "3",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"group" => __("Responsiveness", 'the7mk2'),
		),
	)
) );
