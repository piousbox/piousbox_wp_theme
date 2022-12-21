<hr />
<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
  <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
    <?php
    echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
    echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
    _e( 'Menu', 'twentyseventeen' );
    ?>
  </button>

  <? wp_nav_menu( array( 'theme_location' => 'top2', 'menu_id' => 'top2-menu', ) ); ?>

  <? if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
    <a href="#content" class="menu-scroll-down"><?= twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
  <? endif; ?>
</nav>
