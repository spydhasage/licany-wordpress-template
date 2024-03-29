<?php
/**
 * The template for displaying single posts.
 *
 * @package WordPress
 * @subpackage licany
 */

get_header(); ?>

<div id="main-content" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <?php
      // If comments are open or we have at least one comment, load up the comment template
      if ( comments_open() || '0' != get_comments_number() )
        comments_template();
    ?>

  <?php endwhile; // end of the loop. ?>

</div><!-- #main-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
