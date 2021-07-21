<?php
function styleandscripts(){
    wp_enqueue_script('jsscriptsforthesakeofgod',get_theme_file_uri('/js/scripts-bundled.js'),NULL,'1.0',true);
    wp_enqueue_style('refertomaincss',get_stylesheet_uri(  ));
    wp_enqueue_style('fontawesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('googlefont','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}
add_action('wp_enqueue_scripts','styleandscripts');

// to add the page titles
function titlegenerator(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','titlegenerator');

//to add menu to theme features
function navborn(){
    register_nav_menu( 'headermenulocation' , 'header menu location' );
    register_nav_menu( 'footer1menu' , 'footer 1 menu' );
    register_nav_menu( 'footer2menu' , 'footer 2 menu' );
}
add_action('after_setup_theme','navborn');