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
                    <label for="source-link">Paste the URL here</label>
                    <p class="form-help">It has to start with "http"</p>
                        <input autocomplete="off" type="text" id="source-link" value="" size="20" name="source_link" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Title -->
                <div id="step2_video">
                        <label for="title">What's the title?</label>
                        <input type="text" id="title" value="" size="20" name="title" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Author/Creator -->
                <div id="step3_video">
                        <label for="article-author">Who created it?</label>
                        <p class="form-help">This can be a gray area, so just do your best.</p>
                        <input type="text" id="article-author" value="" size="20" name="article_author" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Source -->
                <div id="step4_video">
                        <label for="source">What's the source?</label>
                        <p class="form-help">Only input "YouTube" if you can't find specifics.</p>
                        <input type="text" id="source" value="" size="20" name="source" />

                        <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>


                <!-- Preview & Submit -->
                <div id="step5_video">

                  <label>Look good? Link work?</label>
                  <p class="form-help">By the way, adding this means you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p><br>
                  <!--  Preview the Post    -->
                      <div class="loop-cont">
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

                      <div class="form-nav-butts">
                          <button type="submit" value="Add it" id="submit" name="submit">Add it</button>
                          <div class="prev-btn">Go Back</div>
                      </div>

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