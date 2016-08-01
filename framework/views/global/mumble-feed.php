<?php

// =============================================================================
// MUMBLE-FEED.PHP
// -----------------------------------------------------------------------------
// The scroll of RECENT mumbles.
// =============================================================================

?>

<div class="mumble-feed">


		<?php
			$args = array( 'post_type' => 'mumble', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
		?>

<!--  Query Mumbles in Category    -->

<?php
		$cat = get_category( get_query_var( 'cat' ) );
		$cat_id = $cat->cat_ID;
		$cat_slug = $cat->slug;
?>
	<?php if ( in_category($cat_slug) ) : ?>

	<!--  Display for single mumble in the loop    -->
	<div class="mumble-feed-container">

		<div class="mumble-feed-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</div>

		<?php $author = get_the_author() ?>

		<div class="mumble-feed-author">
			<?php  echo "By ";?><?php the_author_posts_link(); ?>
		</div>

		<div class="mumble-feed-excerpt">
			<?php echo the_excerpt()?>
		</div>

		<div class="mumble-feed-date">
			<?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
		</div>
	</div>

	<?php endif; ?>

	<?php endwhile; ?>


	</div>
<!--  End the Loop of Mumbles    -->