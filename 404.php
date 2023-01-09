<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage licany
 */

get_header(); ?>

<div id="main-content" role="main">

  <h1>Oops! That page can't be found.</h1>
  <p>It looks like nothing was found at this location. Maybe try a search or one of the links below?</p>

  <?php get_search_form(); ?>

  <h2>Recent Posts</h2>
  <ul>
    <?php wp_get_archives( 'type=postbypost&limit=10' ); ?>
  </ul>

  <h2>Categories</h2>
  <ul>
    <?php wp_list_categories( 'title_li=' ); ?>
  </ul>

</div><!-- #main-content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
