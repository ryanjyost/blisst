<?php

// =============================================================================
// PLAYLIST_MIDDLE.PHP
// -----------------------------------------------------------------------------
// Output for middle section of Playlist page
// =============================================================================


?>

  <?php
        $cat_id = $cat->cat_ID;
        $cat_name = $cat->name;
        $cat_slug = $cat->slug;
        $tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );


  ?>



          <div class="row">
              <div class="share-button">
                    Post
              </div>
          </div>

            <!--         jQuery form to submit media            -->
          <div class="form-window">


                  <!--         Login form if user is not logged in           -->
                  <div class="form-login">
                      <?php if(!is_user_logged_in()): ?>
                        <?php echo do_shortcode( '[userpro template=login]'); ?>
                      <?php endif;  ?>
                  </div>


                  <!--        Form when user is logged in          -->
                  <?php if(is_user_logged_in()): ?>

                          <!--         Select the post type            -->
                          <?php x_get_view( 'global', 'form-select-type' ); ?>


                          <!--          Load the form, per post-type chosen            -->

                          <div id="form-article">
                              <?php x_get_view( 'global', 'form-article' ); ?>
                          </div>

                          <div id="form-essay">
                              <?php x_get_view( 'global', 'form-essay' ); ?>
                          </div>

                          <div id="form-book">
                              <?php x_get_view( 'global', 'form-book' ); ?>
                          </div>

                          <div id="form-study">
                              <?php x_get_view( 'global', 'form-study' ); ?>
                          </div>

                          <div id="form-audio">
                              <?php x_get_view( 'global', 'form-audio' ); ?>
                          </div>

                          <div id="form-speech">
                              <?php x_get_view( 'global', 'form-speech' ); ?>
                          </div>

                          <div id="form-video">
                              <?php x_get_view( 'global', 'form-video' ); ?>
                          </div>

                          <div id="form-media">
                              <?php x_get_view( 'global', 'form-media' ); ?>
                          </div>

                  <?php endif;  ?>
            </div>


    <div class="category-middle-loop">

      <?php x_get_view( 'global', 'loop-filter' ); ?>

       <?php
              //get playlist information for later
                  $args = array( 'post_type' => array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media'), 'posts_per_page' => -1,  'orderby' => 'date', 'order' => 'DESC', 'taxonomy' => 'playlist');

                  $loop = new WP_Query( $args );
        ?>

            <!--  Query Media in Category    -->
            <?php
                  $post_type = array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media', 'post');




                      // Gets every "category" (term) in this taxonomy to get the respective posts
                      $tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

                          $posts = new WP_Query( "taxonomy=playlist&term=$tax->slug" );

                          if( $posts->have_posts() && $post_type): while( $posts->have_posts() ) : $posts->the_post();

                              x_get_view( 'global', 'loop-basic' );

                          endwhile; endif;

            ?>
    </div>


























