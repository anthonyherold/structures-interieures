<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<section class="footer">
	    <div class="row">
	      <div class="large-4 columns">
	        <img class="img-logo-blanc" src="images/logo-blanc.png">
	        <p>2017 © “Structures intérieures” All rights reserved  </p>
	      </div>
	      <div class="large-4 columns">
	        <a href="about.html" class="lien-footer-2">Qui sommes-nous</a><br />
	        <a href="about.html" class="lien-footer-2">Conditions générales de ventes</a><br />
	      </div>
	      <div class="large-4 columns">
	        <a href="about.html" class="lien-footer-2">Qui sommes-nous</a><br />
	        <a href="about.html" class="lien-footer-2">Conditions générales de ventes</a><br /></div>
	    </div>
	  </section>


		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
