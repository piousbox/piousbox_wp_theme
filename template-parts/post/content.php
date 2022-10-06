<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package piousbox_wp_theme
**/
// $categories_list = get_the_category_list( ", " );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

  <?php
  if ( is_sticky() && is_home() ) :
    echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
  endif;
  ?>

  <header class="entry-header">
    <?php
      if ( 'post' === get_post_type() ) {
        echo '<div class="entry-meta">';
        if ( is_single() ) {
          twentyseventeen_posted_on();
        } else {
          echo twentyseventeen_time_link();
          twentyseventeen_edit_link();
        };
        echo '</div><!-- .entry-meta -->';
      };

      if ( is_single() ) {
        the_title( '<h1 class="entry-title">', '</h1>' );
      } elseif ( is_front_page() && is_home() ) {
        the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
      } else {
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      }

      pi_entry_header();
    ?>

    <span class="cat-tags-links">
    <?php
      // Make sure there's more than one category before displaying.
      if ( $categories_list && twentyseventeen_categorized_blog() ) {
        echo '<span class="cat-links">' . twentyseventeen_get_svg( array( 'icon' => 'folder-open' ) ) . '<span class="screen-reader-text">' . __( 'Categories', 'twentyseventeen' ) . '</span>' . $categories_list . '</span>';
      }
    ?>
    </span>


  </header><!-- .entry-header -->

  <?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
    <div class="post-thumbnail">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
      </a>
    </div><!-- .post-thumbnail -->
  <?php endif; ?>

  <div class="entry-content">

    <div class="Subtitle">
      <?= the_subtitle(); ?>
    </div>

    <?php
    /* translators: %s: Name of current post */
    the_content(
      sprintf(
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
        get_the_title()
      )
    );

    wp_link_pages(
      array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      )
    );
    ?>
  </div><!-- .entry-content -->

  <?php
    if ( is_single() ) {
      twentyseventeen_entry_footer();
    }

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  ?>



</article><!-- #post-## -->
