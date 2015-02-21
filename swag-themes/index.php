<?php get_header(); ?>
<?php get_sidebar(); ?>


<div id="header"></div>

<div class="wrapper" id="fullpage">

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- <?php the_title(); ?> -->
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

</div><!--wrapper-->

<div id="footer">Footer</div>

<?php get_footer(); ?>
