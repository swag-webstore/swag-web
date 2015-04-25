<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="fullpage-wrapper" id="fullpage">

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'single' ); ?>
    <?php if( siteorigin_setting('navigation_post_nav') ) vantage_content_nav( 'nav-below' ); ?>
    <?php if ( comments_open() || '0' != get_comments_number() ) : ?>
    <?php comments_template( '', true ); ?>
<?php endif; ?>

</div><!--wrapper fullpage-->

<?php get_footer(); ?>
