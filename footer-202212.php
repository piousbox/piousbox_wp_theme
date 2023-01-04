
    </div><!-- #content -->

    <footer class="site-footer" role="contentinfo">
      <div class="wrap">
        <? get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>

        <? if ( has_nav_menu( 'social' ) ) : ?>
          <nav class="social-navigation" role="navigation" aria-label="<? esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
            <? wp_nav_menu(array(
              'theme_location' => 'social',
              'menu_class'     => 'social-links-menu',
              'depth'          => 1,
              'link_before'    => '<span class="screen-reader-text">',
              'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
            ) ); ?>
          </nav>
        <? endif; ?>
      </div>
    </footer>

    <? get_template_part( 'template-parts/footer/site', 'info' ); ?>
  </div><!-- .site-content-contain -->
</div><!-- #page -->
<? wp_footer(); ?>

</body>
</html>
