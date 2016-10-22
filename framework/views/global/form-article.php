<?php
// =============================================================================
// FORM-ARTICLE.PHP
// -----------------------------------------------------------------------------
// Form to submit "article" post type
// =============================================================================
?>


      <form id="add-article-form" name="add-media-form" method="post" action="">

                      <!-- Link -->
                      <div id="step1_article">
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

                            <?php } else{
                                     // wp_dropdown_categories( 'selected=112&echo=1&hide_empty=0&hierarchical=1&orderby=name&order=ASC&show_option_none=Pick a topic&taxonomy=category');
                                    }
                            ?>
                          <input placeholder="URL" autocomplete="off" type="text" id="source-link" value="" name="source_link" />
                      </div>

                      <!-- Title -->
                      <div id="step2_article">

                          <input placeholder="Title" type="text" id="title" value="" name="title" />
                      </div>

                      <!-- Author/Creator -->
                      <div id="step3_article">

                          <input placeholder="Author" type="text" id="article-author" value="" name="article_author" />
                      </div>

                      <!-- Source -->
                      <div id="step4_article">

                          <input placeholder="Source" type="text" id="source" value="" size="20" name="source" />
                      </div>

                      <!-- Next Button to Preview -->
                      <div class="next-inputs">Preview your post</div>


                <!-- Preview & Submit -->
                <div id="step5_article">

                  <label id="preview-label">Look good? Link work?</label>
                  <p class="form-terms">By the way, adding this means you agree to our <a target="_blank" href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>.</p><br>

                  <!--  Preview the Post    -->
                      <div class="loop-cont-preview">

                            <!-- Preview Title -->
                            <div class="loop-title">
                              <span id="preview-article-title"></span>
                            </div>

                                <!-- Post type image -->
                                <img class="bookmark-icon" src="data:image/png;base64,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" width="40" height="40">

                            <!-- Preview Author -->
                            <div class="loop-author">
                                <span id="preview-article-author"></span>
                            </div>

                            <!-- Preview Source -->
                            <div class="loop-source">
                                <span id="preview-article-source"></span>
                            </div>

                           <!-- Link whole preview container   -->
                            <a id="preview-article-link" href="" target="_blank">
                                  <span class="link-spanner"></span>
                            </a>

                      </div>
                      <!-- End of post preview -->

                      <!-- Next Button to Content/why make the post -->
                      <div  class="next-preview">Tell us why're you posting it</div>
                      <div class="prev-preview">Go Back</div>

                </div>

                <!-- Content and submission -->
                <div id="step6_article">
                      <textarea rows="14" placeholder="Why are you posting this?" type="textarea" id="description" value="" name="post_content"></textarea>

                          <button type="submit" value="Add it" id="submit" name="submit">Post</button>
                          <div class="prev-submit">Go Back</div>
                </div>


                <!--Pick the post type for PHP submission -->
                <input type="hidden" name="post-type" id="post-type" value="article" />
                <input type="hidden" name="action" value="article" />




                <?php wp_nonce_field( 'name_of_my_action','name_of_nonce_field' ); ?>
      </form>

                  <?php
                      //verify that post has been submitted
                      if($_POST){
                        save_post_data();
                      }
                  ?>