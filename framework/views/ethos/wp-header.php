<?php

// =============================================================================
// VIEWS/ETHOS/WP-HEADER.PHP
// -----------------------------------------------------------------------------
// Header output for Ethos.
// =============================================================================

?>
<?php x_get_view( 'global', '_header' ); ?>

  <?php x_get_view( 'global', '_slider-above' ); ?>

  <header class="<?php x_masthead_class(); ?>" role="banner">
    <?php x_get_view( 'ethos', '_post', 'carousel' ); ?>
    <?php x_get_view( 'global', '_topbar' ); ?>
    <?php x_get_view( 'global', '_navbar' ); ?>
    <?php x_get_view( 'ethos', '_breadcrumbs' ); ?>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>tinymce.init({ selector:'textarea' });</script>
  </header>

  <?php x_get_view( 'global', '_slider-below' ); ?>
  <?php x_get_view( 'ethos', '_landmark-header' ); ?>