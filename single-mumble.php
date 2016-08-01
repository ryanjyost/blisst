<?php

// =============================================================================
// VIEWS/ETHOS/SINGLE-Audio.PHP
// -----------------------------------------------------------------------------
// Single audio output
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




<!--      Topbar                -->
<?php if ( is_single() ) : ?>

<div class="mumble-top">

  <div class="mumble-category">
    <?php
        // Display the category
          $tags = get_the_tags();
          $categorylist = the_category(' ' );
    ?>
<?php

            echo "$categorylist";
    ?>
  </div>
<!--  Next/Prev Random Button -->
<div class="mumble-nav">
      <?php x_entry_navigation(); ?>

</div>


</div>


<!-- Left column with Mumble content-->
<div class="mumble-area">


  <div class="mumble-title">
        <?php x_the_alternate_title(); ?>
  </div>


<!-- Author and source   -->

 <div class="mumble-by">
Mumbled by
 </div>

 <div class="mumble-author">
    <?php
        // Shared by....
        $author =  the_author_posts_link();
        $type = get_post_type();
        $date = human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
    if($author)
  ?>
    <?php echo "$author $date";?>
</div>


<div class="mumble-read-time">
<!-- Time to read -->
 <?php
    $content=get_the_content( $more_link_text, $strip_teaser );
    $word_count = str_word_count( strip_tags( $content ) );
    $read_time = $word_count/250;
    $read_time_int = round($read_time);

  ?>

<!-- Clock icon by Icons8 -->
<img class="icon icons8-Clock" src="data:image/png;base64,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" width="15" height="15">

<?php echo "$read_time_int min";?>

  </div>


  <?php if (has_post_thumbnail( $post_id )); { ?>
      <div class="gray-image">
            <?php the_post_thumbnail(full);?><br>
            Photo Credit: <?php
            $imagesource = get_field('image_source');
            echo $imagesource;
            ?>

      </div>

  <?php } ?>


  <div class="mumble-content">
  <?php $content=get_the_content( $more_link_text, $strip_teaser );?>

  <?php echo "$content" ?>
  </div>
<div class="disqus">
         <?php x_get_view( 'global', 'disqus' ); ?>
  </div>

  <?php endif; ?>
 </div>




<!--  Sidebar, right column -->
<div class="mumble-sidebar">




<?php x_get_view( 'global', 'mumble-sidebar' ); ?>

<div class="share-media-mumble">
  <!-- Share buttons -->
    <?php x_get_view( 'global', 'share-buttons' ); ?>
  </div>



</div>










 <?php endwhile; ?>

 </div>

 </div>


<?php get_footer(); ?>