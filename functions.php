<?php
if ( function_exists('register_sidebar') )
register_sidebar();


if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Header',
        'before_widget' => '<div id="header">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

}?>

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
    load_theme_textdomain('domogik_v1', get_template_directory() . '/languages');
}
?>


    

