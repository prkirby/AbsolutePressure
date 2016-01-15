<?php
/**
 * @package Corpobox
 */

add_action( 'admin_init', 'corpobox_theme_settings_init' );
add_action( 'admin_menu', 'corpobox_add_settings_page' );

/*=SETUP----------------------------------------------------*/

function corpobox_theme_settings_init(){
	register_setting( 'corpobox_theme_settings', 'corpobox_theme_settings', 'corpobox_options_validate' );
}

function corpobox_admin_enqueue_scripts( $hook_suffix ) {
	$template_directory_uri = get_template_directory_uri();

	wp_enqueue_style( 'corpobox-theme-options', $template_directory_uri . '/theme-options/theme-options.css', false, '1.0.4' );
}

add_action( 'admin_print_styles-appearance_page_setting', 'corpobox_admin_enqueue_scripts' );

function corpobox_add_settings_page() {
	global $corpobox_admin_page;

	$corpobox_admin_page = add_theme_page( __( 'Theme Options', 'corpobox' ), __( 'Theme Options', 'corpobox' ), 'manage_options', 'setting', 'corpobox_theme_settings_page');

	// Contextual Help
	add_action( 'load-' . $corpobox_admin_page, 'corpobox_admin_contextual_help' );
}

/**
 * Options Page Build
 */

function corpobox_theme_settings_page() {	
?>

<div class="wrap">

<?php
if ( isset ($_GET['settings-updated']) ) { ?>
<div id="message" class="updated fade -message"><p><?php _e('Options Saved','corpobox'); ?></p></div>
<?php } ?>

<h2><?php $theme_name = wp_get_theme(); echo $theme_name ?><?php _e( ' Theme Options', 'corpobox' ) ?></h2>


<form method="post" action="options.php">

<?php settings_fields( 'corpobox_theme_settings' ); ?>
<?php $options = get_option( 'corpobox_theme_settings' ); ?>

<table class="form-table">

<tr valign="top">
<th scope="row"><?php _e( 'Custom Style', 'corpobox' ); ?></th>
<td>
<textarea id="corpobox_theme_settings[custom_style]" name="corpobox_theme_settings[custom_style]" style="width: 99%;max-width:400px;height:200px;"><?php if (!empty($options['custom_style'])) echo esc_textarea($options['custom_style']); ?></textarea>

<br />
<label class="description" for="corpobox_theme_settings[custom_style]"><?php _e( 'Enter your custom style css.','corpobox' ); ?></label>
</td>
</tr>

</table>

<p class="submit-changes">
<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'corpobox' ); ?>" />
</p>
</form>
</div><!--//wrap -->

<!--END Page Options-->


<?php
}

/*=Sanitize----------------------------------------------------*/
/*------------------------------------------------------------------*/
function corpobox_options_validate( $input ) {

	global $allowedtags;

	$output = $options = get_option( 'corpobox_theme_settings' );

		$output['custom_style'] = wp_kses($input['custom_style'], $allowedtags );

	return apply_filters( 'corpobox_options_validate', $output, $input, $options );
}

?>