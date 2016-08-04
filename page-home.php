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