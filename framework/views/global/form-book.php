<?php
// =============================================================================
// FORM-book.PHP
// -----------------------------------------------------------------------------
// Form to submit "book" post type
// =============================================================================
?>


      <form id="add-book-form" name="add-media-form" method="post" action="">

                <!-- Link -->
                <div id="step1_book">
                    <label for="source-link">Paste the URL here</label>
                    <p class="form-help">Could be to a review, goodreads or just a google search of the title.</p>
                        <input autocomplete="off" type="text" id="source-link" value="" size="20" name="source_link" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Title -->
                <div id="step2_book">
                        <label for="title">What's the title?</label>
                        <input type="text" id="title" value="" size="20" name="title" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Author/Creator -->
                <div id="step3_book">
                        <label for="article-author">Who's the author(s)?'</label>
                        <input type="text" id="article-author" value="" size="20" name="article_author" />

                      <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>

                <!-- Source -->
                <div id="step4_book">
                        <label for="source">What's the publisher?</label>
                        <p class="form-help">Just do your best to give credit where credit is due.</p>
                        <input type="text" id="source" value="" size="20" name="source" />

                        <?php x_get_view( 'global', 'form-nav' ); ?>
                </div>


                <!-- Preview & Submit -->
                <div id="step5_book">

                  <label>Look good? Link work?</label>
                  <p class="form-help">By the way, adding this means you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p><br>
                  <!--  Preview the Post    -->
                      <div class="loop-cont">
                            <div class="loop-title">
                              <span id="preview-book-title"></span>
                            </div>

                                <!-- Post type image -->
                                <img class="bookmark-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAACs0lEQVR4Xu2bUW7CMBAFyZXgQu3J2gvBlVJFbSUUAfH67dprPPyy++TMxDZx0+XEJxWBJdVoGMwJIcluAoS8i5DL5bImu5bi4azr+nm73b6LGxoWVs+QkYVsfLNKmVZIVilTC8koxU3I9XqtzmqxRL9aYjMtX9UQ9xc4spBMMwUhd9Mzw0yZVsgGf1mWr/1y2VvKtEK2JfZ8Pn9kkzK1kG12ZJMyvZBsUhDyt4lkmSkIudvVM0hByO5nVm8pCHlwTNBTCkKenNv0koKQFwdpPaQg5OBks7UUhBQcNbeUgpACIS0fHhFSKKSVFIQYhLSQghCjkGgpCKkQEillWiGVHoralD9yIaQIsb2o9h0DhNhZF3Ug5ABT6zctEVJ038YVeb0WNc2SFafiNxkh0YSN+QgxAosuR0g0YWM+QozAossREk3YmI8QI7DocoREEzbmI8QILLocIdGEjfkIMQKLLh9eSOvDPqsQ6+EgQqyEjfUIMQKLLkdINGFj/nRCjHzSlw+/h6QnbBwgQozAossREk3YmI8QI7DocoREEzbmI8QILLocIdGEjfnDC+l9lmV98Dvyg5AjQgffI2QHiBny+I7p9uYiQpIJEVecdO3D7yHpiIoDQogI0LsdId5ExTyEiAC92xHiTVTMQ4gI0LsdId5ExbzhhfR+MDzibz1aQcgRUfF7hIgAvdsR4k1UzJtOiMgrXfvwe0g6ouKAECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMQ8hIkDvdoR4ExXzECIC9G5HiDdRMS+dEPF63q7d+pLEPwC3/6B6O6LiBSFEBOjdjhBvomJecyHieGl/QqB6D4FoDAGExHCtTkVINbqYxh9eC5iSVC0E+QAAAABJRU5ErkJggg==" width="40" height="40">

                            <!-- Preview Author -->
                            <div class="loop-author">
                                <span id="preview-book-author"></span>
                            </div>

                            <!-- Preview Source -->
                            <div class="loop-source">
                                <span id="preview-book-source"></span>
                            </div>

                           <!-- Link whole preview container   -->
                            <a id="preview-book-link" href="" target="_blank">
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
                <input type="hidden" name="post-type" id="post-type" value="book" />
                  <input type="hidden" name="action" value="book" />

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