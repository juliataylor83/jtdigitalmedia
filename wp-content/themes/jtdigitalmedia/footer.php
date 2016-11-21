<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JTDigitalMedia
 */

?>

			</div><!-- #content -->
		</div><!-- .main-page -->
	</div><!-- .main-content-area full -->

	<div class="footer-area full">
		<div class="main-page">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">

					<div id="copyright">
						<a href="http://jt-digitalmedia.com">© 2016 JTDigitalMedia, LLC. All Right Reserved. </a><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jtdigitalmedia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s.', 'jtdigitalmedia' ), 'WordPress' ); ?></a>
					</div>
					<div class="social-btns">
						<a href="https://facebook.com/jtdigitalmedia" target="_blank" class="soc-icon fb"></a>
						<a href="https://twitter.com/jtdigitalmedia" target="_blank" class="soc-icon tw"></a>
						<a href="https://www.linkedin.com/in/jtdigitalmedia" target="_blank" class="soc-icon ln"></a>
					</div>
				
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- .main-page -->
	</div><!-- .footer-area full -->

<?php wp_footer(); ?>

</body>
</html>
