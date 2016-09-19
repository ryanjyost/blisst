<html>
<?php

// =============================================================================
// HOME PAGE
// =============================================================================

$is_filterable_index = is_home() && x_get_option( 'x_ethos_filterable_index_enable' ) == '1';

?>

<?php get_header(); ?>

<div class="x-container max width main">

	<!--  Main sidebar -->
	<div id="home-side" class="main-side">
	     <?php x_get_view( 'global', 'main-side' ); ?>
	</div>

  <!--                          Middle Category Section w/ loop                      -->
	<div id="main-middle" class="column-middle">
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

  <!-- Popup message -->
          <div class="home-message">
            <h5>x</h5>

              <?php if(!is_user_logged_in()): ?>
                <h2>Share and discuss stuff with people as curious as you.</h2>
                  <p>

                  </p>
                <div class="home-btn">
                  <a class="popup-register" href="#">Sign Up</a>
                </div>
              <?php endif;  ?>

              <?php if(is_user_logged_in()): ?>
                  <h2>Start a playlist and call it your username.</h2>
                  <p>
                    You'll be the only one who can add stuff to it.
                  </p>
              <?php endif;  ?>
          </div>



      <?php x_get_view( 'global', 'loop-filter' ); ?>


      <!-- Comments -->
      <div class="comments-middle">
        <ul>
        </ul>
      </div>


      <!-- Posts  -->
      <div class="loop-middle">
			       <?php
		                  $args = array( 'post_type' => array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media'), 'posts_per_page' => 100,  'orderby' => 'date', 'order' => 'DESC');
		                  $loop = new WP_Query( $args );
			        ?>

			        <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>

			                <?php x_get_view( 'global', 'loop-basic' ); ?>

			        <?php endwhile; ?>
			</div>

	</div>
</div>



</div>


<?php get_footer(); ?>
</html>