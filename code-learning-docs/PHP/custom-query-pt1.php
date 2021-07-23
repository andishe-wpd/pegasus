default query : wordpress look at the slug to detect the curl_multi_getcontent
what is custom query :
dont care the URL slug , i will show you which data we need to see.
ex: loading blog post on front page.


<?php
//defult query
while(have_posts(  )){
    the_post(  );
    the_title(  );
}
?>
lets take a look to OOP programming:
<?php
$dog = new animal();
$cat = new animal();
$dog -> drink_water()
?>

<?php
//1- custom query
$homepageposts = new WP_Query(array(
    //assosiative array
    "post_type" => 'post or page or '
    'post_per_page' => 2,                    //defult is SIMPLEPIE_TYPE_RSS_10
    'category_name' => 'categoryname',


));
//2- while loop
while($homepageposts->have_posts(  )){
    $homepageposts->the_post();
    the_title( );
    the_excerpt(  ); //or
    wp_trim_words( get_the_content( ) , 18  );

}

?>