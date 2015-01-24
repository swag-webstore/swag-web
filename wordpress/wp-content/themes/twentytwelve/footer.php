<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- for mobile menu -->
<?php if ( wp_is_mobile() ) : ?>
<a href="#menu" class="first hamberger">menu</a>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.pageslide.min.js"></script>
<script>
	/* Default pageslide, moves to the right */
	$(".first").pageslide();

	/* Slide to the left, and make it model (you'll have to call $.pageslide.close() to close) */
	$(".second").pageslide({ direction: "left", modal: true });
</script>
<?php endif; ?>
<!-- for mobile menu end -->
		
</body>
</html>