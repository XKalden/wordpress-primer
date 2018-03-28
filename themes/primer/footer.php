<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer_flex">
				
					<div class="first_flex">
						<h3 class="first_fiex_h2">Got a question? Talk to us!</h3>
						<p class="first_flex_p">We'd love to hear from you!</p>
						<a class="see_more_btn" href="http://localhost:8888/primer/contact/">Contact</a>
					</div>

					<?php dynamic_sidebar( 'sidebar-1' ); ?>

					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
