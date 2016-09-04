<html>
<?php

// =============================================================================
// HOME PAGE
// =============================================================================

$is_filterable_index = is_home() && x_get_option( 'x_ethos_filterable_index_enable' ) == '1';

?>

<?php get_header(); ?>

<div class="x-container max width main">

	<!--  Main sidebar -->
	<div class="main-side">
	     <?php x_get_view( 'global', 'main-side' ); ?>
	</div>

  	<!--  Page Content -->
  	<div class="column-middle">

  	 		<div class="top-home-btn"><a href = "<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></div>

  		<div class="text-area">

		  <h2>Code of Conduct</h2>

		  <p>
				  This hopes to be as free and open a platform as possible. But, as most would agree, certain types of activities break basic ethical and behavioral boundaries, which will most likely result in us deleting the content and whatever user produced it. The following is hopefully obvious, but feel free to <a href="http://localhost:8888/mumbling/contact-us/">contact us</a> with feedback.<br><br>

				  1.Always make sure your posts are accurate. Mistakes happen, but it's essential that we give credit where credit is due.<br><br>

				  2. Don't troll. It's a <a href="http://www.urbandictionary.com/define.php?term=trolling">loose definition</a>, so we'll be the judge.<br><br>

				  3. Don't make private names or information public. If you suspect someone has posted private information against someone's wishes, please <a href="http://localhost:8888/mumbling/report-a-post/">report the post</a>.<br><br>

				  4. Don't outright lie or disseminate false information. If you think someone is blatantly doing so, we recommend calling them out, proving them wrong or reporting it.<br><br>

				  5. Don't be an asshole.<br><br>

				  6. <span style="font-style:italic">Please</span> don't be an asshole.<br><br>


		  </p>
		</div>

  	</div>

</div>

<?php get_footer(); ?>
</html>