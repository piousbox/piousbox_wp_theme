<?
/**
 * 202301 - The header for the theme
**/
?><!DOCTYPE html>
<html <? language_attributes(); ?> class="js svg" >
<head>
  <meta charset="<? bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <? wp_head(); ?>

  <!-- Matomo -->
  <script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//analytics.wasya.co/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '3']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <!-- End Matomo Code -->

</head>

<body class="issue-jan23 <?= join(" ", get_body_class()); ?>" >
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><? _e( 'Skip to content', 'twentyseventeen' ); ?></a>

  <header id="masthead" class="site-header" role="banner">
    <div class="custom-header">
      <div class="custom-header-media">
        <? the_custom_header_markup(); /* This is currently empty */ ?>
      </div>

      <div class="site-branding site-branding-20230103">
        <div class="wrap">

          <? the_custom_logo(); ?>

          <div class="site-branding-text">
            <h1 class="site-title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><? bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?= get_bloginfo( 'description', 'display' ); ?></p>
          </div>

          <? if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
            <a href="#content" class="menu-scroll-down"><?= twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><? _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
          <? endif; ?>

        </div>
      </div>

    </div>

    <? if ( has_nav_menu( 'top' ) ) : ?>
      <div class="navigation-top">
        <div class="wrap">
          <? get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
          <? /* get_template_part( 'template-parts/navigation/navigation', 'top2' ); // menu2 */ ?>
        </div><!-- .wrap -->
      </div><!-- .navigation-top -->
    <? endif; ?>

  </header><!-- #masthead -->

  <?

  /*
   * If a regular post or page, and not the front page, show the featured image.
   * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
   */
  if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
    echo '<div class="single-featured-image-header">';
    echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
    echo '</div><!-- .single-featured-image-header -->';
  endif;
  ?>

  <div class="site-content-contain">
    <div id="content" class="site-content">
