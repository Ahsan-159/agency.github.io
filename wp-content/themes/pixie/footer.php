
<!-- Subscribe Form Starts Here -->
<div class="subscribe-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1><?php echo substr(get_theme_mod('subcribe_heading'),0,30)?></h1>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="main-content">
                    <p><?php echo substr(get_theme_mod('subcribe_paragraph'),0,300)?></p>
                    <div class="container">
                        <form id="subscribe" action="" method="get">
                            <div class="row">
                                <?php if ( true == get_theme_mod( 'switch_setting', 'on' ) ) : ?>
                                <div class="col-md-7">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                                            onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                                            value="Your Email..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-5">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                                    </fieldset>
                                </div>
                                <?php else : ?>

                                <?php endif; ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe Form Ends Here -->

<!-- Footer Starts Here -->
<div class="footer">
    <div class="container">
        <div class="row mt-4 mb-0">
            <?php if (get_theme_mod( 'footer_col_setting')=='both' ) {?>
            <div class="col-md-12">
                <?php dynamic_sidebar('footer-icons');?>
            </div>
            <div class="col-md-12 mb-3">
                <p><?php echo substr(get_theme_mod('footer_text'),0,50)?></p>
            </div>
            <?php
            }else if (get_theme_mod( 'footer_col_setting')=='icons' ){
              ?>
            <div class="col-md-12">
                <?php dynamic_sidebar('footer-icons')?>
            </div>
            <?php
            }elseif (get_theme_mod( 'footer_col_setting')=='copyright' ){?>
            <div class="col-md-12 mb-3">
                <p><?php echo substr(get_theme_mod('footer_text'),0,50)?></p>
            </div>
            <?php } else{ } ?>
        </div>
    </div>
</div>









<!-- Footer Ends Here -->
<!-- Sub Footer Starts Here -->
<!-- <div class="sub-footer">
      <div class="container">
        
      </div>
    </div> -->
<!-- footer ends here -->
<script language="text/Javascript">
cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
function clearField(t) { //declaring the array outside of the
    if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
    }
}
</script>

<?php wp_footer();?>
</body>

</html>