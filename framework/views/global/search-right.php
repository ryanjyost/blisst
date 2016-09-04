<?php

// =============================================================================
// SEARCH_RIGHT.PHP
// -----------------------------------------------------------------------------
// Right column with subcategories
// =============================================================================

?>

<div class = "category-top">
    <div class="toggle-btn">
GET RID OF TOPICS, IDIOT!!!
    </div>
</div>
<br>


            <!-- TOPICS -->
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
                        <div class = "search-cats">
                                <?php

                                $terms = get_terms(array(
                                    'show_count' => true

                                    ));

                                $cat_list = wp_list_categories('hide_empty=0&orderby=title&show_count=0
                                    &title_li=&use_desc_for_title=1&echo=0');
                                echo $cat_list;

                                 ?>
                        </div>
                    </div>
            <!-- -->





