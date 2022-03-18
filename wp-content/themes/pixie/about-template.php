<?php
/*Template Name: About template*/
get_header();
?>

    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="about-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>About Us</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-image">
              <!-- <img src="<?php echo get_template_directory_uri()?>/assets/images/about-us.jpg" alt=""> -->
              <?php dynamic_sidebar('about-img')?> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <!-- <h4>Phasellus vel interdum elit</h4> -->
             <?php dynamic_sidebar('about-desc')?>
            </div>
            <div class="share my-4">
              <?php dynamic_sidebar('footer-icons')?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->
<?php get_footer();?>