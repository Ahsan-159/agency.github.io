<?php
    get_header();
?>
<div class="alert alert-success">This content is comming from wordpress theme development</div>
<div class="container">
<?php
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h1>   <?php the_title(); ?></h1>
        <p><?php
            the_content();
            
        ?></p>
    <?php
        endwhile; 
endif; 
?>
</div>
<?php
get_sidebar();
    get_footer();    
?>