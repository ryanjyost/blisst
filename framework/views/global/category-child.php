<?php

// =============================================================================
// CATEGORY_TEMPLATE.PHP
// -----------------------------------------------------------------------------
// This code feeds through to all of the individual category archive pages
// =============================================================================

?>






<!-- LEFT COLUMN-->

<div class="category-left">

	<!--  CATEGORY INFO -->
	<div class="category-box">

		<?php x_get_view( 'global', 'category-top' ); ?>

	</div>

<!--  Share Buttons    -->
<?php //x_get_view( 'global', 'share-buttons' ); ?>



</div>

<div class = "category-column-right">
	<div class = "category-disqus-cont">
		<div id="disqus_thread"></div>
		<!-- Embed Disqus Comments -->
			<script>
			   	 /**
			     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
			     */

			    var disqus_config = function () {
			        this.page.url = '<?php echo get_permalink(); ?>';
					this.page.identifier = '<?php echo dsq_identifier_for_post($post); ?>';
			    };

			    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
			        var d = document, s = d.createElement('script');

			        s.src = '//EXAMPLE.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!

			        s.setAttribute('data-timestamp', +new Date());
			        (d.head || d.body).appendChild(s);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
	</div>
</div>






