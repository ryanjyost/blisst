<html>
<?php

// =============================================================================
// PLAYLIST
// =============================================================================

$is_filterable_index = is_home() && x_get_option( 'x_ethos_filterable_index_enable' ) == '1';

?>

<?php get_header(); ?>


<div class="x-container max width main">
	<?php x_get_view( 'global', 'playlist-template' ); ?>
</div>



<?php get_footer(); ?>
</html>