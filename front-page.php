<?php get_header(); ?>
<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(http://localhost/pegasus/wp-content/uploads/2021/07/1.jpg)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">FIND YOUR DREAM HOUSE</h1>
        <h2 class="headline headline--medium">YOU HAVE MONEY ?&rsquo;WE WILL LOVE YOU.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#agg" class="btn btn--large btn--blue">Find Your agent</a>
      </div>
    </div>
    <div>
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
  <div class="botn">
  <p class="t-center no-margin"><a href="<?php echo site_url( '/real_estate' ) ?>" class="btn btn--blue">VIEW All PEGASUS PROPERTIES</a></p>
  </div>
  </div>
    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( 'images/bus.jpg' ) ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Transportation</h2>
                <p class="t-center">All students have free unlimited bus fare.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri( 'images/apples.jpg' ) ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>
  </div>
      <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
          <?php 
          $eventposts = new WP_Query(array(
            'post_type' => 'events',
            'posts_per_page' => 2,
          ));
          while($eventposts->have_posts(  )){
            $eventposts->the_post(  );?>
            <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php the_time('M') ?></span>
              <span class="event-summary__day"><?php the_time('y') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(  ) ?>"><?php the_title( ) ?></a></h5>
              <p><?php echo wp_trim_words(get_the_excerpt(  ) ,18 )  ?><br><a href="<?php  the_permalink(  ) ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
            
            <?php
        }
          ?>
          <p class="t-center no-margin"><a href="<?php echo site_url( "/events" ) ?>" class="btn btn--blue">View All Events</a></p>
        </div>
      </div>
      
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
          <?php 
          $homepageposts = new WP_Query(array(
            "posts_per_page" => 2
          ));
          while($homepageposts->have_posts()){
            $homepageposts->the_post();
            ?>
             <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month"><?php the_time('M') ?></span>
              <span class="event-summary__day"><?php the_time('y') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(  ) ?>"><?php the_title( ) ?></a></h5>
              <p><?php echo wp_trim_words(get_the_excerpt(  ) ,18 )  ?><br><a href="<?php  the_permalink(  ) ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
             <?php
          } wp_reset_postdata(  );
          ?>
          <p class="t-center no-margin"><a href="<?php echo site_url( "/blog" ) ?>" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>
    <section id="aa-agents">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-agents-area">
            <div class="aa-title">
              <h2>Our Agents</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- agents content -->
            <div id="agg" class="aa-agents-content">
              <ul class="aa-agents-slider">
                <?php
                $ouragent = new WP_Query(array(
                  'post_type' => 'agent',
                  'post_pre_page ' => 4,
                ));
                while($ouragent->have_posts(  )){
                  $ouragent->the_post();
                  ?>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="<?php the_field('iamge') ?>" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#"><?php the_field('name') ?></a></h4>
                      <span>Top Agent</span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <?php
                };
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Our Agent Section-->
<?php get_footer(); ?>