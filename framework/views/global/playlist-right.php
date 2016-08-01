<?php

// =============================================================================
// PLAYLIST_RIGHT.PHP
// -----------------------------------------------------------------------------
// Right column for playlists
// =============================================================================

?>




		<div class="subcat-info">

			<div class="subcat-title">
				<?php
				    $tax = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
				    echo $tax->name;
				?>
			</div>

				<!-- Expand Arrow icon by Icons8 -->
				<img id="dropdown" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAABeUlEQVRoQ+3YzVHDMBAF4NXFNxhoIDVQAlRCaACGShjSAGmFDqAFNwDXMANiHMeDHMexdrVPEZ71yWNbP98++SA5msnlZuIgg5SWpCViiYAqYEsLVFhxt5aIuHSghpYIqLDibgeJrOrNC5F7vV9Ua3GvwIar+mvpvX/4Oa9uHi/dZzdUD9IiaNm+dHelYRoEkW/mSN7TW4jpQZ7rzdoR3f4VtBxMiNjN7/37rLruUhksrRIxU4jt+jm0nEvCxCBGIc2LEjCxiKOQU2M4iEnIqTBcRBQkN0aCiIbkwkgRLAgak4JgQ1CYVIQIoo3RQIghWhgtRBIkFaOJSIZIMdoIFQgXg0CoQWIxKIQqZAqDRKhDxjDtVqHd2e2u3qYoeC6+hZyiDLcAvfmpIyCJdFMewUAQUMiBZQZDwCEB5io8KBD/CEcaQv6R/fGePvxFeAb1byGIie/3mSURgzAqYIkwipXlU0skS5kZg1gijGJl+dQSyVJmxiCzSeQXnt4iQpSzA4wAAAAASUVORK5CYII=" width="50" height="50">


		<div class="subcat-desc">
			    <?php echo category_description( $category_id ); ?>
			</div>

		</div>






<div class = "subcat-comments">
    <?php disqus_embed('mumblingmillennials'); ?>
</div>







