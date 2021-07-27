<?php
  
  get_header();
  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php the_field('featured_image_2') ?>);"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p><?php the_field('price'); echo ' $'?></p>
        </div>
      </div>  
    </div>

    <div class="container container--narrow page-section">
    <article class="aa-properties-item">
                  <a  class="aa-properties-item-img">
                  <img src="<?php the_field('featured_image_2') ?>" alt="img">
                </a>
                <div class="aa-tag <?php the_field('kind') ?>">
                  <?php the_field('kind') ?>
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span><?php the_field('rooms'); echo ' Rooms' ?></span>
                    <span><?php the_field('beds'); echo ' Beds' ?></span>
                    <span><?php the_field('bath'); echo ' Bath' ?></span>
                    <span><?php the_field('sq_ft'); echo ' SQ FT' ?></span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="<?php the_permalink(  ) ?>"><?php the_title() ?></a></h3>
                    <!-- i just copy this to set smt palceholder -->
                    <p><?php the_content() ?></p>           
                    <p><?php the_content() ?></p>           
                    <p><?php the_content() ?></p>           
                    <p><?php the_content() ?></p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      <?php the_field('price'); echo ' $'?>
                    </span>
                    
                  </div>
                </div>
                </article>
                
    </div>
    

    
  <?php }

  get_footer();

?>