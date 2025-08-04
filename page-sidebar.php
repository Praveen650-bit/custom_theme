<?php 

/*
Template Name: sidebar
*/

get_header(); ?>

<?php
if(have_posts()){
    while(have_posts()){
        the_post();?>
        <div class="outer">
        <div class="container">
            <h1 class="posttitle"><?php the_title(); ?></h1>
            <p class="postcontent"><?php the_content(); ?></p>
        </div>

        <div class="sidebar">
            <h2 class="sidebartitle">sidebar</h2>
        </div>
        </div>
    <?php }
}
?>



<?php get_footer(); ?>