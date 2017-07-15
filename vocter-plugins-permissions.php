<?php

/*
Plugin Name: Vocter Plugins Permissions
Description: A Plugin for management plugin purposes
Version: 1.0.0
Author: Vocter
Author URI: http://vocter.com/
 */

require_once plugin_dir_path(__FILE__) . 'inc/vocterTrimVal.php';
require_once plugin_dir_path(__FILE__) . 'inc/vocterEnqueueAssets.php';

require_once plugin_dir_path(__FILE__) . 'inc/vocterRenderPluginMenu.php';
require_once plugin_dir_path(__FILE__) . 'inc/vocterCreateMenuItem.php';
require_once plugin_dir_path(__FILE__) . 'inc/vocterCheckPluginsSelect.php';

require_once plugin_dir_path(__FILE__) . 'inc/vocterUserAjaxChange.php';
require_once plugin_dir_path(__FILE__) . 'inc/vocterHidePluginsFromPluginsPage.php';

if(!function_exists('wp_get_current_user')) {
    include(ABSPATH . "wp-includes/pluggable.php"); 
}

if (current_user_can('administrator')) {
	add_action("admin_menu", "vocterCreateMenuItem");
}
