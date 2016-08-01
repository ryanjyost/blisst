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
  	<div class="page-right">
  		<div class="text-area">

		  <h2>Get in Touch</h2>

		  <p>

		  </p>

		  <?php echo do_shortcode('[contact-form-7 id="502" title="Contact Us"]'); ?>
		</div>

  	</div>

</div>

<?php get_footer(); ?>
</html>