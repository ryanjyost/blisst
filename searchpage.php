<?php
/*
Template Name: Search Page
*/

// =============================================================================
// SEARCH OUTPUT
// =============================================================================

?>

<html>

<div class="nav-search">
	<?php get_header(); ?>
</div>




<div class="x-container max width main">

	<?php

		global $query_string;

			$query_args = explode("&", $query_string);
			$search_query = array();

			if( strlen($query_string) > 0 ) {
				foreach($query_args as $key => $string) {
					$query_split = explode("=", $string);
					$search_query[$query_split[0]] = urldecode($query_split[1]);
				} // foreach
			} //if

			$search = new WP_Query($search_query);



	?>

	<form method="get" id="searchform" class="form-nav-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
         <label for="s" class="visually-hidden"><?php _e( 'Search', '__x__' ); ?></label>
		<input type="text" id="s" class="search-page-query" name="s" placeholder="<?php esc_attr_e( 'Search...', '__x__' ); ?>" />
    </form>

</div>



<?php get_footer(); ?>
</html>