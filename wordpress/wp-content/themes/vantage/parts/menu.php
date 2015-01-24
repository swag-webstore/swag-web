<?php
/**
 * Part Name: Default Menu
 */
?>
<nav role="navigation" class="site-navigation main-navigation primary <?php if( siteorigin_setting('navigation_use_sticky_menu') ) echo 'use-sticky-menu' ?>">
	<?php if ( !wp_is_mobile() ): ?>
	<div class="full-container">
		<?php if( siteorigin_setting('navigation_menu_search') ) : ?>
			<div id="search-icon">
				<div id="search-icon-icon"><div class="icon"></div></div>
				<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
					<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" />
				</form>
			</div>
		<?php endif; ?>

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'link_before' => '<span class="icon"></span>' ) ); ?>
	</div>
	<?php else: ?>
	<div class="full-container">
		<a class="first" href="#sp-site-navigation"><img src="http://www.swag-clothing.net/wp-content/uploads/2014/08/hamburger.png" height="35" width="35"></a>
		<nav id="sp-site-navigation" class="mobile-device">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'toggle' ) ); ?>
		</nav>
	</div>
	<?php endif; ?>

</nav><!-- .site-navigation .main-navigation -->
