<?php
/**
 * Plugin admin class.
 */
class The7PT_Admin {

	/**
	 * Setup plugin admin part.
	 */
	public static function setup() {
		// Add theme options menu items.
		add_filter( 'presscore_options_menu_config', array( __CLASS__, 'add_theme_options_menu_items' ), 20 );

		// Add theme options.
		add_filter( 'presscore_options_files_list', array( __CLASS__, 'add_theme_options' ) );
		
		// Flush rewrite rules after options save.
		add_action( 'admin_init', array( __CLASS__, 'flush_rewrite_rules_on_modules_switch' ), 20 );

		// Add plugin action links only for the7 theme.
		$plugin_basename = The7PT()->plugin_basename();
		add_action( "plugin_action_links_{$plugin_basename}", array( __CLASS__, 'add_plugin_action_links' ) );
	}

	/**
	 * Add plugin specific theme options menu items.
	 *
	 * @param array $menu_items
	 *
	 * @return array
	 */
	public static function add_theme_options_menu_items( $menu_items = array() ) {
		$menu_slug = 'of-modules-menu';
		if ( ! array_key_exists( $menu_slug, $menu_items ) ) {
			$menu_items[ $menu_slug ] = array(
				'menu_title' => _x( 'Modules', 'backend', 'the7mk2' ),
			);
		}

		return $menu_items;
	}

	/**
	 * Add plugin specific theme options.
	 *
	 * @param array $files_list
	 *
	 * @return array
	 */
	public static function add_theme_options( $files_list = array() ) {
		$menu_slug = 'of-modules-menu';
		if ( ! array_key_exists( $menu_slug, $files_list ) ) {
			$files_list[ $menu_slug ] = The7PT()->plugin_path() . 'includes/theme-options/modules.php';
		}

		return $files_list;
	}

	/**
	 * Flush rewrite rules after modules switch.
	 */
	public static function flush_rewrite_rules_on_modules_switch() {
		$set = get_settings_errors( 'options-framework' );
		if ( $set && isset( $_GET['page'] ) && 'of-modules-menu' === $_GET['page'] ) {
			flush_rewrite_rules();
		}
	}

	/**
	 * Add plugin action links.
	 *
	 * @param array $links
	 *
	 * @return array
	 */
	public static function add_plugin_action_links( $links = array() ) {
		if ( defined( 'PRESSCORE_THEME_NAME' ) && current_user_can( 'edit_theme_options' ) ) {
			$links['the7pt_modules'] = '<a href="' . esc_url( 'admin.php?page=of-modules-menu' ) . '">' . __( 'Settings', 'the7pt' ) . '</a>';
		}

		return $links;
	}
}