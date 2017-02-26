<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-container">
		<div class="contactInfo">
			<h3> Contact Info</h3>
				<p><i class="fa fa-envelope" aria-hidden="true"></i> info@inhabitent.com</p>
				<p><i class="fa fa-phone" aria-hidden="true"></i> 778-456-7891</p>
				<p class="sns-icon">
				<span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
				<span><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
				<span><i class="fa fa-google-plus-square" aria-hidden="true"></i></span>
				</p>
		</div>
		<div class="businessHour"> 
			<h3>Business Hours</h3>
				<p><span>Monday-Friday:</span> 9am to 5pm</p>
				<p><span>Saturday:</span> 10am to 2pm</p>
				<p><span>Sunday:</span> Closed</p>
		</div>
		
		<div class="footerLogo">
			<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo">
		</div>

		<div class="copyright">
			<p> Copyright @ 2016 inhabitent</p>
		</div>
	</div>
	</footer><!-- #colophon -->
		<?php wp_footer(); ?>
	</body>
</html>

