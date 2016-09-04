<?php
// =============================================================================
// PLAYLIST_MIDDLE.PHP
// -----------------------------------------------------------------------------
// Output for middle section of Playlist page
// =============================================================================
?>

<form id="post-form" name="add-comment-form" method="post" action="">
     <?php
            //get category id if on category/topic page
            $cat = get_category( get_query_var( 'cat' ) );
            $cat_id = $cat->term_id;
                if($cat_id>0){
                  $the_cat_id = $cat_id;
        ?>
              <!-- Archive the post under current page's category for PHP submission -->
              <input type="hidden" name="cat" id="cat" value="<?php echo $the_cat_id ?>" />
              <input type="hidden" name="action" value="<?php echo $the_cat_id ?>" />

        <?php } ?>



    <!-- Content and submission -->
    <div id="post-form-cont">
        <input placeholder="Title..." type="text" id="post-form-title" value="" name="title" />

        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({
            selector: 'textarea',
            height: 300,
            content_style : "p {font-size:20px; font-family:'Raleway'} ",
            plugins: [
              'advlist autolink lists link image charmap print preview anchor',
              'searchreplace visualblocks code fullscreen',
              'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
          });
        </script>
              <textarea id="post-textarea" name="post_content"></textarea>

        <button type="submit" value="Add it" id="post-submit" name="submit">Post</button>
    </div>

        <!--Pick the post type for PHP submission -->
        <input type="hidden" name="post-type" id="post-type" value="post" />
        <input type="hidden" name="action" value="post" />

      <?php wp_nonce_field( 'name_of_my_action','name_of_nonce_field' ); ?>
</form>
