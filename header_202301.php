<?php
/**
 * The header for the theme
**/

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<script data-ad-client="ca-pub-5283251584689528" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- OWA Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'https://owa.wasya.co/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', 'a50e92e3da677381a7986a4d5f4354c4']); // piousbox_com
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
(function() {
    var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
    owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
    _owa.src = owa_baseUrl + 'modules/base/dist/owa.tracker.js';
    var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End OWA Tracker -->



<?php wp_head(); ?>
</head>

<body class="issue-jan23 <?= join(" ", get_body_class()); ?>" >
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

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

    <?php if ( has_nav_menu( 'top' ) ) : ?>
      <div class="navigation-top">
        <div class="wrap">
          <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
          <?php /* get_template_part( 'template-parts/navigation/navigation', 'top2' ); // menu2 */ ?>
        </div><!-- .wrap -->
      </div><!-- .navigation-top -->
    <?php endif; ?>

  </header><!-- #masthead -->

  <?php

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
