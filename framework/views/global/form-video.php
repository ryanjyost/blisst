<?php
// =============================================================================
// FORM-video.PHP
// -----------------------------------------------------------------------------
// Form to submit "video" post type
// =============================================================================
?>


      <form id="add-video-form" name="add-media-form" method="post" action="">

                      <!-- Link -->
                      <div id="step1_video">

                          <input placeholder="URL" autocomplete="off" type="text" id="source-link" value="" name="source_link" />
                      </div>

                      <!-- Title -->
                      <div id="step2_video">

                          <input placeholder="Title" type="text" id="title" value="" name="title" />
                      </div>

                      <!-- Author/Creator -->
                      <div id="step3_video">

                          <input placeholder="Creator" type="text" id="video-author" value="" name="video_author" />
                      </div>

                      <!-- Source -->
                      <div id="step4_video">

                          <input placeholder="Source / Network / Studio" type="text" id="source" value="" size="20" name="source" />
                      </div>

                      <!-- Next Button to Preview -->
                      <div class="next-inputs">Preview your post</div>


                <!-- Preview & Submit -->
                <div id="step5_video">

                  <label id="preview-label">Look good? Link work?</label>
                  <p class="form-terms">By the way, adding this means you agree to our <a target="_blank" href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>.</p><br>

                  <!--  Preview the Post    -->
                      <div class="loop-cont">

                            <!-- Preview Title -->
                            <div class="loop-title">
                              <span id="preview-video-title"></span>
                            </div>

                                <!-- Post type image -->
                                <img class="bookmark-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAC60lEQVR4Xu2ZS24DMQzFkjPl/keYM7XbJos+EJZlDcJu8+APKY1t9PnwbxSB56jVuJiHQoYVgUIUMozAsOXYIQoZRmDYcuyQuwl5vV4/w9Z86+Vc1/VvE8QOUUitf4XU8lweTSHLCGsHKBeSBvz8xKV87Xb3j0b3R/P4DEmA6QL2I6ydge6P5hUCfVHANK8QhUACw+K04mneDoHCKWCax0Lg+h/pEkDHO51ffSgnHgqBhhUCge2OK2Q3YTj+OCHpG0gPMcjjeJzuj+bxGaKQ939HVPNQCOw5WvE0rxCFQALD4rTiad4OgcIpYJrHQuD6fal/AEuXAIXAChv3DoHrt0PsEFoyLD+uQ9I3kB5iDMf5NN0fzeMzRCG+1M+3xZ8V0IqneTsE6qaAaV4hCoEEhsVpxdM87hDKJ10C6Hin8+OuvRSIQt6JJR52CKwwOwQC2x0fJyS1HD3EdgOsHp/uj+bxJ0shvtSri3xpPFrxNG+HQD0UMM0rRCGQwLA4rXiaxx0yjM/tlpMuRQppVqqQZuBpOoUkQs2/lwtJA9JDrJnH8nR0fzSPzxCF+FJfrurKAWjF07wdAm1RwDSvEIVAAsPitOJpHncI5ZMuAXS80/lx/6CiQBTi/9RpzaC8HYJw7Q+PE5I+QfQQ24+wdga6P5rHh7pCfKnXlvjiaLTiad4OgYIoYJpXiEIggWFxWvE0jzuE8kmXADre6fy4ay8FohBf6rRmUN4OQbj2h8cJSZ8geojtR1g7A90fzeNDXSG+1GtLfHE0WvE0b4dAQRQwzStEIZDAsDiteJrHHUL5pEsAHe90fty1lwJRiC91WjMob4cgXPvD44SkTxA9xPYjrJ2B7o/m8aGuEF/qtSW+OBqteJq3Q6AgCpjmFaIQSGBYnFY8zeMOGcbndstJlyKFNCtVSDPwNJ1CEqHm35eFNK/366eLZ8jXE2oGoJBm4Gk6hSRCzb8rpBl4mk4hiVDz7wppBp6mU0gi1Pz7L3BC8JL583XhAAAAAElFTkSuQmCC" width="40" height="40">

                            <!-- Preview Author -->
                            <div class="loop-author">
                                <span id="preview-video-author"></span>
                            </div>

                            <!-- Preview Source -->
                            <div class="loop-source">
                                <span id="preview-video-source"></span>
                            </div>

                           <!-- Link whole preview container   -->
                            <a id="preview-video-link" href="" target="_blank">
                                  <span class="link-spanner"></span>
                            </a>

                      </div>
                      <!-- End of post preview -->

                      <!-- Next Button to Content/why make the post -->
                      <div  class="next-preview">Tell us why're you posting it</div>
                      <div class="prev-preview">Go Back</div>

                </div>

                <!-- Content and submission -->
                <div id="step6_video">
                      <textarea rows="7" placeholder="Why are you posting this?" type="textarea" id="description" value="" name="post_content"></textarea>

                          <button type="submit" value="Add it" id="submit" name="submit">Post</button>
                          <div class="prev-submit">Go Back</div>
                </div>


                <!--Pick the post type for PHP submission -->
                <input type="hidden" name="post-type" id="post-type" value="video" />
                <input type="hidden" name="action" value="video" />

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