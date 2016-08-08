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
                                      wp_dropdown_categories( 'selected=112&echo=1&hide_empty=0&hierarchical=1&orderby=name&order=ASC&show_option_none=Pick a topic&taxonomy=category');
                                    }
                            ?>
                          <input placeholder="URL" autocomplete="off" type="text" id="source-link" value="" name="source_link" />
                      </div>

                      <!-- Title -->
                      <div id="step2_book">

                          <input placeholder="Title" type="text" id="title" value="" name="title" />
                      </div>

                      <!-- Author/Creator -->
                      <div id="step3_book">

                          <input placeholder="Author" type="text" id="book-author" value="" name="book_author" />
                      </div>

                      <!-- Source -->
                      <div id="step4_book">

                          <input placeholder="Publisher" type="text" id="source" value="" size="20" name="source" />
                      </div>

                      <!-- Next Button to Preview -->
                      <div class="next-inputs">Preview your post</div>


                <!-- Preview & Submit -->
                <div id="step5_book">

                  <label id="preview-label">Look good? Link work?</label>
                  <p class="form-terms">By the way, adding this means you agree to our <a target="_blank" href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>.</p><br>

                  <!--  Preview the Post    -->
                      <div class="loop-cont-preview">

                            <!-- Preview Title -->
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

                      <!-- Next Button to Content/why make the post -->
                      <div  class="next-preview">Tell us why're you posting it</div>
                      <div class="prev-preview">Go Back</div>

                </div>

                <!-- Content and submission -->
                <div id="step6_book">
                      <textarea rows="7" placeholder="Why are you posting this?" type="textarea" id="description" value="" name="post_content"></textarea>

                          <button type="submit" value="Add it" id="submit" name="submit">Post</button>
                          <div class="prev-submit">Go Back</div>
                </div>


                <!--Pick the post type for PHP submission -->
                <input type="hidden" name="post-type" id="post-type" value="book" />
                <input type="hidden" name="action" value="book" />

                <?php wp_nonce_field( 'name_of_my_action','name_of_nonce_field' ); ?>
      </form>

                  <?php
                      //verify that post has been submitted
                      if($_POST){
                        save_post_data();
                      }
                  ?>