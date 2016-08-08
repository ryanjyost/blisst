<?php

// =============================================================================
//  MAIN SIDEBAR NAVIGATION
// =============================================================================



?>

<link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>


<!-- Sidebar buttons-->
    <div class="main-side-butt">



        <div class="nav-logo">
             <a href = "<?php echo esc_url( home_url( '/' ) ); ?>">blisst</a>
        </div>


            <!-- User Login -->
            <?php if (!is_user_logged_in()){ ?>

                <div class="side-butt-login">
                    <a class="popup-login" href="#">Sign In / Up</a>
                </div>

            <?php } ?>



            <?php if(is_user_logged_in()): ?>
                     <!-- Dropdown to add list -->
                    <div id="add-list">
                        <?php echo do_shortcode('[front-end-cat]'); ?>
                    </div>
             <?php endif;  ?>





        <div class="side-butts">


            <!--
                MAIN SIDE - Topics
            -->

            <div id="main-side-2" class="main-side-label">Topics</div>

                <!-- Dropdown Container - Topics -->
                <div class="main-side-dropdown" id="main-side-drop-2">

                    <!-- POLITICS & POLICY -->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('politics-policy');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Politics & Policy</a>

                    <!-- Science & Tech-->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('science-tech');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Science & Tech</a>

                    <!-- Religion & Phillosopy-->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('religion-philosophy');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Religion & Philosophy</a>

                          <!-- Culture & Society-->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('culture-society');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Culture & Society</a>

                       <!-- Business & Econ-->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('business-econ');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Business & Econ</a>

                    <!-- Arts & Lit-->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('arts-literature');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Arts & Lit</a>

                    <!-- History-->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('history');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">History</a>

                    <!-- Everything Else-->
                    <?php
                        // Get the ID of a given category
                            $category_id = get_category_by_slug('everything-else');

                        // Get the URL of this category
                            $category_link = get_category_link( $category_id );
                    ?>

                    <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Everything Else</a>
                </div>



                <!--
                MAIN SIDE - LISTS
                -->
                <div id="main-side-3" class="main-side-label">Lists</div>
                    <!-- Dropdown Container-->
                    <div class="main-side-dropdown" id="main-side-drop-3">
                        <?php

                            $this_list = wp_list_categories('taxonomy=playlist&hide_empty=0&show_option_none=No topics in this category.....yet&orderby=id&depth=1
                            &title_li=&use_desc_for_title=1&echo=0');

                        if ($this_list) { ?>

                            <ul>
                            <?php echo $this_list; ?><br>
                            </ul>

                        <?php } ?>
                    </div>

                <!--
                    MAIN SIDE - More
                -->

                <?php
                    $redirect = esc_url( home_url( '/' ) );
                ?>
                <div id="main-side-1" class="main-side-label">More</div>
                    <!-- Dropdown Container - Lists -->
                    <div class="main-side-dropdown" id="main-side-drop-1">
                             <a href="<?php echo get_permalink( get_page_by_path( 'report-a-post' ) ) ?>">Report a Post</a>
                             <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ) ?>">Contact Us</a>
                             <a href="<?php echo get_permalink( get_page_by_path( 'code-of-conduct' ) ) ?>">Code of Conduct</a>
                             <a href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>
                             <a href="<?php echo wp_logout_url( $redirect ); ?>">Sign Out</a>
                            <a href="https://icons8.com/">Icons from Icons8</a>
                    </div>

                <!--
                    MAIN SIDE - Give Feedback
                -->
                <div id="main-side-4" class="main-side-label"> Quick Feedback</div>
                    <!-- Dropdown Container - Lists -->
                    <div class="main-side-dropdown" id="main-side-drop-4">
                        <?php echo do_shortcode('[contact-form-7 id="2589" title="Feedback"]'); ?>
                    </div>




       </div>

            <?php get_search_form(); ?>

    </div>

