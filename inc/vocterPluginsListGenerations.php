<?php if (!function_exists('get_plugins')) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$vocter_plugins = get_plugins();?>

<!-- .v-plugins -->
<div class="v-plugins">
	<h3>Plugins</h3>
	<fieldset class="v-plugins-list">
		<?php foreach ($vocter_plugins as $plugin_key => $plugin): ?>
			<?php $trimmedPluginName = vocterTrimVal($plugin['Name']);?>

			<div class="v-plugins-list__item">
				<input type="checkbox" name="plugins[]" id="<?php echo $trimmedPluginName; ?>" value="<?php echo $plugin_key; ?>" />
				<label for="<?php echo $trimmedPluginName; ?>" class="v-transition"><?php echo $plugin['Name']; ?></label>
			</div>
		<?php endforeach;?>
	</fieldset>
</div>
<!-- END:.v-plugins -->