<html>
<?php

// =============================================================================
// SEARCH-MIDDLE.PHP
// -----------------------------------------------------------------------------
// Search results
// =============================================================================

?>




   <div class="search-box">

      <form method="get" id="searchform" class="form-search-box" action="<?php echo esc_url( home_url( '/' ) ); ?>">
         <label for="s" class="visually-hidden"><?php _e( 'Search', '__x__' ); ?></label>
         <input type="text" id="s" class="search-page-query" name="s" placeholder="<?php the_search_query(); ?>" />
      </form>


   </div>


 <div class="category-middle-loop">
<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) :
    ?>
    <!-- the loop -->



          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


          <?php x_get_view( 'global', 'loop-basic' ); ?>


    <?php endwhile; ?>


    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
</html>