<?php
/**
 * The template for displaying archive pages.
 *
 * @package WordPress
 * @subpackage licany
 */

get_header(); ?>

<div id="main-content" role="main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header">
      <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="taxonomy-description">', '</div>' );
      ?>
    </header><!-- .page-header -->

    <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
      endwhile;

      licany_paging_nav();

    else :
      get_template_part( 'content', 'none' );
    endif;
  ?>

</div><!-- #main-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
