<?php
/**
* Plugin Name: Schema Factory Free
* Plugin URI: https://schemaplugin.com
* Description: A quick and easy way to add valid & search engine friendly JSON-LD schema data to your site without messing around with code.
* Version: 1.0.1
* Author:  Web Design & Company 
* Author URI: https://webdesignandcompany.com
* Text Domain: schema-factory-free
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
*/

define('WDAC_PLUGIN_PATH',plugin_dir_path( __FILE__ ));
define('WDAC_PLUGIN_URL',plugin_dir_url( __FILE__ ));

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define WC_PLUGIN_FILE.
if ( ! defined( 'WDAC_PLUGIN_FILE' ) ) {
	define( 'WDAC_PLUGIN_FILE', __FILE__ );
}

spl_autoload_register(function($class) {

		if(file_exists(WDAC_PLUGIN_PATH.'classes/controller/'.$class . '.php'))
    		require_once WDAC_PLUGIN_PATH.'classes/controller/'.$class . '.php';
    	if(file_exists(WDAC_PLUGIN_PATH.'classes/model/'.$class . '.php'))
     		require_once WDAC_PLUGIN_PATH.'classes/model/'.$class . '.php';
     	if(file_exists(WDAC_PLUGIN_PATH.'classes/view/'.$class . '.php'))
     		require_once WDAC_PLUGIN_PATH.'classes/view/'.$class . '.php';
});

register_activation_hook( __FILE__, 'wdac_initiate_options' );

function wdac_initiate_options()
{
	$wdac_option = array(
		'wdac_business_name'=>get_bloginfo( 'name' )
		);

	update_option('wdac_options',json_encode($wdac_option));
}

if(is_admin())
 	new WDAC_ADMIN_CONTROLLER();
else
	new WDAC_CONTROLLER();

