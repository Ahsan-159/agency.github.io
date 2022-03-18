<?php
/*
Template Name: Contact Template
*/
get_header();?>
    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Contact Us</h1>
            </div>
          </div>
          <?php 
          if(dynamic_sidebar('contact-left')=='true'){?>
            <div class="col-md-6">
            <div id="map">
          <?php dynamic_sidebar('contact-left');?>    
          </div>
          <?php }else { ?>
<div class="col-md-6">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1197183.8373802372!2d-1.9415093691103689!3d6.781986417238027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb96f349e85efd%3A0xb8d1e0b88af1f0f5!2sKumasi+Central+Market!5e0!3m2!1sen!2sth!4v1532967884907" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <?php
          };
          ?>
          <?php 
           if(dynamic_sidebar('contact-right')=='true'){?>
            <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                <?php dynamic_sidebar('contact-right');?>
                </form>
              </div>
            </div>
          </div>
           <?php } else {
          ?>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Send Message</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12 pb-2">
                      <div class="share">
                        <?php dynamic_sidebar('footer-icons');?>
                        </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
<?php  } ?>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->
<?php get_footer();?>