<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

$current_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>

<h1>Settings the Share BuddyPress activity Pluso plugin</h1>

<form id="mxsbap_form_update" class="mx-settings" method="post" action="">

	<div class="mx-block_wrap">

		<h2>Script</h2>
		<textarea name="mxsbap_script_body" id="mxsbap_script_body"><?php echo mxsbap_select_script(); ?></textarea>
	
	</div>

	<div class="mx-block_wrap">

		<h2>Block for icons</h2>
		<textarea name="mxsbap_block_body" id="mxsbap_block_body"><?php echo mxsbap_select_block_icons(); ?></textarea>

		<p>
			<ul class="mx-hint_text">
				<li><b>%PAGE-URL%</b> - Link to activity element (do not change).</li>
				<li><b>%TITLE%</b> - The title of the site (You can change it to your liking).</li>
				<li><b>%DESCRIPTION%</b> - Activity element description (is created automatically).</li>
			</ul>
		</p>

		<p class="mx-submit_button_wrap">
			<input type="hidden" id="mxsbap_wpnonce" name="mxsbap_wpnonce" value="<?php echo wp_create_nonce( 'mxsbap_nonce_request' ) ;?>" />

			<input type="hidden" id="mxsbap_current_url" name="mxsbap_current_url" value="<?php echo $current_url; ?>">

			<div class="mx-restore_data">
				<label for="mxsbap_restore_data">Restore data by default</label>
				<input type="checkbox" class="button preview" id="mxsbap_restore_data" />
			</div>

			<input class="button-primary" type="submit" name="mxsbap-submit" value="Save" />
		</p>
	</div>

	<div class="mx-block_wrap">

		<h3>Change layout and appearance of the buttons</h3>

		<p>
			To change the appearance of the buttons, visit the site <a href="http://share.pluso.ru/" target="_blank">share.pluso.ru</a>.
		</p>

		<p>
			Next you need to select those buttons that interest you.
			<br>
			<a target="_blank" href="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img1.jpg'; ?>" class="thickbox" rel="504c2221babf12b054c989559594eaec">
				<img src="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img1.jpg'; ?>">
			</a>
		</p>

		<p>
			The next step is to copy the Pluso code.
			<br>
			<a target="_blank" href="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img2.jpg'; ?>" class="thickbox" rel="504c2221babf12b054c989559594eaec2">
				<img src="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img2.jpg'; ?>">
			</a>
			<a target="_blank" href="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img3.jpg'; ?>" class="thickbox" rel="504c2221babf12b054c989559594eaec2">
				<img src="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img3.jpg'; ?>">
			</a>
		</p>

		<p>
			And paste into special places on your site.
			<br>
			<a target="_blank" href="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img4.jpg'; ?>" class="thickbox" rel="504c2221babf12b054c989559594eaec3">
				<img src="<?php echo MXSBAP_PLUGIN_URL . 'includes/admin/assets/img/img4.jpg'; ?>">
			</a>
		</p>

		<p>
			Then click "Save".
		</p>

		<p>
			Pay attention to the following constants: <b>%PAGE-URL%</b>, <b>%TITLE%</b>, <b>%DESCRIPTION%</b>. <br />
			For proper operation these constants should be located in special places.

			<ul class="mx-hint_text">
				<li>data-url="<b>%PAGE-URL%</b>"</li>
				<li>data-title="<b>%TITLE%</b>"</li>
				<li>data-description="<b>%DESCRIPTION%</b>"</li>
			</ul>
			
		</p>

	</div>

</form>