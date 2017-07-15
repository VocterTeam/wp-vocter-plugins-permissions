<?php
add_action('wp_ajax_vocter_userlist_action', 'vocterUserListActionHandler');

function vocterUserListActionHandler() {

	$vocter_selected_user_id = $_POST['userId'];

	if (isset($vocter_selected_user_id)): ?>

	<?php endif;?>

	<!-- inject dynamic(AJAX) plugins list template-->
	<?php require_once plugin_dir_path(__FILE__) . 'vocterPluginsListGenerations.php';?>

	<?php wp_die();
}?>
