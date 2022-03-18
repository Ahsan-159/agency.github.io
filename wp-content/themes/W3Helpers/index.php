<?php
    get_header();
?>
<div class="container p-2 text-center">
    <a href=""><?php the_custom_logo();?></a>
</div>
<div class="container bg-dark text-light justify-content-center">
   <!-- <?php
       wp_nav_menu( array(
        'theme_location'=>'primary'

       ));
       
   ?> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">  <?php
       wp_nav_menu( array(
        'theme_location'=>'primary'

       ));
       
   ?></a></span></a>
      </li>
     
    </ul>
  </div>
</nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 bg-danger">
        <?php
            if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>  
        <p><?php
            the_content ();        
        ?></p>
        <?php
        endwhile; 
        endif; 
        ?>
        </div>
        <div class="col-md-4 bg-secondary">
        <?php get_sidebar();?>
        </div>
    </div>
    <div class="row">
  <div class="col-md-12">
  <?php
   dynamic_sidebar('footer-sidebar');
  
?>
  </div>
    </div>
</div>
<?php

    get_footer();    
?>