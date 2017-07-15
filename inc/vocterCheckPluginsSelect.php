<?php

function vocterCheckPluginsSelect() { ?>
	<?php $vocter_checked_plugins = $_POST['plugins']; ?>		
	<?php $vocter_checked_users_id = $_POST['userlist']; ?>

		<?php if(count($vocter_checked_plugins) == 0): ?>
			<?php $vocter_checked_plugins = array(''); ?>
		<?php endif; ?>

	<?php update_user_meta( $vocter_checked_users_id, 'vocter_hidden_plugins', $vocter_checked_plugins); ?>
		
	<?php wp_redirect(admin_url('admin.php?page=vocter_plugins_permissions'));
}
add_action('admin_post_nopriv_contact_form', 'vocterCheckPluginsSelect');
add_action('admin_post_contact_form', 'vocterCheckPluginsSelect');