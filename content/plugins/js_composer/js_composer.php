<?php
/**
 * Plugin Name: WPBakery Page Builder
 * Plugin URI: http://wpbakery.com
 * Description: 更多汉化主题、主题升级、问题咨询请访问：<strong><a href="http://www.4mudi.com">http://www.4mudi.com</a></strong>或我的<a href="http://wordpresszhuti.taobao.com">淘宝店</a>
 * Version: 6.0.5
 * Author: Michael M - WPBakery.com
 * Author URI: http://wpbakery.com
 *
 * @package WPBakery Page Builder
 */

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Current WPBakery Page Builder version
 */
if ( ! defined( 'WPB_VC_VERSION' ) ) {
	/**
	 *
	 */
	define( 'WPB_VC_VERSION', '6.0.5' );
}

$dir = dirname( __FILE__ );
define( 'WPB_PLUGIN_DIR', $dir );
define( 'WPB_PLUGIN_FILE', __FILE__ );

require_once $dir . '/include/classes/core/class-vc-manager.php';
/**
 * Main WPBakery Page Builder manager.
 * @var Vc_Manager $vc_manager - instance of composer management.
 * @since 4.2
 */
global $vc_manager;
if ( ! $vc_manager ) {
	$vc_manager = Vc_Manager::getInstance();
	// Load components
	$vc_manager->loadComponents();
}
