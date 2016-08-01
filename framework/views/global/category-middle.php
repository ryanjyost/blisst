<?php

// =============================================================================
// CATEGORY_MIDDLE.PHP
// -----------------------------------------------------------------------------
// Parent Category middle section w/ loop
// =============================================================================


?>

<?php
        //get current category name
        $cat = get_category( get_query_var( 'cat' ) );
        $cat_name = $cat->name;
        $cat_slug = $cat->slug;
        $the_cat_id = $cat->term_id;
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

       <?php
              //get category information for later
              $cat = get_category( get_query_var( 'cat' ) );
              $cat_id = $cat->cat_ID;
              $cat_slug = $cat->slug;

                //iff in the current category
                if (is_category()) {
                     $this_category = get_category($cat);
                     $cat_child = get_term_children($cat_id, 'category');
                }

                  $args = array( 'post_type' => array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media'), 'posts_per_page' => -1,  'orderby' => 'date', 'order' => 'DESC');
                  $loop = new WP_Query( $args );
        ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>

        <!--  Query Media in Category    -->

            <?php if (in_category($cat_child) || in_category($this_category)): ?>

                <?php x_get_view( 'global', 'loop-basic' ); ?>

            <?php endif; ?>


        <?php endwhile; ?>

</div>

