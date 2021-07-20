<?php
//responsive meta
<meta name="viewport" content="width=device-width">



//post query
while (heve_posts()){
    the_post();
    the_title();
    the_permalink();
    the_content();
}


//echo or not to echo : get_functions() needs echo to be shown

//does this page has  prents ? 
//if no : wp_get_post_parent_id(get_the_ID()) == 0             false;
//if yes: wp_get_post_parent_id(get_the_ID()) == any number    true ;
if(wp_get_post_parent_id(get_the_ID()))


//pages
Wp_list_pages() // use the arrgument for customization as an ASSOCIATIVE ARRAY
wp_list_pages(array(
    'title_li' => NULL,
    'child_of' => wp_get_post_parent_id(get_the_ID()), //show brothers and sisters
    'sort_column' => 'menu_order',                     //set a order on page edit tab 
  )

get_pages()     // really simular to wp_list_pages() but it keep the result in memory not echo anything
