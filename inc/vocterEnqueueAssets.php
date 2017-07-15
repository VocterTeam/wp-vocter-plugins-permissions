<?php 

function vocterEnqueueAssets(){
	wp_enqueue_style( 'vocter-plugins-permissions', plugins_url('../public/css/vocter-plugins-permissions.css', __FILE__));
	wp_enqueue_script( 'vocter-check-plugins-select', plugins_url('../public/js/vocterUsersAjaxChange.js', __FILE__ ), array(), '1.0.0', true );
	wp_enqueue_script( 'vocter-plugins-permissions', plugins_url('../public/js/vocterPluginPermissions.js', __FILE__ ), array(), '1.0.0', true );
}

add_action('admin_enqueue_scripts', 'vocterEnqueueAssets');


