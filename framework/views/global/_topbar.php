<?php

// =============================================================================
// VIEWS/GLOBAL/_TOPBAR.PHP
// -----------------------------------------------------------------------------
// Includes topbar output.
// =============================================================================

?>

<?php if ( x_get_option( 'x_topbar_display' ) == '1' ) : ?>


<div class="x-topbar">

	<div class=x-topbar-signin>
		<a href="#" class="popup-register type=newbie_form">SIGN UP</a>
		<a href "#"  class="popup-login">LOGIN</a>
	</div>


	<div class="x-topbar-menu">
		<a href ="http://localhost:8888/mumbling/code-of-conduct/">CODE OF CONDUCT</a><a href ="http://localhost:8888/mumbling/terms-of-use">TERMS OF USE</a><a href ="http://localhost:8888/mumbling/privacy-policy/">PRIVACY POLICY</a><a href ="http://localhost:8888/mumbling/contact-us/">CONTACT US</a><a href ="http://localhost:8888/mumbling/report-a-post/">REPORT A POST</a><a href ="http://localhost:8888/mumbling/about/">ABOUT</a>
	</div>

</div>

<?php endif; ?>