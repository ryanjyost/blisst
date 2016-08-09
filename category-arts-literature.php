<html>
<?php

// =============================================================================
// CATEGORY - Arts & Literature
// =============================================================================

$is_filterable_index = is_home() && x_get_option( 'x_ethos_filterable_index_enable' ) == '1';

?>

<?php get_header(); ?>

<?php
		$cat = get_category( get_query_var( 'cat' ) );
		$cat_id = $cat->cat_ID;
		$cat_name = $cat->name;
		$cat_slug = $cat->slug;
?>


<div class="x-container max width main">

		<!--  Main sidebar -->
		<div class="main-side">
		     <?php x_get_view( 'global', 'main-side' ); ?>
		</div>

</div>



<?php get_footer(); ?>
</html>