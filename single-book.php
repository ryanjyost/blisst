<?php

// =============================================================================
// VIEWS/ETHOS/SINGLE-BOOK.PHP
// -----------------------------------------------------------------------------
// Single book output
// =============================================================================

$fullwidth = get_post_meta( get_the_ID(), '_x_post_layout', true );

?>


<?php get_header(); ?>

<!--   Call the post    -->
<?php while ( have_posts() ) : the_post(); ?>
<!--                     -->

<!-- Main contnent containers -->
<div class="x-container max width main">
  <div class="offset cf">


  <!--         TOP ESSENTIAL GRID      -->
    <div class ="eg-article-top">
      <?php echo do_shortcode('[ess_grid alias="article-top"]')?>
    </div>

<div class="media-top">

  <div class="mumble-category">
    <?php
        // Display the category
          $tags = get_the_tags();
          $categorylist = the_category( ', ' );
    ?>
<?php

            echo "$categorylist";
    ?>
  </div>
<!--  Next/Prev Random Button -->
<div class="media-nav">
      <?php x_entry_navigation(); ?>

</div>


</div>

<!-- ===========================  Right Column  ==========================================================-->

<div class="post-column-right">
<!--  Next/Prev Random Button -->



<!--      Media Content        -->
<header class="article-header">

  <!--  Media Title, Content w/ link    -->
  <?php x_get_view( 'global', 'media-box' ); ?>





</header>



<div class="media-sidebar">
<?php x_get_view( 'global', 'media-sidebar' ); ?>

</div>

</div>

<!-- ================================================================================================-->



<!-- ================================  Left Column  =================================================-->
<div class="column-2">

  <!--  Outputs the user name, when shared  -->
<?php x_get_view( 'global', 'media-content' ); ?>


  <div class="content-right">
      <?php x_get_view( 'global', '_content', 'the-content' ); ?>
  </div>
<br>

 <div class="disqus">
         <?php x_get_view( 'global', 'disqus' ); ?>
  </div>


</div>

  <div class="share-media">
  <!-- Share buttons -->
    <?php x_get_view( 'global', 'share-buttons' ); ?>
  </div>
</div>
  <!--                              column 2                                                    -->

 <?php endwhile; ?>
 </div>


<?php get_footer(); ?>