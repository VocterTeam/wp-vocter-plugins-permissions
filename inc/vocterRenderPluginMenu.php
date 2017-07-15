<?php function vocterRenderPluginMenu(){ ?>
	<div class="v-permissions">
		<form action="<?php echo esc_url( admin_url('admin-post.php') ). '?page=vocter_plugins_permissions'; ?>" class="v-form" method="POST">
			<input type="hidden" name="action" value="contact_form">

			<?php $vocter_users = get_users(); ?>


			<h3>Users</h3>
			<select id="userlist" name="userlist" class="v-userlist">
				<option selected hidden>Select user</option>
				<?php foreach($vocter_users as $user): ?>
					
					<?php $vocter_plugins_usermeta = htmlspecialchars(json_encode(get_user_meta($user->id, 'vocter_hidden_plugins')[0]), ENT_QUOTES, 'UTF-8'); ?>	

					<option value="<?php echo $user->id; ?>" data-hidden-plugins="<?php echo $vocter_plugins_usermeta; ?>">
						<?php echo $user->display_name; ?>
					</option>
				<?php endforeach; ?>

			</select>
			
			<div class="v-loader v-transition">
				<img src="<?php echo plugins_url('../public/img/loader.svg', __FILE__); ?>" alt="loader" />
			</div>

			<fieldset class="v-check-actions">
			    <button type="button" id="checkAllPlugins" class="button action">Select All</button>
			    <button type="button" id="uncheckAllPlugins" class="button action">Unselect All</button>
			</fieldset>

			<br />
			<!-- inject static plugins list template-->
			<?php require_once plugin_dir_path(__FILE__). 'vocterPluginsListGenerations.php'; ?>
			<br />

			<input type="submit" id="vocterHidePluginsSubmit" class="button button-primary button-large" value="Save settings" disabled />		
		</form>
	</div>
	 
<?php }?>


