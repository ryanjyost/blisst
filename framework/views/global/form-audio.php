<?php
// =============================================================================
// FORM-audio.PHP
// -----------------------------------------------------------------------------
// Form to submit "audio" post type
// =============================================================================
?>


      <form id="add-audio-form" name="add-media-form" method="post" action="">

                      <!-- Link -->
                      <div id="step1_audio">

                          <input placeholder="URL" autocomplete="off" type="text" id="source-link" value="" name="source_link" />
                      </div>

                      <!-- Title -->
                      <div id="step2_audio">

                          <input placeholder="Title / Episode" type="text" id="title" value="" name="title" />
                      </div>

                      <!-- Author/Creator -->
                      <div id="step3_audio">

                          <input placeholder="Creator / Speaker / Podcast" type="text" id="audio-author" value="" name="audio_author" />
                      </div>

                      <!-- Source -->
                      <div id="step4_audio">

                          <input placeholder="Source / Network" type="text" id="source" value="" size="20" name="source" />
                      </div>

                      <!-- Next Button to Preview -->
                      <div class="next-inputs">Preview your post</div>


                <!-- Preview & Submit -->
                <div id="step5_audio">

                  <label id="preview-label">Look good? Link work?</label>
                  <p class="form-terms">By the way, adding this means you agree to our <a target="_blank" href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>.</p><br>

                  <!--  Preview the Post    -->
                      <div class="loop-cont">

                            <!-- Preview Title -->
                            <div class="loop-title">
                              <span id="preview-audio-title"></span>
                            </div>

                                <!-- Post type image -->
                                <img class="bookmark-icon" src="data:image/png;base64,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" width="40" height="40">

                            <!-- Preview Author -->
                            <div class="loop-author">
                                <span id="preview-audio-author"></span>
                            </div>

                            <!-- Preview Source -->
                            <div class="loop-source">
                                <span id="preview-audio-source"></span>
                            </div>

                           <!-- Link whole preview container   -->
                            <a id="preview-audio-link" href="" target="_blank">
                                  <span class="link-spanner"></span>
                            </a>

                      </div>
                      <!-- End of post preview -->

                      <!-- Next Button to Content/why make the post -->
                      <div  class="next-preview">Tell us why're you posting it</div>
                      <div class="prev-preview">Go Back</div>

                </div>

                <!-- Content and submission -->
                <div id="step6_audio">
                      <textarea rows="7" placeholder="Why are you posting this?" type="textarea" id="description" value="" name="post_content"></textarea>

                          <button type="submit" value="Add it" id="submit" name="submit">Post</button>
                          <div class="prev-submit">Go Back</div>
                </div>


                <!--Pick the post type for PHP submission -->
                <input type="hidden" name="post-type" id="post-type" value="audio" />
                <input type="hidden" name="action" value="audio" />

                <!-- Archive the post under current page's category for PHP submission -->
                <input type="hidden" name="cat" id="cat" value="<?php echo $the_cat_id ?>" />
                <input type="hidden" name="action" value="<?php echo $the_cat_id ?>" />

                <?php wp_nonce_field( 'name_of_my_action','name_of_nonce_field' ); ?>
      </form>

                  <?php
                      //verify that post has been submitted
                      if($_POST){
                        save_post_data();
                      }
                  ?>