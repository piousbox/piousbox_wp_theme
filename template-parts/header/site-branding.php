<?
/**
 * Displays header site branding
**/
$description = get_bloginfo( 'description', 'display' );
?>
<div class="site-branding site-branding-20220509">
  <div class="wrap">

    <? the_custom_logo(); ?>

    <div class="site-branding-text">
      <? if ( is_front_page() ) : ?>
        <h1 class="site-title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><? bloginfo( 'name' ); ?></a></h1>
      <? else : ?>
        <p class="site-title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><? bloginfo( 'name' ); ?></a></p>
      <? endif; ?>

      <? if ( $description || is_customize_preview() ) : ?>
        <p class="site-description"><?= $description; ?></p>
      <? endif; ?>
    </div>

    <? if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
      <a href="#content" class="menu-scroll-down"><?= twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><? _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
    <? endif; ?>

  </div>
</div>
