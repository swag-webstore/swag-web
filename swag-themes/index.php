<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="wrapper" id="fullpage">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- <?php the_title(); ?> -->
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

</div><!--wrapper fullpage-->

<?php get_footer(); ?>
