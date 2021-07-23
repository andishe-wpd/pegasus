<!-- function.php -->
<!-- lets set a new custom post type -->
<?php
function function_that_register_new_post_type(){
    register_post_type( 'events', array(
        //here we use assstive array 
        //1st step to add it into dashboard
        'public' => true,
        //change the post type name lable to smt else 
        'labels' => array(
            //wow it uses a new assstive array here too
            'name' => 'events'
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