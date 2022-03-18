  <?php get_header();?>
  <div class="container">
      <div class="row">
          <div class="col-md-12 text-center">
              <?php the_custom_logo();?>
          </div>
      </div>
      <div class="row d-flex">
          <div class="col-md-12 menubar">
            
              <?php 
  wp_nav_menu(array(
  'theme_location'=>'primary',
  ))

  ?>
          </div>
      </div>
      <div class="row">
        <!-- <img src="<?php echo get_custom_header()->url;?>">  -->
        <img src="<?php header_image()?>" class="img-fluid" width="<?php echo absint(get_custom_header()->width)?>" width="<?php echo absint(get_custom_header()->height)?>"> 
          <div class="col-md-8 my-3">
              <?php 
  if ( have_posts() ) : 
      while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink()?>"><?php the_post_thumbnail('home-featured')?></a><br>
             <a href="<?php the_permalink()?>"><div class="alert alert-success"><?php the_title()?></div></a>
              <p><?php the_excerpt()?></p>
              <?php
      endwhile; 
  endif; 
  ?>
 <?php
   echo paginate_links(); 
   
 ?>
          </div>
          <div class="col-md-4 my-3">
              <h4 class="text-center">Main Sidebar</h4>
              <?php get_sidebar()?>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 text-center">
              <?php get_footer();?>
          </div>
      </div>

  </div>