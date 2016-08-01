<html>
<?php

// =============================================================================
// VIEWS/ETHOS/SINGLE-ARTICLE.PHP
// -----------------------------------------------------------------------------
// Single article output for Ethos.
// =============================================================================

$fullwidth = get_post_meta( get_the_ID(), '_x_post_layout', true );

?>


<?php get_header(); ?>

<!--   Call the post    -->
<?php while ( have_posts() ) : the_post(); ?>
<!--                     -->

<div class="x-container max width main">


  <!--  Main sidebar -->
<div class="main-side">

     <?php x_get_view( 'global', 'main-side' ); ?>

</div>

 <div class="media-cont">



        <div class="media-slider">

              <div class ="eg-media">
                   <?php echo do_shortcode('[ess_grid alias="article-top"]')?>
              </div>

        </div>


   <!--  Middle media -->

      <div class="media-middle">

           <?php x_get_view( 'global', 'media-middle' ); ?>

      </div>








            <!--  Middle Category Section w/ loop -->
            <div class= "media-right">

              <?php x_get_view( 'global', 'media-right' ); ?>

            </div>

  </div>

</div>

<?php endwhile; ?>


<?php get_footer(); ?>
</html>
