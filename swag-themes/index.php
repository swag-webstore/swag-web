<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="wrapper">

<?php echo __FILE__ . PHP_EOL; ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section id="support">
      <div class="container">
        <div class="section-heading scrollpoint sp-effect3">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="row">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>

</div><!--wrapper-->

<?php get_footer(); ?>

