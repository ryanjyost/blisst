<?php

// =============================================================================
// ARTICLE_MIDDLE.PHP
// -----------------------------------------------------------------------------
//
// =============================================================================


?>


<div class="share-top">
        <?php
        // Shared by....
        $author =  the_author_posts_link();
        $type = get_post_type();
        $date = human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
        echo "$author got things started $date";

        ?>
  </div>

<div class="share-content">
		 <?php echo get_the_content( ); ?>
</div>

  <?php x_get_view( 'global', '_comments-template' ); ?>