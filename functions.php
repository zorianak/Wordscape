<?php 

//allows for thumbnails in posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size

if ( function_exists('register_sidebar') )
    register_sidebar();


 ?>