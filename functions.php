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

    // Custom string translations that will be displayed in Domogik Admin panel (Settings - Language module)
    // Call it with : pll__('my_string') in php page
    pll_register_string('View all posts', 'view_all_posts');
    pll_register_string('View all blog entries', 'view_all_blog_entries');
    pll_register_string('Edit', 'edit');
	pll_register_string('Next page', 'next_page');
	pll_register_string('Previous page', 'previous_page');

	
}?>

<?php
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 )
?>


    

