<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

add_action( 'after_setup_theme', 'childtheme_formats', 11 );
function childtheme_formats(){
     add_theme_support( 'post-formats', array( 'aside','gallery', 'link', 'audio', 'chat', 'video', 'image', 'quote','status' ) );
}

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails', array('article'));
add_theme_support( 'post-thumbnails', array('article'));
// Add it for posts



//Random Button

add_action('init','random_post');
function random_post() {
       global $wp;
       $wp->add_query_var('random');
       add_rewrite_rule('random/?$', 'index.php?random=1', 'top');
}

add_action('template_redirect','random_template');
function random_template() {
       if (get_query_var('random') == 1) {

               $articles = get_posts('post_type=article&orderby=rand&numberposts=1');
                foreach($articles as $post) {$link1 = get_permalink($post);}

               $essays = get_posts('post_type=essay&orderby=rand&numberposts=1');
               foreach($essays as $post) {$link2 = get_permalink($post);}

               $books = get_posts('post_type=book&orderby=rand&numberposts=1');
               foreach($book as $post) {$link3 = get_permalink($post);}

                $audio = get_posts('post_type=audio&orderby=rand&numberposts=1');
               foreach($audio as $post) {$link4 = get_permalink($post);}

               $study = get_posts('post_type=study&orderby=rand&numberposts=1');
               foreach($study as $post) {$link5 = get_permalink($post);}

                $video = get_posts('post_type=video&orderby=rand&numberposts=1');
               foreach($video as $post) {$link6 = get_permalink($post);}

               $speech = get_posts('post_type=speech&orderby=rand&numberposts=1');
               foreach($speech as $post) {$link7 = get_permalink($post);}

               $media = get_posts('post_type=media&orderby=rand&numberposts=1');
               foreach($media as $post) {$link8 = get_permalink($post);}

               $gray = get_posts('post_type=gray&orderby=rand&numberposts=1');
               foreach($gray as $post) {$link10 = get_permalink($post);}

               $shuffle_links = array($link1,$link2,$link3,$link4,$link5,$link6,$link7,$link8,$link9,$link10);
                 shuffle($shuffle_links);
                    foreach($shuffle_links as $link) {
                       wp_redirect($link,307);
                     }
               exit;
       }
}



function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}



/**
 * Extend WordPress search to include custom fields
 *
 * http://adambalee.com
 */

        /**
         * Join posts and postmeta tables
         *
         * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
         */
            function cf_search_join( $join ) {
                global $wpdb;

                if ( is_search() ) {
                    $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
                }

                return $join;
            }
            add_filter('posts_join', 'cf_search_join' );




        /**
         * Modify the search query with posts_where
         *
         * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
         */
            function cf_search_where( $where ) {
                global $pagenow, $wpdb;

                if ( is_search() ) {
                    $where = preg_replace(
                        "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
                        "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
                }

                return $where;
            }
            add_filter( 'posts_where', 'cf_search_where' );

        /**
         * Prevent duplicates
         *
         * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
         */
              function cf_search_distinct( $where ) {
                  global $wpdb;

                  if ( is_search() ) {
                      return "DISTINCT";
                  }

                  return $where;
              }
              add_filter( 'posts_distinct', 'cf_search_distinct' );


/*
*
*  Properly enque the stylesheet
*
*/
    function wpmu_load_scripts() {
      wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/gray_scripts.js', array( 'jquery' ) );
    }
    add_action( 'wp_enqueue_scripts', 'wpmu_load_scripts' );


/*
*
*  Front End Posting (thanks for the help Morne Zeelie, http://teachingyou.net/wordpress/wordpress-post-from-the-front-end-with-a-custom-post-type/)
*
*/

function save_post_data() {
        if ( empty($_POST) || !wp_verify_nonce($_POST['name_of_nonce_field'],'name_of_my_action') )
        {
        print 'Sorry, your nonce did not verify.';
        exit;
        }else{
            // Do some minor form validation to make sure there is content
            if (isset ($_POST['title'])) {
            $title =  $_POST['title'];
            } else {
            echo 'Please enter a title';
            exit;
            }
            //get category id for the post_category array
            $cat = get_category( get_query_var( 'cat' ) );
            $the_cat_id = $cat->term_id;
            //get playlist id for the tax_input array
            $tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            //get custom fields from form to pass into meta_input
            $source_link = $_POST['source_link'];
            $article_author = $_POST['article_author']; // "article_author" merely to differentiate from "author"
            $source = $_POST['source'];
            $description = $_POST['post_content'];
            $the_cat_id = $_POST['cat'];
            // Add the content of the form to $post as an array
            $post = array(
                'post_title' => wp_strip_all_tags( $title ),
                'post_content' => $description,
                'post_category' => array($_POST['cat']),
                'tags_input' => $tags,
                'post_status' => 'publish',
                'post_type' => $_POST['post-type'],
                'meta_input' => array('source_link' => $source_link, 'article_author' => $article_author, 'source' => $source),
                'tax_input' => array($tax_slug)
            );
        $post_id = wp_insert_post($post);  // http://codex.wordpress.org/Function_Reference/wp_insert_post
        wp_set_object_terms($post_id, $tax->slug, 'playlist' );

        if(is_home()){
            $location = esc_url( home_url( '/' ) );// redirect to home page
        } else {
            $location = the_permalink();// redirect to current page
        };

        echo "<meta http-equiv='refresh' content='0;url=$location' />"; exit;
        } // end IF
}


