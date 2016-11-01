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
   	<?php if($tax == '') : ?>
   		<!-- Toggle Between Posts and Comments -->
	    <div class = "toggle-cont">
	        <p class="toggle-btn-active" id="toggle-to-posts">POSTS</p><p class="toggle-btn" id="toggle-to-comments">COMMENTS</p>
	    </div>
   	<?php endif;  ?>

   	<?php if($tax != '') : ?>
   		<!-- Toggle Between Posts and Comments -->
      <div class = "list-name">
            <?php // Get the current list
               $tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
               $tax_name = $tax->name;
            ?>

        <?php if($tax){ ?>
                  <p><?php echo $tax_name; ?></p>
         <?php } ?>
       </div>

   	<?php endif;  ?>

    <p id="expand-all"> Expand all </p>


   </div>


















