			<?php get_header()?>	<!-- Banner -->
				<?php dynamic_sidebar('home-banner')?>
				<?php dynamic_sidebar('home-services')?>


			
				<!-- Main -->

				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>My Portfolio</h2>
										</header>
										<div class="row">
                                        <?php
                                               $port_args=array(
                                                   'post_type'=>'portfolio',
                                                   'post_per_page'=>6,
                                                    
                                               );
                                               $port_post= new WP_Query($port_args);
                                               while($port_post->have_posts()){
                                                   $port_post->the_post();                                               
                                           ?> 
											<div class="col-4 col-6-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="<?php get_template_directory_uri()?>/images/pic02.jpg" alt="" /></a>
													<header>
														<h3><?php the_title()?></h3>
													</header>
                                                    <p><?php the_excerpt()?></p>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink()?>" class="button alt">Find out more</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<?php }
											 wp_reset_postdata();
											?>
										</div>
									</section>

							</div>
							<div class="col-12">

								<!-- Blog -->
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
                                           <?php
                                               $args=array(
                                                   'post_type'=>'post',
                                                   'post_per_page'=>2,
                                               );
                                               $blog_post= new WP_Query($args);
                                               while($blog_post->have_posts()){
                                                   $blog_post->the_post();                                               
                                           ?>   
											<div class="col-6 col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
													<header>
														<h3><?php the_title()?></h3>
														<p>Posted on:<?php the_date()?> at <?php the_time()?></p>
													</header>
                                                    <p><?php the_content()?></p>
													<footer>
														<ul class="actions">
															<li><a href="<?php the_permalink()?>" class="button icon solid fa-file-alt">Continue Reading</a></li>
															<li><a href="<?php comments_link()?>" class="button alt icon solid fa-comment"><?php echo get_comments_number()?> comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
                                            <?php } ?>
										</div>
									</section>

							</div>
						</div>
					</div>
				</section>
                <?php get_footer()?>
