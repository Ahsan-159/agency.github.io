<?php get_header()?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"><?php echo substr(get_theme_mod('text_setting'),0,15)?></div>
                <div class="masthead-heading text-uppercase"><?php echo substr(get_theme_mod('heading'),0,25)?></div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services"><?php echo substr(get_theme_mod('button_text'),0,15)?></a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo substr(get_theme_mod('services_heading'),0,15)?></h2>
                    <h3 class="section-subheading text-muted"><?php echo substr(get_theme_mod('services_subheading'),0,30)?></h3>
                </div>
                <div class="row text-center">
                <?php
                        $args=array(
                            'post_type'=>'post',
                            'posts_per_page'=>3
                        );
                        $blog_post= new WP_Query($args);
                        while($blog_post->have_posts()){
                            $blog_post->the_post();                                               
                        ?>    
                <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                           <!-- <?php $icon = get_theme_mod( 'dashicons_setting', 'menu' ); ?>
                            <span class="dashicons dashicons-<?php echo esc_attr( $icon ); ?>"></span> -->
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                         </span>
                        <h4 class="my-3"><?php the_title()?></h4>
                        <p class="text-muted"><?php the_excerpt()?></p>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo substr(get_theme_mod('portfolio_heading'),0,15)?></h2>
                    <h3 class="section-subheading text-muted"><?php echo substr(get_theme_mod('portfolio_subheading'),0,30)?></h3>
                </div>
                <div class="row">
                <?php
                        $p_args=array(
                            'post_type'=>'portfolio',
                            'posts_per_page'=>6
                        );
                        $p_blog_post= new WP_Query($p_args);
                        while($p_blog_post->have_posts()){
                            $p_blog_post->the_post();                                               
                        ?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo get_the_ID()?>">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <?php the_post_thumbnail('post-thumbnails')?>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php the_title()?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php the_excerpt()?></div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo get_the_ID()?>" tabindex="-1" role="dialog" aria-hidden="true">
   
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="<?=get_template_directory_uri()?>/assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase"><?php the_title()?></h2>
                                    <p class="item-intro text-muted"><?php the_content()?></p>
                                    <!--<img class="img-fluid d-block mx-auto" src="<?=get_template_directory_uri()?>/assets/img/portfolio/1.jpg" alt="..." />-->
                                    <?php the_post_thumbnail('post-thumbnails')?>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo substr(get_theme_mod('about_heading'),0,10)?></h2>
                    <h3 class="section-subheading text-muted"><?php echo substr(get_theme_mod('about_subheading'),0,30)?></h3>
                </div>
                <ul class="timeline">
                <?php
                        $a_args=array(
                            'post_type'=>'about',
                            'posts_per_page'=>4
                        );
                        $a_blog_post= new WP_Query($a_args);
                        while($a_blog_post->have_posts()){
                            $a_blog_post->the_post();                                               
                        ?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid"<?php the_post_thumbnail()?>></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php the_title()?></h4>
                                <h4 class="subheading"><?php the_excerpt()?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php the_content()?></p></div>
                        </div>
                    </li>
                    <?php } ?>
                    <?php wp_reset_postdata()?>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase"><?php echo substr(get_theme_mod('team_heading'),0,25)?></h2>
                    <h3 class="section-subheading text-muted"><?php echo substr(get_theme_mod('team_subheading'),0,30)?></h3>
                </div>
                <div class="row">
                <?php
                        $t_args=array(
                            'post_type'=>'team',
                            'posts_per_page'=>3
                        );
                        $t_blog_post= new WP_Query($t_args);
                        while($t_blog_post->have_posts()){
                            $t_blog_post->the_post();                                               
                        ?>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" <?php the_post_thumbnail()?>
                            <h4><?php the_title()?></h4>
                            <p class="text-muted"><?php the_excerpt()?></p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php wp_reset_postdata()?>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"><?php echo substr(get_theme_mod('team_textarea'),0,200)?></div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center icons-div">
                    <div class="col-md-3 col-sm-6">
                        <?php dynamic_sidebar('logo-1')?>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <?php dynamic_sidebar('logo-2')?>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <?php dynamic_sidebar('logo-3')?>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <?php dynamic_sidebar('logo-4')?>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <?php echo do_shortcode('[contact-form-7 id="189" title="Contact Page"]');?>
            </div>
        </section>
        <!-- Footer-->
        



        <?php get_footer()?>