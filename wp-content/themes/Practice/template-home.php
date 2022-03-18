<?php
/*
Template Name: Home Template
*/
?>
<?php get_header();?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <?php the_custom_logo();?>
        </div>
    </div>
    <div class="row d-flex">
        <div class="col-md-12 flex-fill">
            <?php 
  wp_nav_menu(array(
  'theme_location'=>'primary',
  ))

  ?>
        </div>
    </div>
    <div class="row">
        <!-- <?php
           $img_url=get_the_post_thumbnail_url(get_the_ID(),'full');
       ?>
        <img src="<?php echo $img_url?>" alt="<?php echo get_the_title()?>" class="img-fluid"> -->
        <!-- Set up your HTML -->
<div class="owl-carousel">
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
</div>
        <div class="col-md-8 my-3">
            <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
            <!-- <a href="<?php the_permalink()?>"><?php the_post_thumbnail('home-featured')?></a><br> -->
            <a href="<?php the_permalink()?>">
                <h4><?php the_title()?></h4>
            </a>
            <p><?php the_excerpt()?></p>
            <?php
        endwhile; 
    endif; 
    ?>
    <div class="row">
        <div class="col-md-6">
            <div class="h3">Latest From Technology</div>
            <?php 
            $args=array(
                'cat'=>6
            );
            $tech_post=new WP_Query($args);
            if($tech_post->have_posts()):
                while( $tech_post->have_posts()) : $tech_post->the_post();?>
                    <!-- <h3><a href="<?php echo get_the_permalink(get_the_ID())?>"></a><?php the_title()?></a></h3> -->
                    <a href="<?php echo get_the_permalink(get_the_ID())?>"><?php the_title()?></a>
                <?php 
                endwhile;
        endif;
                wp_reset_postdata();
                ?>
        </div>
        <div class="col-md-6">
            <div class="h3">Latest From Social Media</div>
            <?php 
            $S_args=array(
                // 'cat'=>1,
                'post_type'=>'service',
                'post_per_page'=>1
            );
            $social_post=new WP_Query($S_args);
            if($social_post->have_posts()):
                while($social_post->have_posts()) : $social_post->the_post();?>
                    <a href="<?php echo get_the_permalink(get_the_ID())?>"><?php the_title()?></a>
                <?php 
                endwhile;
        endif;
                ?>
        </div>
    </div>
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