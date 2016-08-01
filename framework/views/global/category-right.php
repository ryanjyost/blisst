<?php

// =============================================================================
// CATEGORY_RIGHT.PHP
// -----------------------------------------------------------------------------
// Right column with subcategories
// =============================================================================

?>



                <div class = "category-top">
                    <?php x_get_view( 'global', 'category-top' ); ?>
                </div>


                <div class = "tax-label">Topics</div>
                     <div id="add-subcat-btn" class="add-btn">+</div>

                     <div id="add-topic">
                         <?php if(is_user_logged_in()): ?>
                            <?php echo do_shortcode('[front-end-subcat]'); ?>
                        <?php endif;  ?>

                        <?php if(!is_user_logged_in()): ?>
                            <div  class="side-butt-login">
                                <a id="login-to-add" class="popup-login" href="#">Sign In / Up</a>
                            </div>
                        <?php endif;  ?>


                     </div>

                    <div class= "parent-child-wrap">
                        <div class = "category-parent-children">
                            <?php
                                if (is_category()) {
                                     $this_category = get_category($cat);
                                }

                                    $this_category = wp_list_categories('hide_empty=0&show_option_none=No topics in this category.....yet&orderby=id&depth=10
                                    &title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID.
                                    "&echo=0");

                                        if ($this_category) { ?>

                                            <ul>
                                            <?php echo $this_category; ?><br>
                                            </ul>

                                <?php } ?>
                        </div>

                    </div>





