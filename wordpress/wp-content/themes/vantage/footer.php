			<?php do_action( 'vantage_main_bottom' ); ?>
		</div><!-- .full-container -->
	</div><!-- #main .site-main -->

	<?php do_action( 'vantage_after_main_container' ); ?>

	<?php do_action( 'vantage_before_footer' ); ?>

	<?php get_template_part( 'parts/footer', apply_filters( 'vantage_footer_type', '' ) ); ?>

	<?php do_action( 'vantage_after_footer' ); ?>

</div><!-- #page-wrapper -->

<?php do_action('vantage_after_page_wrapper') ?>

<?php wp_footer(); ?>

<!-- for mobile menu -->
<?php if ( wp_is_mobile() ) : ?>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.pageslide.min.js"></script>
<script>
	/* Default pageslide, moves to the right */
	$(".first").pageslide({modal: false});

	/* Slide to the left, and make it model (you'll have to call $.pageslide.close() to close) */
	/*$(".second").pageslide({ direction: "left", modal: true });*/
</script>
<?php endif; ?>
<!-- for mobile menu end -->

</body>
</html>
