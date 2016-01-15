<?php
/**
 * Custom User Profile fields
 * @package Corpobox
 */
add_action( 'show_user_profile', 'corpobox_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'corpobox_show_extra_profile_fields' );

function corpobox_show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="twitter">Twitter</label></th>

			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter username.</span>
			</td>
		</tr>

		<tr>
			<th><label for="google-plus">Google+</label></th>

			<td>
				<input type="text" name="google" id="google" value="<?php echo esc_attr( get_the_author_meta( 'google', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter only the username of your Google+ page.</span>
			</td>
		</tr>

		<tr>
			<th><label for="fb">Facebook</label></th>

			<td>
				<input type="text" name="fb" id="fb" value="<?php echo esc_attr( get_the_author_meta( 'fb', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter only the username of your Facebook page.</span>
			</td>
		</tr>

	</table>
<?php }

// Saving the custom user fields

add_action( 'personal_options_update', 'corpobox_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'corpobox_save_extra_profile_fields' );

function corpobox_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
	update_user_meta( $user_id, 'google', $_POST['google'] );
	update_user_meta( $user_id, 'fb', $_POST['fb'] );
}