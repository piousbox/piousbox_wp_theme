<?php
/**
 * The template for displaying archive pages
 */

get_header();
?>

<div class="wrap Archive">

  <header class="page-header">
    <h1 class="page-title"><? the_archive_title(); ?></h1>
    <div class="taxonomy-description"><? the_archive_description(); ?></div>
  </header>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <? if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          get_template_part( 'template-parts/post/content', get_post_format() );
        }
        the_posts_pagination(array(
          'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
          'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
          'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
        ) );
      } else {
        get_template_part( 'template-parts/post/content', 'none' );
      } ?>

    </main>
  </div>
  <? get_sidebar(); ?>
</div>

<?
get_footer();
