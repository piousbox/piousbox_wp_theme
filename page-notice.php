
<?
/**
 * The template for displaying all pages
**/
get_header();

$notices = [];
if ($_GET['invalid_username']) {
  $notices[] = "The provided username is invalid.";
}
if ($_GET['invalid_email']) {
  $notices[] = "The provided email is invalid.";
}
if ('registered' == $_GET['checkemail']) {
  $notices[] = '<p class="message">	Registration complete. Please check your email, then visit the <a href="/wp-login.php">login page</a>.<br></p>';
}

?>

<div class="wrap Page">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <div class='Notices'>
      <? foreach ( $notices as $notice ) : ?>
        <div class='Notice'><?= $notice; ?></div>
      <? endforeach; ?>
    </div>

    </main>
  </div>
</div>

<?
get_footer();

