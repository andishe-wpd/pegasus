<?php
function function_that_register_new_post_type(){
    register_post_type( 'events', array(
        //here we use assstive array 
        //1st step to add it into dashboard
        'public' => true,
        //change the post type name lable to smt else 
        'labels' => array(
            //wow it uses a new assstive array here too
            'name' => 'events',
            'add_new_item' => 'add new event',
            'edit_item' => 'edit event',
            'all_items' => 'all events',
            'singular_name' => 'event'
        ),
        //now set a new icon for this :
        'menu_icon' => 'dashicons-calender'
    ) );
}
add_action('init','function_that_register_new_post_type')
//what if we want to change the theme later
//we know this custom post types now lives on cyrrent theme files 
// => the importance of using MU-plugins
?>


<?php

function university_post_types() {
  register_post_type('event', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'), //you can use custom fields here
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));
}

add_action('init', 'university_post_types');