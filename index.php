<?php get_header();?>

<?php
if(have_posts()){
    while(have_posts()){
        the_post();?>

        <div class="container">
            <h1 class="posttitle"><?php the_title(); ?></h1>
            <p class="postcontent"><?php the_content(); ?></p>
        </div>

        <div class="json-data">
            <h2>Posts from Jsonplaceholder API</h2>
            <?php 
                $response = wp_remote_get('https://jsonplaceholder.typicode.com/posts');
                if(is_wp_error($response)){
                    echo '<p>failed to fetch posts.</p>';
                }
                else{
                    $body = wp_remote_retrieve_body($response);
                    $posts = json_decode($body,true);
                    if(!empty($posts)){
                        foreach($posts as $post){
                            echo '<li>';
                            echo ($post['title']);
                            echo ($post['body']);
                            echo '</li>';
                        }
                    }
                    else{
                        echo '<p>no post found.</p>';
                    }
                }
            ?>
        </div>
    <?php }
}
?>

<?php get_footer();?>