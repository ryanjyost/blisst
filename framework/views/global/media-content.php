<?php

// =============================================================================
// MEDIA_CONTENT.PHP
// -----------------------------------------------------------------------------
// User output for single.php types
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

<div class="add-to-any">
  <?php //echo do_shortcode('[addtoany]')?>
</div>