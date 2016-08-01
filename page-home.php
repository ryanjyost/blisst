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
	<div class="main-side">
	     <?php x_get_view( 'global', 'main-side' ); ?>
	</div>

  	<!--  Middle Category Section w/ loop -->
	<div id="cat-middle" class= "column-middle">

			  	<!--  Page Content -->
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
		                  $args = array( 'post_type' => array('article', 'essay', 'book', 'audio', 'video', 'study', 'speech', 'media'), 'posts_per_page' => -1,  'orderby' => 'date', 'order' => 'DESC');
		                  $loop = new WP_Query( $args );
			        ?>

			        <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>

			                <?php x_get_view( 'global', 'loop-basic' ); ?>

			        <?php endwhile; ?>

			</div>

	</div>

	<!-- Right Column -->
	<div id="cat-right" class="column-right">
    	<?php x_get_view( 'global', 'search-right' ); ?>
	</div>

</div>

<?php get_footer(); ?>
</html>