<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage licany
 */

get_header(); ?>

<div id="main-content" role="main">

  <?php if ( have_posts() ) : ?>

    <header class="page-header">
      <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'your-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header><!-- .page-header -->

    <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

      // End the loop.
      endwhile;

      // Previous/next page navigation.
      licany_paging_nav();

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
  ?>

</div><!-- #main-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
