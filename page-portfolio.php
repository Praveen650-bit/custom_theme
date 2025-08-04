<?php
/*
Template Name: portfolio
*/
get_header(); ?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <div class="container">
            <h1 class="posttitle"><?php the_title(); ?></h1>
            <p class="postcontent"><?php the_content(); ?></p>
        </div>

        
 <?php }


}
?>

        <?php $query = new WP_Query(array(
            'post_type' => 'our_works'
        )) ?>

        <?php
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>

                <div class="container">
                    <h1 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></h1>
                    <p class="postcontent"><?php the_content(); ?></p>
                </div>

            <?php }
        }
        wp_reset_postdata();
    ?>
   

<?php get_footer(); ?>