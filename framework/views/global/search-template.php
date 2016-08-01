<?php

// =============================================================================
// SEARCH_TEMPLATE.PHP
// -----------------------------------------------------------------------------
// PRovides basic layout of the search results page
// =============================================================================

?>


<!--  Main sidebar -->
<div class="main-side">

     <?php x_get_view( 'global', 'main-side' ); ?>

</div>



<!--  Middle Category Section w/ loop -->
<div class= "column-middle">

  <?php x_get_view( 'global', 'search-middle' ); ?>

</div>





<div class="column-right">

    <?php x_get_view( 'global', 'search-right' ); ?>

</div>
















