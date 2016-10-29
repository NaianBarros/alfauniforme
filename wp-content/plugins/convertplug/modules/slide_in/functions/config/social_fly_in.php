<?php
if(function_exists("smile_framework_add_options")){
// Optin to Win Style
	$cp_settings = get_option('convert_plug_settings');
	$user_inactivity = isset( $cp_settings['user_inactivity'] ) ? $cp_settings['user_inactivity'] : '60';
	$style = isset( $_GET['style'] ) ? $_GET['style'] : '';
	smile_framework_add_options('Smile_Slide_Ins',"social_fly_in",
		array(
			"style_name" 		=> "Social Fly_In",
			"demo_url"			=> plugins_url("../../assets/demos/social_fly_in/social_fly_in.html",__FILE__),
			"demo_dir"			=> plugin_dir_path( __FILE__ )."../../assets/demos/social_fly_in/social_fly_in.html",
			"img_url"			=> plugins_url("../../assets/demos/social_fly_in/social_fly_in.png",__FILE__),
			"customizer_js"		=> plugins_url("../../assets/demos/social_fly_in/customizer.js",__FILE__),
			"category"          => "All,Social",
			"tags"              => "Social,Share,Facebook,Twitter,Google,Digg,Reddit,Pinterest,LinkedIn,Myspace,Blogger,Tumblr,StumbleUpon",
			"options"			=> array(
			),
		)
	);
}