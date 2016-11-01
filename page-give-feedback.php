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

  	<!--  Page Content -->
  	<div class="column-middle">

  	 	<div class="main-menu">
          <?php x_get_view( 'global', 'main-menu' ); ?>
    	</div>

  		<div class="text-area">
			  <h2>Give Feedback</h2>
			 <?php echo do_shortcode('[contact-form-7 id="2589" title="Feedback"]'); ?>

			 <div class = "post-comments">
	       		 <?php disqus_embed('mumblingmillennials'); ?>
	    	</div>

		</div>



  	</div>

</div>

<?php get_footer(); ?>
</html>