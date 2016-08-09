<html>
<?php

// =============================================================================
// Single Book Post
// =============================================================================

$is_filterable_index = is_home() && x_get_option( 'x_ethos_filterable_index_enable' ) == '1';

?>

<?php get_header(); ?>

<div class="x-container max width main">

      <!--  Main sidebar -->
      <div class="main-side">
           <?php x_get_view( 'global', 'main-side' ); ?>
      </div>

      <!--  Middle Category Section w/ loop -->
      <div id="post-middle" class="column-middle">
          <?php x_get_view( 'global', 'loop-basic' ); ?>

          <div class = "post-comments">
             <?php disqus_embed('mumblingmillennials'); ?>
          </div>

      </div>

      <!-- Right Column -->
      <div id="cat-right" class="column-right">
          <?php x_get_view( 'global', 'search-right' ); ?>
      </div>

</div>



<?php get_footer(); ?>
</html>