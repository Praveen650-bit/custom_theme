<?php get_header(); ?>

<?php
if(have_posts()){
    while(have_posts()){
        the_post();?>

        <div class="container">
            <h1 class="posttitle"><?php the_field('description'); ?></h1>
            <p class="postcontent"><?php the_field('Editor'); ?></p>
        </div>

    <?php }
}
?>


<?php get_footer(); ?>