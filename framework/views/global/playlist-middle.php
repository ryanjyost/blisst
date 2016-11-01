<?php

// =============================================================================
// PLAYLIST_MIDDLE.PHP
// -----------------------------------------------------------------------------
// Output for middle section of Playlist page
// =============================================================================


?>

  <?php
        $tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
        $list_name = $tax->name;

        $current_user = wp_get_current_user();
        $username = $current_user->user_login;
  ?>





<div class="main-menu">
        <?php x_get_view( 'global', 'main-menu' ); ?>
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

                      <?php if(username_exists($list_name) && $username != $list_name): ?>

                        <?php  else:  ?>

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
                  <?php endif;  ?>
            </div>

    <div class="loop-middle">

        <?php x_get_view( 'global', 'loop-filter' ); ?>


       <?php
            if(username_exists($list_name)){
              //sets loop args for user
              $args = array( 'post_type' => array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media'), 'posts_per_page' => -1,  'orderby' => 'date', 'order' => 'DESC', 'author_name' =>  $list_name);
            } else{
              //sets loop args
              $args = array( 'post_type' => array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media'), 'posts_per_page' => -1,  'orderby' => 'date', 'order' => 'DESC', 'taxonomy' => 'playlist', 'term' => $tax->slug);
            }
        ?>

            <!--  Query Media in Category    -->
            <?php
                  $post_type = array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media', 'post');

                    $posts = new WP_Query( $args );

                    if( $posts->have_posts() && $post_type): while( $posts->have_posts() ) : $posts->the_post();

                        x_get_view( 'global', 'loop-basic' );

                    endwhile; endif;

            ?>
    </div>


























