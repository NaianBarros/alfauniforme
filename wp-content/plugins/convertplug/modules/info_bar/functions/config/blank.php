<?php
if(function_exists("smile_framework_add_options")){

	$cp_settings = get_option('convert_plug_settings');
	$user_inactivity = isset( $cp_settings['user_inactivity'] ) ? $cp_settings['user_inactivity'] : '3000';
	$style = isset( $_GET['style'] ) ? $_GET['style'] : '';
	smile_framework_add_options('Smile_Info_Bars',"blank",
		array(
			"style_name" 		=> "Blank",
			"demo_url"			=> plugins_url("../../assets/demos/blank/blank.html",__FILE__),
			"demo_dir"			=> plugin_dir_path( __FILE__ )."../../assets/demos/blank/blank.html",
			"img_url"			=> plugins_url("../../assets/demos/blank/blank.png",__FILE__),
			"customizer_js"		=> plugins_url("../../assets/demos/blank/customizer.js",__FILE__),
			"category"          => "All,Offers",
			"tags"              => "tshirt,t-shirt,subscribe,join,offers",
			"options"			=> array()
		)
	);
}
