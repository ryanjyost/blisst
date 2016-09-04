<?php

// =============================================================================
// SEARCHFORM.PHP
// -----------------------------------------------------------------------------
// Template for displaying search form
// =============================================================================

?>




    <form method="get" id="searchform" class="form-nav-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input autocomplete="off" type="text" id="s" class="main-side-search" name="s" placeholder="<?php esc_attr_e( 'Search...', '__x__' ); ?>" />
    </form>

