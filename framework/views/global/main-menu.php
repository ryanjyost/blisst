<?php

// =============================================================================
//  MAIN MENU
// =============================================================================

?>


      <!-- Menu Items -->
        <?php
           $redirect = esc_url( home_url( '/' ) );
        ?>

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
          <a href = "<?php echo $link1; ?>"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAADBklEQVRoQ+2YzVXbQBDHZ/DBvoVUEFwBdBBcQcQBtLeECjAVhFSAqYDkNuKCUoGdChIqgA5CbhIHJm/8dvPWerZ2Le3Gwo+9Srva3/znS4OwJQu3hANeQbqm5KsisRQ5OTlJnp6eZnmeP67zjU4pIhA7Ozu3zPyrLMvROjCdAkmSZLff788QcX9dmE6BiCs1hekcSFMYJ4hSilcFnciPiHlRFFfr+LNYfTAYnDFzgogHrqD2cbNWIOYCPh8y72rXmfoAWOfflWV5WGcsJ0idtZRSh8w80cGZZ1l25LJumqa3iJgw8x0ijoloVt1jw8p7LgjZ3wrE8ucHRHwDAKNlFzMXFXAAmDLzn7Is95ZZuAlEEBA5RCl1AQCfAWBGRKNVqiilpgAgMF+ISPYsrKYQwUD0BYwqQyJ6qF7y+Pj4oNfr/axTwyqIXu5kf6O1a5nD0jSVWDkDgG9E9KkKopT6CgAfmfkqy7LxKtU23qIopfYA4F5fcEGVumeu5OD7PJgiOlbmVq+qYtRYpZbvZeveCw0yV4WZH8uyHEpW0sXv9zKlQgCYM4KCaFWkLrw3mcnKaD+ISDJWlBUDxNSKuSqDwSABgGtXjWlLFxzEVoWZz7Msm0iMLMtkbS8fJf3ah5p6AAAPRDQMeeFVZ0VRRKsiRfEdAJwSkWSzqCsmiBRFiY3/oko0EFuV5+fno5ubmzymJFFAlFLXRHSapukYES9dzWQIwOAgplWX2CiKIu/3+14tfluYGCALrbopiMz8PcsyqSlRVlAQuzksiuKtaVEsVZa2+CHIQoO8/KZxa9p4V6v+In6s9K/uPSLuAsDSODCK2S1+NTY2Pvv1bdWVUgstfhWk6bhUzmkd7BU1fMdB/368QsG0AtEDukuZGvrWiTRNc0T8oMet5zUDurWm8k6QutmvsabvNFDet93Ht374jGRbgeixpwyxJw2G2GM9xN53AfkYygni+kiM500mjp0DaQIRJGuFVKQpROdAOjH7DaXMxme/oUCantO5YH8FaWqBru3bGtf6C35BglEur4k1AAAAAElFTkSuQmCC" ></a>


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
                elseif($tax && username_exists($list_name) && get_current_user()==$list_name ) {
                  echo '<div class="share-button">Post</div>';
                }
                else { ?>
                  <div class='home-button'><a href='<?php echo $redirect; ?>'>Home</a></div>
                <?php } ?>

        <!--
            MAIN SIDE - More
        -->


        <div id="main-menu-1" class="main-menu-label"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABb0lEQVRoQ+3YwXHDIBAFUNxBSnEJSQc67s1OBSkpOeqoFtJB0kmunDbDjMhgRYpY2I+JZn2xx0jA2480Ayd3kM/pIA5nkN6StEQsEVAFbGmBClvcrSVSXDrQjZYIqLDF3f5KhIhenXPv4zi+FfcKvJGIrsz84r1/mqbpKw51A5kR17nxuTdMQDjnQqEdM3+kmCUkpHBJCtoNJkXMkE/v/WNMZW1pdYfZQwTY6luLiLrB5CA2IaGhB0wu4k/IvTESxC7kXhgpIgvSGlOCyIa0wpQiRBA0pgYhhqAwtYgiiDZGA1EM0cJoIaogtRhNRDWkFKONUIFIMQiEGiQXg0KoQvYwSIQ6ZAsT/o87u/CDmW82RXN71RfkFGVlC/AzSQQCkkic8RoGhYBClssMiYBDIoaZz+lBQdXDsHEz5BlZjjUMw0N6BvVvIYiJL/tskohBBBWwRATFanKpJdKkzIJBLBFBsZpcaok0KbNgkMMk8g0zHoJC+Bjs2wAAAABJRU5ErkJggg==" ></div>
            <!-- Dropdown Container - Lists -->
            <div class="main-menu-dropdown" id="main-menu-drop-1">
                     <a href="<?php echo get_permalink( get_page_by_path( 'report-a-post' ) ) ?>">Report a Post</a>
                     <a href="<?php echo get_permalink( get_page_by_path( 'contact-us' ) ) ?>">Contact Us</a>
                     <a href="<?php echo get_permalink( get_page_by_path( 'code-of-conduct' ) ) ?>">Code of Conduct</a>
                     <a href="<?php echo get_permalink( get_page_by_path( 'terms-of-use' ) ) ?>">Terms of Use</a>
                    <a href="https://icons8.com/">Icons from Icons8</a>
            </div>


        <!--
            MAIN SIDE - Give Feedback
        -->
        <div id="main-menu-4" class="main-menu-label">Give Feedback</div>
            <!-- Dropdown Container - Lists -->
            <div class="main-menu-dropdown" id="main-menu-drop-4">
                <?php echo do_shortcode('[contact-form-7 id="2589" title="Feedback"]'); ?>
            </div>


