<!-- ordering BY  custom queries -->
<?php
$ourvar == php_function(); //we use it in line 13 
$latestp = new WP_Query(array(
                'post_type' => 'real_estate',
                  'posts_per_page' => 9, // -1 is all posts
                  'meta_key' => 'custom field name',
                  'orderby' => 'meta_value_num', //defult is (post_date) //we can use : 'title'  // we can use rand
                  'meta_query' => array(
                      array(
                          'key' => 'custom field name' ,
                          'compare' => 'custom field condition   >=  =<  ==  ' ,
                          'value' =>  'what is we want to compare' or $ourvar,
                          'type' => 'numeric'
                      )
                      ),
                  'order' => 'ASC'  //defult is DESC  
                ));
                while($latestp->have_posts()){
                  $latestp -> the_post(  );
                  ?>
