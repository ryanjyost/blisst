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
                        <?php echo do_shortcode('[front-end-cat]'); ?>
                    </div>
        <?php endif;  ?>



<?php
    $tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
    $tax_name = $tax->name;
?>

    <div class ="main-side-lists">
    <?php if($tax){ ?>
	        	<li id="selected-list">
					<?php echo $tax_name; ?>
				</li>
			<?php };?>
		<?php
            $this_list = wp_list_categories('taxonomy=playlist&hide_empty=0&show_option_none=No topics in this category.....yet&orderby=id&depth=1
            &title_li=&use_desc_for_title=1&echo=0');
	        if ($this_list) { ?>








	            <ul>
	            <?php echo $this_list; ?><br>
	            </ul>

        <?php } ?>


	</div>




    <?php get_search_form(); ?>



