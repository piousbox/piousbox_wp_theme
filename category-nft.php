<?php
/**
 * The template for displaying the NFT's Category
 */

get_header();
$cat_name = 'nft';

global $wp_query;
$current_page = get_queried_object();
$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query(array(
  'posts_per_page' => 4,
  'paged'         => $paged,
  'category_name' => $cat_name,
  'order'         => 'desc',
  'post_type'     => 'post',
  'post_status'   => 'publish',
));
?>

<div class="wrap categories-nft">

  <header class="page-header"><?
    $cat_count = get_category_by_slug( $cat_name );
    the_archive_title( '<h1 class="page-title" >', ' ('.$cat_count->count.') </h1>' );
    the_archive_description( '<div class="taxonomy-description">', '</div>' );
  ?></header>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main"><?

      if ($query->have_posts()) {
          while ($query->have_posts()) {
          $query->the_post();
          get_template_part( 'template-parts/post/content');
      }

        // next_posts_link() usage with max_num_pages
        next_posts_link( 'Older Entries', $query->max_num_pages );
        previous_posts_link( 'Newer Entries' );

        // wp_reset_postdata();
      }

      // the_posts_pagination(
      //   array(
      //     'prev_text'          => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page') . '</span>',
      //     'next_text'          => '<span class="screen-reader-text">' . __( 'Next page') . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
      //     'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page') . ' </span>',
      //   )
      // );

    ?>

    </main>
  </div>
  <?php get_sidebar(); ?>

  <aside id="secondary" class="widget-area" role="complementary" aria-label="Blog Sidebar">
    <section id="recent-posts-2" class="widget widget_recent_entries">
      <? /* get_template_part('catlist'); */ ?>
    </section>
  </aside>


</div><!-- .wrap -->

<?php
get_footer();
