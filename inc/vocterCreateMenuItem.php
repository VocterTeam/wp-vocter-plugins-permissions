<?php

function vocterCreateMenuItem() {
	add_menu_page("Vocter Plugins Permissions", "Vocter Plugins Permissions", 0, "vocter_plugins_permissions", "vocterRenderPluginMenu", plugins_url('../public/img/logo.png', __FILE__));
}
