<?php

function vocterHidePluginsFromPluginsPage() {
	global $wp_list_table;

	$vocter_current_user = wp_get_current_user();
	$vocter_hide_arr = array();
	$vocter_hidden_plugins_arr = get_user_meta($vocter_current_user->ID, 'vocter_hidden_plugins')[0];
	$vocter_all_plugins = $wp_list_table->items;

	foreach ($vocter_hidden_plugins_arr as $hidden_plugins_val) {
		if (isset($vocter_all_plugins[$hidden_plugins_val])) {
			unset($wp_list_table->items[$hidden_plugins_val]);
		}
	}

}

add_action('pre_current_active_plugins', 'vocterHidePluginsFromPluginsPage');