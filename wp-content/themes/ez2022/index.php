<?php 
  get_header();
  if ( have_posts() ) :
    while ( have_posts() ) :
      the_post();
      ?>
        <div class="container-fluid col-xxl-8 p-5 page-<?php echo get_the_ID() ?>">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      <?php
    endwhile;
  endif;
  get_footer();
