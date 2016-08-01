<?php

// =============================================================================
// CATEGORY_TEMPLATE.PHP
// -----------------------------------------------------------------------------
// This code feeds through to all of the individual category archive pages
// =============================================================================

?>




<!--  Main sidebar -->
<div class="main-side">
     <?php x_get_view( 'global', 'main-side' ); ?>
</div>



<!--  Middle Category Section w/ loop -->
<div id="subcat-middle" class= "column-middle">
	  	<?php x_get_view( 'global', 'playlist-middle' ); ?>

</div>


<div id="subcat-right" class="column-right">
    <?php x_get_view( 'global', 'playlist-right' ); ?>
</div>
















