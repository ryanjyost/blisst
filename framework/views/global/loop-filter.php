<?php

// =============================================================================
// Buttons to manipulate the loop
// =============================================================================

?>

<?php
	$tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
    $list_name = $tax->name;
?>

   <!-- Filter Buttons -->
   <div class = "loop-filter">
   		<p id="expand-all"> Expand all </p>


   	<?php if($tax == '') : ?>
   		<!-- Toggle Between Posts and Comments -->
	    <div class = "toggle-cont">
	        <p class="toggle-btn-active" id="toggle-to-posts">Posts</p><p class="toggle-btn" id="toggle-to-comments">Comments</p>
	    </div>
   	<?php endif;  ?>

   	<?php if($tax != '') : ?>
   		<!-- Toggle Between Posts and Comments -->
	    <div class = "toggle-cont">
	        <a href = "<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
	    </div>
   	<?php endif;  ?>

   </div>


















