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
    

