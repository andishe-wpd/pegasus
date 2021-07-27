<?php //last choice to show --end of the line
get_header();?>
 <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">BEST CHOICE PEGASUS </h1>
        <div class="page-banner__intro">
          <p>rich get richer poor get poorer</p>
        </div>
      </div>
    </div>
</div>
<section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Latest Properties</h2>
          <span></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>         
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
              <div class="col-md-4">
              <?php
              $latestp = new WP_Query(array(
                   'post_type' => 'real_estate',
                  'posts_per_page' => 9,
                ));
                while($latestp->have_posts()){
                  $latestp -> the_post(  );
                  ?>
              <article class="aa-properties-item">
                  <a href="<?php the_permalink(  ) ?>" class="aa-properties-item-img">
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
                    <p><?php the_content() ?></p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      <?php the_field('price'); echo ' $'?>
                    </span>
                    <a href="<?php the_permalink(  ) ?>" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
                </article>
            
                  <?php
                }
                ?>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
get_footer();
?>