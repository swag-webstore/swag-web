<table class="wpps_input widefat" id="wpps_options">

	<tbody>
		
		<?php do_action( 'wpps_general_meta_box_start', $settings ); ?>

		<tr id="status">
			
			<td class="label">
				<label>
					<?php _e( 'Status', 'wpps' ); ?>
				</label>
				<p class="description"><?php _e( 'Enable or Disable the page slide on your site', 'wpps' ); ?></p>
			</td>
			<td>
				<p><label><input type="radio" value="disabled" name="settings[status]" <?php checked( $settings['status'], 'disabled' ) ?> /><span><?php _e( 'Disabled', 'wpps' ) ?></span><label></p>
				<p><label><input type="radio" value="enabled" name="settings[status]" <?php checked( $settings['status'], 'enabled' ) ?> /><span><?php _e( 'Enabled', 'wpps' ) ?></span><label></p>
			</td>
			
		</tr>

		<tr id="click-trigger">
			
			<td class="label">
				<label>
					<?php _e( 'Activate on Click', 'wpps' ); ?>
				</label>
				<p class="description"><?php _e( 'If you set this option to yes auto slide will not work. The pageslide will work but only on click event on an element with css class <strong>trigger-pageslide</strong>', 'wpps' ); ?></p>
			</td>
			<td>
				<p><label><input type="radio" value="disabled" name="settings[link-trigger]" <?php checked( $settings['link-trigger'], 'disabled' ) ?> /><span><?php _e( 'Disabled', 'wpps' ) ?></span><label></p>
				<p><label><input type="radio" value="enabled" name="settings[link-trigger]" <?php checked( $settings['link-trigger'], 'enabled' ) ?> /><span><?php _e( 'Enabled', 'wpps' ) ?></span><label></p>
			</td>
			
		</tr>


		<tr id="direction">
			
			<td class="label">
				<label>
					<?php _e( 'Direction', 'wpps' ); ?>
				</label>
				<p class="description"><?php _e( 'Select the direction from which slide will appear', 'wpps' ); ?></p>
			</td>
			<td>
				<p><label><input type="radio" value="left" name="settings[direction]" <?php checked( $settings['direction'], 'left' ) ?> /><span><?php _e( 'Left', 'wpps' ) ?></span><label></p>
				<p><label><input type="radio" value="right" name="settings[direction]" <?php checked( $settings['direction'], 'right' ) ?> /><span><?php _e( 'Right', 'wpps' ) ?></span><label></p>
			</td>
			
		</tr>

		<tr id="_content">
			
			<td class="label">
				<label>
					<?php _e( 'Content', 'wpps' ); ?>
				</label>
				<p class="description"><?php _e( 'The content which will appear inside the slide', 'wpps' ); ?></p>
			</td>
			<td>
				<?php if ( function_exists( 'wp_editor' ) ): ?>
					<?php wp_editor( $settings['content'], 'content' ); ?>
				<?php else: ?>
					<textarea rows="16" name="content"><?php echo $settings['content'] ?></textarea>
				<?php endif; ?>
			</td>
			
		</tr>

		<?php do_action( 'wpps_general_meta_box_end', $settings ); ?>

	</tbody>

</table>