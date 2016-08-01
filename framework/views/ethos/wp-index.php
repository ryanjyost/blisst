<?php

// =============================================================================
// VIEWS/ETHOS/WP-INDEX.PHP
// -----------------------------------------------------------------------------
// Index page output for Ethos.
// =============================================================================

$is_filterable_index = is_home() && x_get_option( 'x_ethos_filterable_index_enable' ) == '1';

?>

<?php get_header(); ?>



        <?php if ( $is_filterable_index ) : ?>
          <?php x_get_view( 'ethos', '_index' ); ?>
        <?php else : ?>
          <?php x_get_view( 'global', '_index' ); ?>
        <?php endif; ?>






<?php get_footer(); ?>