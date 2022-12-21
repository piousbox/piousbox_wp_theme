<?
/**
 * _vp_ 2022-12-21
**/
?>

<? if (has_nav_menu('footer-tos')) : ?>
<footer class="site-info">
  <div class='wrap'>
  	<? // if ( function_exists('the_privacy_policy_link') ) { the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' ); } ?>
    <? wp_nav_menu( array( 'theme_location' => 'footer-tos' ) ); ?>
  </div<>
</footer>
<? endif; ?>
