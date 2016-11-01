<?php

// =============================================================================
//  MAIN MENU
// =============================================================================

?>


      <!-- Menu Items -->
        <?php
           $redirect = esc_url( home_url( '/' ) );
        ?>



         <div id="main-menu-icon"><img class="icon icons8-Menu-Filled" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAr0lEQVRoQ+2XQQ6AIBDE4Jf8Rn+ugScMKSGbep9R2k1Yeyvy9CLnaB7kNpMa0QhEoI8xHqj7aO08yHf0jdDLPAgENq4tZeSNMVwU9EK8SMb6FI1oBCLgaEFg41qNxOigoGs8BDauLbU0+mMVzwEQnKPlGg+AjSu9EGN0UFAjENi4ViMxOiioEQhsXOsaH6ODgq7xENi4tpQR1/h4DoCgFyIAdatSI1v4gLBGAKhblT+dUSG0gkOQpgAAAABJRU5ErkJggg=="></div>

        <div class="main-menu-signin">
          <?php if (!is_front_page()): ?>
             <a href = "<?php echo $redirect; ?>">Home</a>
           <?php endif;  ?>

          <?php if (!is_user_logged_in() && is_front_page()): ?>
             <a class="popup-login" href="#">Sign In / Up</a>
           <?php endif;  ?>

           <?php if (is_user_logged_in() && is_front_page()): ?>
              <a href="<?php echo wp_logout_url( $redirect ); ?>">Sign Out</a>
           <?php endif;  ?>
        </div>


       <?php //random link
          $link1 = random_link();
       ?>
          <div id="main-menu-random"><a href = "<?php echo $link1; ?>">Random</a></div>


          <!-- Main button versions -->
            <?php // get current list name and user
                $tax = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
                $list_name = $tax->name;

                global $current_user;
                get_currentuserinfo();
                $user_name = $current_user->user_login;


            ?>

            <?php // different situations for main button
                if(is_front_page()) {
                  echo '<div class="share-button">Post</div>';
                }
                elseif($tax && !username_exists($list_name) ) {
                  echo '<div class="share-button">Post</div>';
                }
                elseif($user_name==$list_name && $list_name != "") {
                  echo '<div class="share-button">Post</div>';
                }
                else { ?>
                  <div class='home-button'><a href='<?php echo $redirect; ?>'>Home</a></div>
                <?php } ?>


        <!--
            MAIN SIDE - Give Feedback
        -->
        <div id="main-menu-4" class="main-menu-label">Feedback</div>
            <!-- Dropdown Container - Lists -->
            <div class="main-menu-dropdown" id="main-menu-drop-4">
                <?php echo do_shortcode('[contact-form-7 id="2589" title="Feedback"]'); ?>
            </div>

        <!--
            MAIN SIDE - More
        -->


        <div id="main-menu-more" class="main-menu-label">More</div>
            <!-- Dropdown Container - Lists -->
            <div class="main-menu-dropdown" id="main-menu-drop-1">
                     <a href="<?php echo get_permalink( get_page_by_path( 'report-a-post' ) ) ?>">Report a Post</a>
                     <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ) ?>">Contact Us</a>
                     <a href="<?php echo get_permalink( get_page_by_path( 'code-of-conduct' ) ) ?>">Code of Conduct</a>
                     <a href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>
                    <a href="https://icons8.com/">Icons from Icons8</a>
            </div>


