<?php

// =============================================================================
//  MAIN SIDEBAR NAVIGATION
// =============================================================================

?>

<link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>


    <!-- User Login -->
    <?php if (!is_user_logged_in()){ ?>
    	<div class="nav-logo">
		 	<a href = "<?php echo esc_url( home_url( '/' ) ); ?>">blisst</a>
		</div>
	 <?php } ?>


    <?php if(is_user_logged_in()): ?>
         <!-- Dropdown to add list -->
        <div id="add-list">
            <?php echo do_shortcode('[front-end-list]'); ?>
        </div>
    <?php endif;  ?>


    <!--  Display current list -->
    <div class ="main-side-lists">


        <div class="toggle-lists">
            <p id="toggle-to-topics" class="toggle-lists-active">TOPICS</p><p id="toggle-to-users">USERS</p>
        </div>


        <div id="users-list-cont">
        <?php // List of users
            $terms = get_terms('playlist', array('hide_empty' => 0,));

                if ( ! empty( $terms ) && ! is_wp_error( $terms )) { // users lists
                    $count = count( $terms );
                    $i = 0;
                    $term_list = "<ul id='users-list'>";
                    foreach ( $terms as $term ) {

                        if(username_exists($term->name)){
                            $i++;
                            $term_list .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
                            if ( $count != $i ) {
                            }
                            else {
                                $term_list .= '</ul>';
                            }
                        }

                    }
                    echo $term_list;
                }
        ?>
        </div>

        <div id="topics-list-cont">
        <?php //list of topics
            if ( ! empty( $terms ) && ! is_wp_error( $terms )) { // topics lists
                    $count = count( $terms );
                    $i = 0;
                    $term_list = "<ul id='topics-list'>";
                    foreach ( $terms as $term ) {

                        if(!username_exists($term->name)){
                            $i++;
                            $term_list .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a></li>';
                            if ( $count != $i ) {
                            }
                            else {
                                $term_list .= '</ul>';
                            }
                        }

                    }
                    echo $term_list;
            }
        ?>
        </div>



	</div>




    <?php get_search_form(); ?>



