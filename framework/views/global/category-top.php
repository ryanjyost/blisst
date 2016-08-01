<?php

// =============================================================================
// CATEGORY_TOP.PHP
// -----------------------------------------------------------------------------
// Title and description of category
// =============================================================================

?>

<?php
	$cat = get_category( get_query_var( 'cat' ) );
	$cat_id = $cat->cat_ID;
	$cat_name = $cat->name;
	$cat_slug = $cat->slug;
?>


<div class="category-title">

	<?php echo $cat_name; ?>

</div>


<div class="category-desc">

	<?php echo category_description( $category_id ); ?>

</div>






