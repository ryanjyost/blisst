<?php
// =============================================================================
// FORM-study.PHP
// -----------------------------------------------------------------------------
// Form to submit "study" post type
// =============================================================================
?>


      <form id="add-study-form" name="add-media-form" method="post" action="">

                <!-- Link -->
                <div id="step1_study">
                    <label for="source-link">Paste the URL here</label>
                    <p class="form-help">It has to start with "http"</p>
                        <input autocomplete="off" type="text" id="source-link" value="" size="20" name="source_link" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Title -->
                <div id="step2_study">
                        <label for="title">What's the title?</label>
                        <input type="text" id="title" value="" size="20" name="title" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Author/Creator -->
                <div id="step3_study">
                        <label for="article-author">Who authored/prepared it?</label>
                        <input type="text" id="article-author" value="" size="20" name="article_author" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Source -->
                <div id="step4_study">
                        <label for="source">Where was it published/provided?</label>
                        <p class="form-help">Journal, organization, website - whatever the source.</p>
                        <input type="text" id="source" value="" size="20" name="source" />

                        <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>


                <!-- Preview & Submit -->
                <div id="step5_study">

                  <label>Look good? Link work?</label>
                  <p class="form-help">By the way, adding this means you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p><br>
                  <!--  Preview the Post    -->
                      <div class="loop-cont">
                            <div class="loop-title">
                              <span id="preview-study-title"></span>
                            </div>

                                <!-- Post type image -->
                                <img class="bookmark-icon" src="data:image/png;base64,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" width="40" height="40">

                            <!-- Preview Author -->
                            <div class="loop-author">
                                <span id="preview-study-author"></span>
                            </div>

                            <!-- Preview Source -->
                            <div class="loop-source">
                                <span id="preview-study-source"></span>
                            </div>

                           <!-- Link whole preview container   -->
                            <a id="preview-study-link" href="" target="_blank">
                                  <span class="link-spanner"></span>
                            </a>

                      </div>
                      <!-- End of post preview -->

                      <div class="form-nav-butts">
                          <button type="submit" value="Add it" id="submit" name="submit">Add it</button>
                          <div class="prev-btn">Go Back</div>
                      </div>

                </div>

                <!--Pick the post type for PHP submission -->
                <input type="hidden" name="post-type" id="post-type" value="study" />
                  <input type="hidden" name="action" value="study" />

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