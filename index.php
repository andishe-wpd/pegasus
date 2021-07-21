<?php
get_header();?>
 <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">welcome to our blog</h1>
        <div class="page-banner__intro">
          <p>keep up wuth latest news </p>
        </div>
      </div>
    </div>
</div>
<div class="container container--narrow page-section">
  <?php
  while(have_posts()){
    the_post();?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"><?php the_title( ) ?></h2>
      <div class="metabox">
        <p>postet by <?php the_author_posts_link() ?> on <?php  ?> in <?php ?></p>
      </div>
      <div class="generic-content">
        <p><?php the_excerpt(  ) ?></p>
        <p><a class="btn btn--blue" href="<?php echo the_permalink() ?>">continue reading</a></p>
      </div>
    </div>
  <?php }
  ?>
</div>     
<?php
get_footer();
?>