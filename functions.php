<?php $MY_TEXTDOMAIN = 'domogik_v1'; ?>

<?php ini_set('display_errors', 'On'); ?>

<?php
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 )
?>

<?php
// For theme i18n
add_action('after_setup_theme', 'setup');

function setup() {
    load_theme_textdomain(wp_get_theme()->get('TextDomain'), get_template_directory() . '/languages');
}
?>


    

