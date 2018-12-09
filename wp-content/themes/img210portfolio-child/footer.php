<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package img210Portfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

		<?php wp_nav_menu(
			array(
					'theme_location' => 'footer-menu',
					'container_class' => 'footer-menu'
				)
				); ?>


			<p>&copy; <?php echo get_the_date( $d = 'Y') ?> <a href="#">Jason Thompson</a>. All rights reserved.</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
