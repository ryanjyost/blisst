<html>
<?php

// =============================================================================
// Single Article Post
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
          <div class="main-menu">
            <?php x_get_view( 'global', 'main-menu' ); ?>
          </div>

          <div class="post-area">
          <div id="single-post">
            <?php x_get_view( 'global', 'loop-basic' ); ?>
          </div>
              <div class = "post-comments">
                 <?php disqus_embed('mumblingmillennials'); ?>
              </div>
          </div>
      </div>

</div>



<?php get_footer(); ?>
</html>