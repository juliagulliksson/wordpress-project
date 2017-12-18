<?php
/* This is a action hook, it tells wordpress to run the funtion below
* at a specific time (during `wp_enqueue_scripts`). It adds the necessary
* CSS to the '<head>'‐tag. Noneed to edit this code */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {

    $parent_style = 'parent‐style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child‐style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function create_custom_post_type($post_type_name){
    $labels = array(
        'name' => "$post_type_name",
        'singular_name' => "$post_type_name",
        'search_item' => "Search $post_type_name",
        'not_found' => "No $post_type_name found",
        'not_found_in_trash' => "No $post_type_name found in trash",
        'parent_item_colon' => 'Parent Item'
    );
    $arguments = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions'
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type("$post_type_name", $arguments);
}

//Create the custom post type "documentaries" by running the function create_custom_post_type
function documentaries_post_type(){
    create_custom_post_type("Documentaries");
}

//Create the custom post type "mysteries" by running the function create_custom_post_type
function mysteries_post_type(){
    create_custom_post_type("Mysteries");
}

add_action('init', 'documentaries_post_type');
add_action('init', 'mysteries_post_type');

//Function for looping out the 3 thumbnails and titles on the front page
function thumbnail_loop($query){

    if( $query->have_posts() ):
        while ( $query->have_posts() ) :

            echo "<div class='frontpage-posts'>";
                
                $query->the_post();
                get_template_part( 'content', 'flexposts' );
                
            echo "</div>";
                
        endwhile;
    else : 
        get_template_part( 'template-parts/content', 'none' ); 
    endif; 
} 

