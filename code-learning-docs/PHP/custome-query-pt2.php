<!-- using custom post type to set a new query -->
<?php
//CPT custom queries
$eventposts = new WP_Query(array(
    'post_types' => 'event',
    'post_per_page' => 2,
));
while($eventposts=>have_posts(  )){
    $eventposts=>the_post(  );
    the_title();
}

?>