<?php get_header();
while(have_posts()){
    the_post(); ?>
 
 <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title() ?>  </h1>
        <div class="page-banner__intro">
          <p>replace this section with dynamic custom field. ok bro ? </p>
        </div>
      </div>
    </div>
  

    <div class="container container--narrow page-section">
    <?php if(wp_get_post_parent_id(get_the_ID())){?>
              <div class="metabox metabox--position-up metabox--with-home-link">
              <p>
                <a class="metabox__blog-home-link" href="<?php echo get_the_permalink(wp_get_post_parent_id(get_the_ID())) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title(wp_get_post_parent_id(get_the_ID()));   ?></a> <span class="metabox__main"><?php the_title(); ?></span>
              </p>
            </div><?php
    } 
    ?>


      <div class="page-links">
        <h2 class="page-links__title">
          <?php 
            if (wp_get_post_parent_id( get_the_ID() )){
              
              ?><a href="<?php echo get_permalink( wp_get_post_parent_id( get_the_ID() ) ); ?>"><?php echo get_the_title( wp_get_post_parent_id( get_the_ID() ) );?></a><?php
            }
            else{
              ?><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a><?php
            }
          ?>
        </h2>
        <ul class="min-list">
          <?php
          if (wp_get_post_parent_id( get_the_id() )){
            wp_list_pages(array(
              'title_li' => NULL,
              'child_of' => wp_get_post_parent_id(get_the_ID()),
              'sort_column' => 'menu_order',
            ));
          }else{
            wp_list_pages(array(
              'title_li' => NULL,
              'child_of' => get_the_ID()
            ));
          };
           ?>
        </ul>
      </div>

      <div class="generic-content">
        <?php the_content();?>
      </div>
    </div>


<?php
}






 get_footer() ?>