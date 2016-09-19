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

				  <h2>Report Shenanigans</h2>

				  <p>
				  	Please report posts that you believe warrant review and potential deletion, for reasons such as plagiarism, violations of our Code of Conduct or Terms of Use, copyright violations, illegal material, libel, trolling, and anything else you believe undermines the integrity of this site. When in doubt, report the post. Thanks for your help!
				  </p><br><br><br>


				  <?php echo do_shortcode('[contact-form-7 id="4156" title="Report a Post"]'); ?>
				</div>
  	</div>

</div>

<?php get_footer(); ?>
</html>