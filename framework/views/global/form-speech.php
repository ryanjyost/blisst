<?php
// =============================================================================
// FORM-speech.PHP
// -----------------------------------------------------------------------------
// Form to submit "speech" post type
// =============================================================================
?>


      <form id="add-speech-form" name="add-media-form" method="post" action="">

                      <!-- Topic Dropdown & Link -->
                      <div id="step1_speech">
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
                      <div id="step2_speech">

                          <input placeholder="Title" type="text" id="title" value="" name="title" />
                      </div>

                      <!-- Author/Creator -->
                      <div id="step3_speech">

                          <input placeholder="Speaker(s)" type="text" id="article-author" value="" name="article_author" />
                      </div>

                      <!-- Source -->
                      <div id="step4_speech">

                          <input placeholder="Event / Location" type="text" id="source" value="" size="20" name="source" />
                      </div>

                      <!-- Next Button to Preview -->
                      <div class="next-inputs">Preview your post</div>


                <!-- Preview & Submit -->
                <div id="step5_speech">

                  <label id="preview-label">Look good? Link work?</label>
                  <p class="form-terms">By the way, adding this means you agree to our <a target="_blank" href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>.</p><br>

                  <!--  Preview the Post    -->
                      <div class="loop-cont-preview">

                            <!-- Preview Title -->
                            <div class="loop-title">
                              <span id="preview-speech-title"></span>
                            </div>

                                <!-- Post type image -->
                                <img class="bookmark-icon" src="data:image/png;base64,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" width="40" height="40">

                            <!-- Preview Author -->
                            <div class="loop-author">
                                <span id="preview-speech-author"></span>
                            </div>

                            <!-- Preview Source -->
                            <div class="loop-source">
                                <span id="preview-speech-source"></span>
                            </div>

                           <!-- Link whole preview container   -->
                            <a id="preview-speech-link" href="" target="_blank">
                                  <span class="link-spanner"></span>
                            </a>

                      </div>
                      <!-- End of post preview -->

                      <!-- Next Button to Content/why make the post -->
                      <div  class="next-preview">Tell us why're you posting it</div>
                      <div class="prev-preview">Go Back</div>

                </div>

                <!-- Content and submission -->
                <div id="step6_speech">
                      <textarea rows="7" placeholder="Why are you posting this?" type="textarea" id="description" value="" name="post_content"></textarea>

                          <button type="submit" value="Add it" id="submit" name="submit">Post</button>
                          <div class="prev-submit">Go Back</div>
                </div>


                <!--Pick the post type for PHP submission -->
                <input type="hidden" name="post-type" id="post-type" value="speech" />
                <input type="hidden" name="action" value="speech" />

                <?php wp_nonce_field( 'name_of_my_action','name_of_nonce_field' ); ?>
      </form>

                  <?php
                      //verify that post has been submitted
                      if($_POST){
                        save_post_data();
                      }
                  ?>